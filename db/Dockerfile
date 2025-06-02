FROM mysql:8.0 
ENV MYSQL_DATABASE=assignment3 
ENV MYSQL_USER=user 
ENV MYSQL_PASSWORD=password 
ENV MYSQL_ROOT_PASSWORD=root 
COPY init.sql /docker-entrypoint-initdb.d/ 
