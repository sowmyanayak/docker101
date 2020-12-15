
# Simple hello world apache/php container

First, we build the image
```
cd ./example01
docker build -t img_myapp01 .
docker image ls
```

Create a container with the name `myapp01`. The container runs in the foreground and shows the standard output and error of the container. 
```
docker run --name myapp01 img_myapp01
# ctrl+C to stop the container

docker ps -a
```

Cleanup the stopped container
```
docker rm myapp01 
# can also use the first few chars of the container id
```

Using the --rm flag will remove the container automatically once stopped
```
docker run --rm --name myapp01 img_myapp01
# ctrl+C
docker ps -a
```

To access the website, publish the container's port to the host. This will send all traffic from the host port to the container's port. Logs can be seen in the output. 
```
docker run --rm -p 80:80 --name myapp01 img_myapp01
# access the site at http://localhost  a few times to see the logs
# ctrl+C
```

Run the container in detached mode. With the --rm flag the container will be removed once stopped. 
```
docker run -d --rm -it -p 80:80 --name myapp01 img_myapp01
docker logs --follow myapp01 
# access the site at http://localhost a few times to see the logs
# ctrl+C
docker stop myapp01
```

Images can be build without a tag as well
```
docker image ls
docker image rm img_myapp01
docker build .
docker image ls
```