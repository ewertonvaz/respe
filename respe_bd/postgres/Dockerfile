FROM postgres
#RUN createdb -E utf8 -U postgres respe
#RUN psql -U postgres -d respe -f /files/respe-bkp.sql
COPY respe-bkp.sql .
#WORKDIR /files
ADD /respe-bkp.sql /docker-entrypoint-initdb.d