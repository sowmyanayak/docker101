# Docker secrets

The database password was passed in as an environment variable which is poor practice. We will modify this to a secret. 
```
cd ../example09
docker-compose up -d
```

Secret is mounted into the container's filesystem
```
docker exec example09_php_1 cat /run/secrets/db_password
```

Cleanup
```
docker-compose down -v
```