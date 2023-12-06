#!/bin/sh

mkdir /run/php/
apt update -y

# Wait for MariaDB to be ready
until mysql -h mariadb -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" -e "SELECT 1;" ; do
    echo "Waiting for Mariadb ...";
    sleep 1
done

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

# Start PHP-FPM
php-fpm7.4 -F
