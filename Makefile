
all: build run

build:
	mkdir  -p ~/data/mariadb ; mkdir  -p ~/data/wordpress
	docker-compose -f srcs/docker-compose.yml  build
run :
	docker-compose -f srcs/docker-compose.yml up -d 

re: clean all
# -v remove assoiate volumes.
# -d detach mode backround.
clean:  
	docker compose -f ./srcs/docker-compose.yml down -v 

fclean : clean
	sudo rm -rf ~/data ; docker image prune -f --all

reset: fclean
	docker system prune -af
