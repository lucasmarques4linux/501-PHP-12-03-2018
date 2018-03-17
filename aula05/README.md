#  PostgreSQL

## Instalar o PostgreSQL

```
sudo apt update
sudo apt install postgresql
```

## Logando a primeira vez
```
sudo su
su postgres
psql
```

## Com o usuário postgres, criar o banco, usuário e trocar o dono do banco
```
CREATE DATABASE aula;
CREATE USER lucas PASSWORD '123';
ALTER DATABASE aula OWNER TO lucas/
```
## Desconectou de tudo
```
\q
exit
exit
exit
```

## Logando no novo banco com o novo usuário
```
psql -h localhost -U lucas aula
```

## Criando as tabelas
https://github.com/lucasmarques4linux/500-PHP-26-02-2018/blob/master/projeto/script-postgres.sql

# MySQL

## Logando como super usuário
```
sudo su
mysql
```

## Criando bando de dados
```
CREATE DATABASE aula;
```
## Criando usuário e dando permissão de super usuário
```
CREATE USER 'lucas'@'localhost' IDENTIFIED BY '@da4linux';
GRANT ALL PRIVILEGES ON *.* TO 'lucas'@'localhost';
```

## Desconectando de tudo
```
exit
exit
exit
```

## Logando no novo banco com novo usuário
```
mysql -u lucas -p
use aula;
```
## Criando as tabelas
https://github.com/lucasmarques4linux/500-PHP-26-02-2018/blob/master/projeto/script-mysql.sql

# PHP

## Instalando driver PostgreSQL
```
sudo apt install php7.0-pgsql
```

## Instalando driver Mysql
```
sudo apt install php7.0-mysql
```

## Reiniciar o apache2
``` 
sudo service apache2 restart
```