FROM php:8.3-cli-alpine

# Install dependency untuk Laravel dan ekstensi PHP
RUN apk add --no-cache \
    bash \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    libxpm-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    mariadb-client \
    && docker-php-ext-install pdo pdo_mysql mbstring xml gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
