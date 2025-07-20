FROM php:8.2-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Copy all PHP files to Apache root
COPY . /var/www/html/

# Give proper permissions (optional)
RUN chmod -R 755 /var/www/html/
