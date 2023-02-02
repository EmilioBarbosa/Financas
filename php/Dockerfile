FROM php:8.2-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

#liberar super user para o composer
ENV COMPOSER_aLLOW_SUPERUSER=1

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#copiar somente composer.json e compose.lock depois do composer install
#é o suficiente para para tirar vantagem do sistema de cache do docker
#composer install só vai ser executado quando o composer.json ou composer.lock foi modificado
COPY ./app/composer.* ./

#composer install
RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction

COPY ./app .

RUN composer dump-autoload --optimize
