# hl.loess.ru

This was made back in 2010, so CP is Windows-1251, DB is MySQL and alot of dirt is in here

To run local copy:
* move ./persistent-example/ to /persistent/, change settings in /persistent/config.php,
* comment out 15-17, 19 and uncomment line 20 in Dockerfile
* change docker-compose.yml settings
* run docker-compose up --build -d

To do:
* move db to sqlite
* do something with edit system
* fix bugs and clean up comments
* move to v2 site
* unveil content/ented
* unveil content/2012-04-26 engine
* (not really site-related) revive HLDM server