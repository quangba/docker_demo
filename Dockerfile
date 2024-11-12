# Dockerfile
FROM php:8.2-apache

# Cài đặt extension mysqli để kết nối với MySQL
RUN docker-php-ext-install mysqli

# Sao chép nội dung từ thư mục 'src' vào thư mục của Apache trong container
COPY project /var/www/html/
