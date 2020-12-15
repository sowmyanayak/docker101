# Volumes
In the previous example, each code change required a rebuild of the docker image. Let's create a container with a volume to make development easier.

```
cd ../example04
docker build -t img_myapp04 .

# this works for # mac, linux and powershell 
docker run --rm -it -p 80:80 -v $(pwd):/var/www/html --name myapp04 img_myapp04


# for windows command line, use %cd% instead of $(pwd)
# win path - C:\docker101\example04
# converted version - //c/docker101\example04
docker run --rm -it -p 80:80 -v //c/docker101\example04:/var/www/html --name myapp04 img_myapp04
```
