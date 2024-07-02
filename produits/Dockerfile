FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    git \
    curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer les extensions PHP pour MySQL
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install gd \
&& docker-php-ext-install pdo pdo_mysql

RUN rm -f /var/www/index.html

COPY /app /var/www/

EXPOSE 9000

WORKDIR /var/www/

CMD ["php-fpm"]