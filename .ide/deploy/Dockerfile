FROM phusion/baseimage:bionic-1.0.0
MAINTAINER chileeb <chileeb@163.com>

ARG ITOP_GIT_URL=https://github.com/SmartIDE/iTop.git

RUN apt-get update \
    && apt-get install -y software-properties-common ca-certificates \
    && add-apt-repository -y ppa:ondrej/php \
    && apt-get install -y \
        apache2 \
        php7.4 php7.4-xml php7.4-mysql php7.4-json php7.4-mbstring php7.4-ldap php7.4-soap php7.4-zip php7.4-gd php7.4-curl php7.4-xdebug php-apcu \
        graphviz \
        curl \
        unzip\
        git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && update-alternatives --set php /usr/bin/php7.4

# Get iTop
RUN rm -rf /var/www/html/* \
    && git clone $ITOP_GIT_URL \
    && mv iTop/* /var/www/html \
    && rm -rf iTop

# Copy services, configs and scripts
COPY service /etc/service/
COPY artifacts/scripts /
COPY artifacts/itop-cron.logrotate /etc/logrotate.d/itop-cron
COPY artifacts/apache2.fqdn.conf /etc/apache2/conf-available/fqdn.conf
COPY run.sh /run.sh
RUN chmod +x -R /etc/service \
    && chmod +x /*.sh \
    && a2enconf fqdn

# Create shortcuts for the right management scripts, get latest Russian translations and fix rights
RUN ln -s /make-itop-config-writable.sh /usr/local/bin/conf-w \
    && ln -s /make-itop-config-read-only.sh /usr/local/bin/conf-ro \
    && /update-russian-translations.sh \
    && chown -R www-data:www-data /var/www/html

EXPOSE 80

HEALTHCHECK --interval=5m --timeout=3s CMD curl -f http://localhost/ || exit 1

ENTRYPOINT ["/run.sh"]