FROM php:7.1.2-apache

#NOTE: this docker contains size could be optmised

RUN apt-get -y update
#Git needed for composer to work
RUN apt-get -y install git-all
RUN apt-get -y install nano
#Need to Zip can work with PHP (Needed for composer)
RUN apt-get -y install zlib1g-dev


#bcmath requirment for rabbitmq / amqplib library
RUN docker-php-ext-install mysqli pdo pdo_mysql zip bcmath
RUN echo "alias ll='ls $LS_OPTIONS -la'" >> ~/.bashrc
RUN echo "alias art='php /var/www/artisan'" >> ~/.bashrc

#enable mod_rewrite
RUN a2enmod rewrite
RUN service apache2 restart

#Install composer
COPY install-composer.sh /var/install-composer.sh
RUN chmod 755 /var/install-composer.sh
RUN /var/install-composer.sh
RUN rm /var/install-composer.sh

