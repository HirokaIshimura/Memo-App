FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=memo-app \
  MYSQL_USER=hiroka \
  MYSQL_PASSWORD=hirokadbpass \
  MYSQL_ROOT_PASSWORD=hirokadbpass \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf