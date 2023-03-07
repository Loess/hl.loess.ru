FROM php:7.2.24-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql
RUN echo 'display_errors = 0\n' >> /usr/local/etc/php/php.ini
RUN echo 'disable_functions = phpinfo\n' >> /usr/local/etc/php/php.ini
RUN echo 'expose_php = off\n' >> /usr/local/etc/php/php.ini
RUN echo 'log_errors = On\nerror_log = /var/log/apache2/error.log\n' >> /usr/local/etc/php/php.ini
RUN cd /var/www/html/ \
    && git config --global user.name "Joe ServerSide" \
    && git config --global user.email "hl@loess.ru" \
    && git config --global --add safe.directory /var/www/html
COPY ./githubkey.priv /var/www/.ssh/id_rsa
RUN ssh-keyscan -t rsa github.com >> /var/www/.ssh/known_hosts && \
    chown -R www-data:www-data /var/www/.ssh/ && chmod -R 700 /var/www/.ssh/
USER www-data
RUN git clone --depth=1 --branch=master git@github.com:Loess/hl.loess.ru.git ./
#RUN git clone --depth=1 --branch=master https://github.com/Loess/hl.loess.ru.git ./
USER root
EXPOSE 80
CMD ["apache2-foreground"]
