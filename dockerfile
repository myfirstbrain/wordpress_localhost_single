FROM ubuntu:24.04
RUN apt-get update && apt-get install -y locales \
	&& localedef -i pl_PL -c -f UTF-8 -A /usr/share/locale/locale.alias pl_PL.UTF-8
ENV LANG pl_PL.utf8
ENV TZ EUROPE/WARSAW
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get -y install tzdata wget ssl-cert mkcert apache2 php8.2 php8.2-fpm php8.2-bcmath \ 
    php8.2-bz2 php8.2-curl php8.2-gd php8.2-imap php8.2-intl php8.2-mbstring php8.2-mysql \
	php8.2-opcache php8.2-xml php8.2-tidy php8.2-xsl php8.2-zip php8.2-imagick mariadb-server \
	&& rm -rf /var/lib/apt/lists/* && apt-get clean 
RUN a2enconf php8.2-fpm && a2enmod rewrite ssl proxy_fcgi setenvif && a2ensite default-ssl	  
RUN ln -sf /dev/stdout /var/log/apache2/access.log && \
    ln -sf /dev/stderr /var/log/apache2/error.log
    
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
#ENV db_user="wp"
#ENV db_password="wppass"
WORKDIR /var/www/html
COPY wp_config/ /root/wp_config/
RUN chmod +x /root/wp_config/main.sh
EXPOSE 80 443
CMD ["/root/wp_config/main.sh"]

