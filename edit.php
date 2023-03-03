<?php
//получить форму, ид/ip ззаписывальщика, проверить, записать куки,
//сравнить с оригиналом, преобр в мускул, записать в базу
class db{
    public $db;    //db object
    public function __construct(){
        $configs = include('persistent/config.php');
        $this->db=new PDO('mysql:host='.$configs['dbhost'].';dbname='.$configs['dbname'],$configs['dbusername'],$configs['dbpassword']);
        unset($configs);
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->db->query('SET NAMES cp1251;');
    }
    public function rawquery($q){
        $result=$this->db->query($q) or die('error at db->rawquery('.$q.')');
        return $result;
    }
    public function getmodscount(){  //returns int
        $result=$this->db->query('SELECT COUNT(*) FROM `hl_mods`;');
        $result=$result->fetch(PDO::FETCH_NUM);
        return $result[0];
    }
    public function getmodeditscount($id,$ip){  //returns int
        $id=intval($id);
        if (!($id>0 and $id<=$this->getmodscount()) /*or !is_int($id)*/){
            die('error at db->getmodeditscount(id)');
        }
        $id=$this->db->quote($id);
        $ip=$this->db->quote($ip);
        $result=$this->db->query('SELECT COUNT(*) FROM `hl_mods_edits` WHERE `id`='.$id.' AND `ip`='.$ip.';');
        $result=$result->fetch(PDO::FETCH_NUM);
        return $result[0];
    }
    public function getmodbyid($id,$identity=0){    //returns assoc array
        /*
Array
(
    [id] => 11
    [name] => Abandon (The)
    [lastver] =>
    [type] => S
    [requirements] =>
    [released] => 2009-12-01
    [lastupdate] => 2009-12-01
    [filename] => the_abandon.zip
    [alivelinks] => http://blood-loss.narod.ru/files/hl/mods/the_abandon.zip
    [dowehave] => Y
    [dev] => Trigger http://blood-loss.narod.ru/
    [homepage] => http://half-life.ru/forum/showthread.php?threadid=14267
    [maps] => 1
    [dlltexmodlsoun] =>
    [rate] =>
    [c17rate] =>
    [c17path] =>
    [pp] =>
    [moddb] =>
    [reviews] => http://half-life.ru/forum/showthread.php?threadid=14267
    [twhl] =>
    [desc] =>
    [anything else] =>
)
         */
        $id=intval($id);
        if (!(($id>0 and $id<=$this->getmodscount()) or strlen($identity)!=8 or $identity!=0) /*or !is_int($id)*/){
            die('error at db->getmodbyid(id)');
        }
        $id=$this->db->quote($id);
    	//echo($identity);
        if ($identity===0) {  //по идее этот блок не нужен, идент всегда считается
	        //echo ("0");
            $result=$this->db->query('SELECT * FROM `hl_mods` WHERE ID='.$id.';');
            return $result->fetch(PDO::FETCH_ASSOC);//fetch(PDO::FETCH_ASSOC);
        }
        else {
        	//echo ("1");
            $identity=$this->db->quote($identity);
            $result=$this->db->query('SELECT * FROM `hl_mods_edits`
          WHERE `counter`=(
            SELECT max(`counter`) FROM `hl_mods_edits`
              WHERE `identity`='.$identity.' AND `id`='.$id.');');//запрос последнего едита
            $result=$result->fetch(PDO::FETCH_ASSOC);
            if ($result==FALSE) {
                $result=$this->db->query('SELECT * FROM `hl_mods` WHERE ID='.$id.';');
                return $result->fetch(PDO::FETCH_ASSOC);
            }
            else return $result;
        }

    }
}

class input{
    public function check_input_vars($vars){
        //print_r($vars);
        if (!$this->check_int($vars['id'])) return FALSE;
        if (!$this->check_date($vars['released'])) return FALSE;
        if (!$this->check_date($vars['lastupdate'])) return FALSE;
        if (!$this->check_identity($vars['identity'])) return FALSE;
        foreach ($vars as $v) if (!$this->check_text($v)) return FALSE; //todo:добавить размеры по полям
        if (count($vars)>24) return FALSE;
        return TRUE;
    }
    private function check_int($i){
        if (filter_var($i,FILTER_VALIDATE_INT)!="") return TRUE;
        else return FALSE;
    }
    private function check_date($i){
        if ($i=='0000-00-00' or $i=="") return TRUE;
        $i=explode("-",$i);
        if(checkdate($i[1],$i[2],$i[0])) return TRUE;
        else return FALSE;
    }
    public function get_identity(){
        return substr(md5('zzto'.$_SERVER["REMOTE_ADDR"].(!isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])?'':$_SERVER["HTTP_ACCEPT_LANGUAGE"]).
        $_SERVER["HTTP_USER_AGENT"].$_SERVER["HTTP_ACCEPT"]),0,8);
    }
    private function check_identity($i){
        if ($i!=$this->get_identity()) {return FALSE;}
        else return TRUE;
    }
    private function check_text($i,$len=3000){
        if (stristr($i,"insert into ")
            or stristr($i,"truncate table ")
            or stristr($i,"where id=")
            //or stristr($i,"DELETE FROM ")
            or stristr($i,'<script>')
            or stristr($i,"javascript")
            or strlen($i)>$len) return FALSE;
        else return TRUE;
    }
    public function convert_input($input){
        $dlltexmdlsnd='';
        foreach ($input as $k=>$v){
            if ($k=='steamcompatible' and $v=='on'){  }
            elseif ($k=='dll' and $v=='on'){$dlltexmdlsnd.='dll,';unset ($input[$k]);}
            elseif ($k=='tex' and $v=='on'){$dlltexmdlsnd.='tex,';unset ($input[$k]);}
            elseif ($k=='mdl' and $v=='on'){$dlltexmdlsnd.='mdl,';unset ($input[$k]);}
            elseif ($k=='snd' and $v=='on'){$dlltexmdlsnd.='snd';unset ($input[$k]);}
        }
        $input['dlltexmodlsoun']=trim($dlltexmdlsnd,',');
        $input['ip']=$_SERVER["REMOTE_ADDR"];
        return $input;

    }
    public function compare_edits($new,$db){//возвращает массив изменённых индексов или false
        //print_r($new);print_r($db);
        unset($new['identity'],$db['identity']);
        unset($new['ip'],$db['ip']);
        unset($db['rate']);
        unset($db['counter']);//из таблицы едитов
        if (isset ($db['steamcompatible']) and $db['steamcompatible']=="")  unset($db['steamcompatible']);//из таблицы едитов
        unset($db['c17rate']);
        unset($db['c17path']);
        unset($db['anything else']);
        $changed=array();
        foreach ($db as $k=>$v){
            if($k=='dowehave'){
                if (stristr($v,'steam') and $new['steamcompatible']=='on'){}
                elseif (!stristr($v,'steam') and !isset($new['steamcompatible'])){}
                else $changed[]='steamcompatible';
            }
            elseif ($new[$k]!=$v) $changed[]=$k;
        }
        //print_r ($changed);
        if (count($changed)>0) return $changed;
        else return FALSE;
    }
    public function process_all_of_these_things($input,$dbobject){
        $this->check_input_vars($input) or die ('check your inputs!');
        $converted=$this->convert_input($input);
        //print_r ($converted);
        $changed=$this->compare_edits($converted,$dbobject->getmodbyid($input['id'],$this->get_identity()))
            or die ("Nothing changed! <a href=\"http://hl.loess.ru/?edit=".$input['id']."\">go back</a>");
        //print_r ($changed);
//        foreach($changed as $k=>$v) $changed[$v]=$v;
 //       $changed=array_intersect_key ($converted,$changed);
  //      $changed['id']=$converted['id'];
   //     $changed['identity']=$converted['identity'];
    //    $changed['ip']=$converted['ip'];
        //print_r ($changed);
      //  foreach ($changed as $k=>$v) $help[$k]=':'.$k;//добавляем ':' для запроса
       // foreach ($changed as $k=>$v) $help2[$k]='`'.$k.'`';//добавляем '`имяполя`' для запроса
        foreach ($converted as $k=>$v) $help[$k]=':'.$k;//добавляем ':' для запроса
        foreach ($converted as $k=>$v) $help2[$k]='`'.$k.'`';//добавляем '`имяполя`' для запроса
        $statement=$dbobject->db->prepare("INSERT INTO hl_mods_edits (".implode(",",$help2).")
                                                             VALUES(".implode(",",$help).");");
        //print_r ($statement);
        if ($statement->execute($converted)) {
            echo "Edit successfull =) <a href=\"http://hl.loess.ru/?mod=".$input['id']."\">check it out</a>";
            mail('smartwiz@mail.ru','hl.loess.ru edit',print_r($converted, 1) . "
            " . print_r($statement, 1));
        }
        else {
            echo "Something went wrong =(";
            mail ('smartwiz@mail.ru','hl.loess.ru edit went wrong',print_r($converted,1)."
            ".print_r($statement,1));
        }
        //выбрать изменённые поля+id+ident+ip, quote, write
/*      $statement = $link->prepare("INSERT INTO testtable(name, lastname, age) VALUES(:fname, :sname, :age)");
        $statement->execute(array("fname" => "Bob","sname" => "Desaunois","age" => "18"));*/
    }

}
//die();
if (isset($_POST['id'])) {
    $db = new db;
//проверить не более 20 правок на один мод id
    echo("<pre>");

    $editsamount=$db->getmodeditscount($_POST['id'],$_SERVER["REMOTE_ADDR"]);
    if ($editsamount>=20) die('This MOD has exceeded maximum amount of edits!
please, check back later after edits approval');
    //print_r($_POST);
    $input = new input();
    $input->process_all_of_these_things($_POST, $db);
    echo('<br /><pre>');

//var_dump($input->compare_edits($converted,$db->getmodbyid($id)));

}

?>