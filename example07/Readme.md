# Docker compose - 2 services: app + db


We will create:
- 2 services using docker compose (php with apache & mariadb)
- use env variables for db info
 
There's one addition to the php Dockerfile - installing the mysql extension for php. 
```
cd ../example07
docker-compose up
```

We can see 2 containers up and running. 
```
docker ps
```
Make a request to the site - http://localhost. The env vars are shown. The database has an empty schema. Let's create a table with some data. 
```
docker exec -it example07_db_1 mysql -uroot -prootpwd -e "
  use example;

  CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    fname VARCHAR(45) NULL,
    lname VARCHAR(45) NULL,
    email VARCHAR(45) NULL,
    PRIMARY KEY (id)
  );

  INSERT INTO users (fname, lname, email)
  VALUES
  ('John', 'Doe', 'jdoe@example.com'),
  ('Matt', 'Smith', 'msmith@example.com');
  
  SELECT * FROM users;
"
```

Let's stop the services. 
```
# stop containers
# ctrl+c in the first terminal. 

docker-compose start
```
Since the containers were not removed, we can see the same data. When the stack is taken down, the data will be lost. 

```
docker-compose down

# now start again, table & data are lost
docker-compose up -d
docker-compose down
```