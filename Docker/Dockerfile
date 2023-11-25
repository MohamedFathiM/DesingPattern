FROM php:7.4-cli
RUN apt update
WORkDIR /Users/root/home
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
WorkDIR /user/src/myapp