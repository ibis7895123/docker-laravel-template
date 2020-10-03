FROM nginx:stable

LABEL maintainer="toki"

ARG LARAVEL_PROJECT_ROOT
RUN echo ${LARAVEL_PROJECT_ROOT}

COPY ./Dockerfiles/nginx/conf.d/ /etc/nginx/conf.d
COPY . /var/www/

RUN chmod -R 777 /var/www/${LARAVEL_PROJECT_ROOT}/storage
RUN chmod -R 775 /var/www/${LARAVEL_PROJECT_ROOT}/bootstrap/cache

CMD rm -f /etc/nginx/conf.d/default.conf && envsubst '$$LARAVEL_PROJECT_ROOT' < /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf && nginx -g 'daemon off;'

