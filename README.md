# Docker 101

* Run a command in linux
* Run a command in couple diff OSes
	docker run --rm  alpine ash -c 'cat /etc/*release*'
	docker run --rm  ubuntu bash -c 'cat /etc/*release*'

echo "hello" > foo.txt

docker run --rm -v $(pwd):/tmp/foo alpine cat /tmp/foo/foo.txt

docker run --rm -e FOO=bar alpine printenv

## Prequisites
Install Docker and Docker Compose

Docker commands to run before hand: 
	docker pull php:apache
	docker pull php:8.0.0RC2-apache
	docker pull mariadb:10.4



Big picture: application stack

## example01: simple hello world php container
- building without image tag (no friendly name)
- looking at logs 
- foreground vs background
- stopped and cleaning up containers 

## example02: build args & dockerignore
- use build argument for version of php
- .dockerignore one dir to exclude dirs and files
	-> this is blacklisting
- there is a way to whiltelist files as well

## exmaple03: build cache & layers

## example04: volume mount
	
## example05: environment variable

## example06: docker compose + db 
- 2 services using docker compose
- env variables for db info
- single service for web and application server

## example07: persist db volume, initialize db data

# TODO ******
## example08 - use docker secret for db pwd + config???
	store db pwd as secret

	TODO: 
	php config file - datasource or 
	apache configuration response header

## example09 - mailcatcher container
	contact us page sending out email
	subnets - web + mail, web + db





# cleanup

docker image prune

docker rmi php:apache
docker rmi php:8.0.0RC2-apache