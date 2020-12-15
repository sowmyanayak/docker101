# Docker 101

This tutorial will take a step by step approach to build a LAMP stack using docker. 

## Prequisites
Install Docker and Docker Compose

Docker commands to run before hand: 

	docker pull php:apache
	docker pull php:7.4.13-apache
	docker pull php:8.0.0-apache
	docker pull mariadb:10.4
	docker pull helder/mailcatcher


# cleanup

docker image prune

docker rmi php:apache
docker rmi php:8.0.0RC2-apache