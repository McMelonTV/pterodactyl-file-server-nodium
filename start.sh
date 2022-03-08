#!/bin/ash

echo "Starting PHP-FPM..."
/usr/sbin/php-fpm7 --fpm-config /home/container/php-fpm/php-fpm.conf --daemonize

echo "Starting Nginx..."
/usr/sbin/nginx -c /home/container/nginx/nginx.conf

echo "Starting NodiumFS..."

echo "Don't mind any errors like \`nginx: [alert] could not open error log file: open() \"/var/lib/nginx/logs/error.log\" failed (13: Permission denied)\` as these can be safely ignored."