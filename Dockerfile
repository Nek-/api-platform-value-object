FROM ubuntu:17.10

RUN mkdir /project
RUN apt-get update \
    && apt-get install php php-cli php-json php-xml php-zip php-intl curl php-mbstring php-curl php-xdebug -y

VOLUME /project

WORKDIR /project

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer


CMD ["/project/bin/console", "ser:run", "0.0.0.0:8000"]
