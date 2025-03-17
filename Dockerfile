# Osnovna slika: PHP 8.3 FPM
FROM php:8.3-fpm

# Instalacija osnovnih alata i potrebnih biblioteka
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    unzip \
    libonig-dev \
    libxml2-dev \
    && rm -rf /var/lib/apt/lists/*

# Instalacija PHP ekstenzija
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    xml \
    zip \
    bcmath

# Instalacija Redis ekstenzije
RUN pecl install redis && docker-php-ext-enable redis

# Instalacija Composer-a
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Kopiranje projekta u kontejner
COPY . /var/www

# Postavljanje radnog direktorijuma
WORKDIR /var/www

# Instalacija Laravel zavisnosti
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Podešavanje dozvola (opcionalno, ali preporučljivo)
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage
