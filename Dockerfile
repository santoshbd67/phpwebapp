# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY ./index.php /var/www/html/

# Install mysqli extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# If you need other PHP extensions, you can install them here

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]

