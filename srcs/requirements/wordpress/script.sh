#!/bin/sh

# Wait for MariaDB to be ready

while ! mariadb -h mariadb -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" ; do
    echo "Establishing a database connection  ...";
    sleep 3
done

wp config create	--allow-root \
    --dbname=$MYSQL_DATABASE \
    --dbuser=$MYSQL_USER \
    --dbpass=$MYSQL_PASSWORD \
    --dbhost=mariadb:3306 \
    --path='/var/www/wordpress'
    
# WordPress installation
wp core install --allow-root \
    --url="$DOMINE_NAME" \
    --title="$WP_TITLE" \
    --admin_user="$WP_ADMIN" \
    --admin_password="$WP_ADMIN_PW" \
    --admin_email="$WP_ADMIN_ML" \
    --path="/var/www/wordpress"

wp user create --allow-root "$WP_USER"\
    "$WP_USER_ML"\
    --role=editor\
    --user_pass="$WP_USER_PW"\
    --path="/var/www/wordpress"

# Start PHP-FPM AND  run PHP-FPM in the foreground NOT DAEMON
php-fpm7.4 -F
