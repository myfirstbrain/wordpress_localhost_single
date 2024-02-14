#!/bin/bash
set -euo pipefail
echo "Starting..."

if [ ! -d "/var/www/html/wordpress" ]; then
wget -qO- https://pl.wordpress.org/latest-pl_PL.tar.gz | tar xz -C /var/www/html 
cd /var/www/html && mkcert -cert-file cert.pem -key-file key.pem localhost
cp /root/.local/share/mkcert/rootCA.pem /var/www/html/

mysql_install_db
chown -R mysql:mysql /var/lib/mysql
fi

cp /root/wp_config/.user.ini /var/www/html/wordpress/
cp /root/wp_config/wp-config.php /var/www/html/wordpress/
cp /root/wp_config/default-ssl.conf /etc/apache2/sites-available/
cp /root/wp_config/000-default.conf /etc/apache2/sites-available/
chmod -R a+rw /var/www/html 

if [ ! -d "/etc/apache2/ssl" ]; then
mkdir /etc/apache2/ssl
cp /var/www/html/cert.pem /etc/apache2/ssl
cp /var/www/html/key.pem  /etc/apache2/ssl
fi

service mariadb start
service php8.2-fpm start
service apache2 start

mariadb -u root -e "CREATE USER IF NOT EXISTS '$db_user'@'localhost' IDENTIFIED BY '$db_password';" && \
mariadb -u root -e "CREATE DATABASE IF NOT EXISTS $db_user;" && \
mariadb -u root -e "GRANT ALL PRIVILEGES ON $db_user.* TO '$db_user'@'localhost';"
chmod -R a+rw /var/lib/mysql 

echo "Ready"
/bin/bash
exit $?


