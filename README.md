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
Docker commands to run before hand

	docker pull php:apache
	docker pull php:8.0.0RC2-apache
	docker pull mariadb:10.4

## example01: simple hello world php container

## example02: build args 
	box version 
	2 dirs within root - text files, other text files
	.dockerignore one dir - show that is missing

## exmaple03: layer caching
	copy site code
	install composer package manager
	reorder to show how it can improve the builds

	# use git to grab a logo from an open source project
	# possibly php  extension (phpmailer)

## example04: volume mount
	
## example05: environment variable

## example06: docker compose + db 
	env variable for sql password
	query: select now()
	use the php apache image, explain why combined
	create a table from command line and insert row
	query the table in code

# TODO ******
* example07 - db persist volume + drop sql file for table creation & population

* example08 - use docker secret for db pwd + config???
	store db pwd as secret

	TODO: 
	php config file - datasource or 
	apache configuration response header

* example09 - mailcatcher container
	contact us page sending out email
	subnets - web + mail, web + db





# cleanup

docker image prune

docker rmi php:apache
docker rmi php:8.0.0RC2-apache