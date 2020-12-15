# Populate database with seed schema and persist data
```
cd ../example08
docker-compose up -d
```

The setup script should have run at initialization. Let's check if the data exists. 
```
docker exec example08_db_1 mysql -uroot -prootpwd example -e "
show tables;
select * from users;
"
```

Make a change to the data and take the container down. The data will still be persisted. 
```
docker exec example08_db_1 mysql -uroot -prootpwd example -e "
update users set lname = 'Williams' where id =2 ;
"

docker-compose down
# list all volumes
docker volume ls
```

Bring the stack up and verify the data is still there
```
docker-compose up -d

docker exec example08_db_1 mysql -uroot -prootpwd example -e "
show tables;
select * from users;
"
```

Let's take everything down. Don't use the volumes flag if you want to persist the database data
```
docker-compose down -v
# volumes no longer exist
docker volume ls 
```

