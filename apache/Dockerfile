FROM debian:latest

RUN apt update && apt install -y apache2  libapache2-mod-php8.2 php-zip php-intl

RUN apt install -y php8.2-mysql php-xml php-gd  php-json php-curl php-mbstring

EXPOSE 80
EXPOSE 443

RUN a2enmod ssl
RUN a2enmod rewrite

WORKDIR /app

ENTRYPOINT [ "apache2ctl", "-D", "FOREGROUND"]