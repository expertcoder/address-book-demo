FROM docker.elastic.co/elasticsearch/elasticsearch:5.3.0

RUN echo "alias ll='ls $LS_OPTIONS -la'" >> ~/.bashrc
#disable auth requirment for elastic search
RUN echo "xpack.security.enabled: false" >> /usr/share/elasticsearch/config/elasticsearch.yml


