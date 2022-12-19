FROM brettt89/silverstripe-web
WORKDIR /var/www/html
RUN yes | apt-get update
RUN yes | apt-get upgrade
RUN yes | apt-get install python
RUN yes | apt-get install nodejs
RUN yes | apt-get install nodejs npm
RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer