
all: build run

build:
	docker-compose -f srcs/docker-compose.yml  build
run :
	docker-compose -f srcs/docker-compose.yml up -d 

re: clean all

clean:  
	docker compose -f ./srcs/docker-compose.yml down -v 

fclean : clean

reset: fclean
	docker system prune -af

docker-compose down -v --remove-orphans

# Remove named volumes
docker volume rm wordpress mariadb

# Remove images
docker rmi wordpress mariadb nginx || true

# Prune unused
docker image prune -f
docker volume prune -f
docker network prune -f

# Rebuild and run
docker-compose -p inception up --build -d