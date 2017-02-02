FROM ubuntu

MAINTAINER Dmitrii Konstantinov

ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && apt-get install -y apt-utils nginx git nano

RUN rm -f /etc/service/nginx/down
RUN rm /etc/nginx/sites-enabled/default
ADD default /etc/nginx/sites-enabled/

RUN git clone https://github.com/dmitr1y/edu-modules.git /www
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

EXPOSE 80

VOLUME /www

CMD ["nginx", "-g", "daemon off;"]
ENTRYPOINT service nginx start && bash
