FROM debian:11

EXPOSE 3306

RUN apt -y update && apt -y upgrade

RUN apt -y install mariadb-server

COPY ./script.sh /var/script.sh 

RUN chmod 777 /var/script.sh

CMD ["/var/script.sh"]