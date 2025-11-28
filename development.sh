#/bin/bash

cd source
#php artisan octane:start --port=1101 --watch
php artisan octane:start --server=swoole --port=1101 --watch

