# hl.loess.ru

This was made back in 2010, so CP is Windows-1251, DB is MySQL and alot of dirt is in here

To run local copy:
* move ./persistent-example/ to /persistent/, chmod o+w /persistent/\*.dat
* comment out 18-20, 22 and uncomment line 23 in Dockerfile
* change docker-compose.yml settings
* run docker-compose up --build -d

To do:
* get rid of http:// in links
* move db to sqlite
* do something with edit system
* fix bugs and clean up comments
* move to v2 site and forget about this
* unveil content/ented
* unveil content/2012-04-26 engine
* revive HLDM server
