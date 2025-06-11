migrate:
	docker exec -it laravel_app php artisan migrate

seed:
	docker exec -it laravel_app php artisan db:seed