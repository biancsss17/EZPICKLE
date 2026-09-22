#!/bin/sh
set -e

# Railway's public domain is configured for port 10000.
PORT_VALUE="10000"

# PHP's Apache module requires prefork; disable any conflicting MPM first.
a2dismod mpm_event 2>/dev/null || true
a2enmod mpm_prefork

sed -i "s/Listen 80/Listen ${PORT_VALUE}/" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT_VALUE}>/" /etc/apache2/sites-available/000-default.conf

exec apache2-foreground
