# Docker Compose

Let's use docker compose for the php container we have created this far. The Dockerfile stays the same. 
```
cd ../example06
docker-compose up

# run in a new terminal. container gets a name with the directory as prefix - example06_php_1
docker ps

# in original terminal ctrl+c to gracefully stop the services. container still exists
# hitting ctrl+c will force kill the container
docker ps -a

# start the service again
docker-compose start
# stop and removes container 
docker-compose down

# run in detached mode
docker-compose up -d
docker-compose down