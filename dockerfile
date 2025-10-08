FROM php:8.2-apache

# Cài đặt dependencies nếu cần (ví dụ: extensions cho MySQL)
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql

# Copy source code vào container
WORKDIR /var/www/html
COPY . /var/www/html

# Cấu hình Apache nếu cần
RUN a2enmod rewrite

EXPOSE 80
CMD ["apache2-foreground"]