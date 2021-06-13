FROM php:7.2-apache

# git, unzip & zip are for composer
RUN apt-get update -qq && \
    apt-get install -qy \
    gnupg \
    unzip \
    zip && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# PHP Extensions
RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql

# Install Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Add Xdebug to PHP configuration
RUN echo "" >> /usr/local/etc/php/conf.d/xdebug.ini \
 && echo "[xdebug]" >> /usr/local/etc/php/conf.d/xdebug.ini \
 && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
 && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
 && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/xdebug.ini \
 && echo "xdebug.idekey=VSCODE" >> /usr/local/etc/php/conf.d/xdebug.ini \
 && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/html
EXPOSE 80

#CMD ["/usr/sbin/apache2","-D","FOREGROUND"]
