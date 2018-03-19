# Logando como root

## PostgreSQL
```
sudo su
su postgres
psql
```

## MySQL
```
sudo su
mysql
```

# Banco de dados

## PostgreSQL
```
CREATE DATABASE tarefas;
ALTER DATABASE tarefas OWNER TO lucas;
```

## MySQL
```
CREATE DATABASE tarefas;
```

# Conectando ao banco

## PostgreSQL
```
psql -h localhost -U lucas tarefa.
```

## MySQL
```
mysql -u lucas -p
use tarefa;
```