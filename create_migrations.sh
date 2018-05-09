docker-compose exec -d php-fpm php bin/console make:migration &&#
docker-compose exec -d php-fpm php bin/console doctrine:migrations:migrate -q &&#
docker-compose exec -d php-fpm php bin/console doctrine:schema:update --force &&#
docker-compose exec -d php-fpm php bin/console fos:user:create admin admin@admin.com admin --super-admin
echo localhost:8000/admin