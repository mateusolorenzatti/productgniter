#docker build -t clebermacieski/app_bd2_img

#docker run -it --rm --name app_bd2 clebermacieski/app_bd2_img

#docker run --name app_dbd2 --rm -d -p 80:80 -v ${"$PWD"}:/var/www/html/ clebermacieski/app_bd2_img

RUN docker-php-ext-install mysqli