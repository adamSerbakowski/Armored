FROM php:8.4-cli-bookworm

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        libicu-dev \
        libzip-dev \
        unzip \
    && docker-php-ext-install -j"$(nproc)" \
        intl \
        opcache \
        pdo_mysql \
        zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock symfony.lock ./
RUN composer install \
    --no-interaction \
    --no-scripts \
    --prefer-dist

COPY . .

RUN composer install \
    --no-interaction \
    --prefer-dist

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public", "docker/dev-router.php"]
