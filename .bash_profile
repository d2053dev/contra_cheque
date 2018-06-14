MYSQL_VERSION=latest

### Delete mysql database
$ rm -rf ~/.laradock/data/mysql

### rebuild mysql image
$ docker-compose build mysql

### retry
$ docker-compose up -d nginx mysql phpmyadmin
