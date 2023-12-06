
all: build run

build:
	mkdir  -p ~/data/mariadb ; mkdir  -p ~/data/wordpress ;mkdir -p ~/data/portainer
	docker-compose -f srcs/docker-compose.yml  build
run :
	docker-compose -f srcs/docker-compose.yml up -d 

re: clean all

clean:  
	docker compose -f ./srcs/docker-compose.yml down -v ; sudo rm -rf ~/data 

fclean : clean
	docker image prune -f --all

reset: fclean
	docker system prune -a
