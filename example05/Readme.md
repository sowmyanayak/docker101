# Environment variables

We have an environment variable `TEST_VAR` defined in the Dockerfile. 
```
cd ../example05
docker build -t img_myapp05 .
```

Let's now get the container up and display the environment variable with its default value
```
docker run --rm -p 80:80 -v $(pwd):/var/www/html --name myapp05 img_myapp05
ctrl c
```

Override the environment variable at run time. 
```
docker run --rm -p 80:80 -v $(pwd):/var/www/html -e "TEST_VAR=John Doe" --name myapp05 img_myapp05
ctrl c
```