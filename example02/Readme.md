# Build args & dockerignore
Build the image and run with the default value for the build argument
```
cd ../example02

docker build -t img_myapp02 .
docker run -d --rm -p 80:80 --name myapp02 img_myapp02
```

Run a command in the container
```
docker exec myapp02 php --version
# we can see the files mentioned in .dockerignore are not in the container
docker exec myapp02 ls -al 
docker stop myapp02
```

Upgrade the php version by changing the build argument. 
```
docker build --build-arg PHP_VERSION=8.0.0-apache -t img_myapp02 .
docker run -d --rm -p 80:80 --name myapp02 img_myapp02
docker exec myapp02 php --version
docker stop myapp02
```