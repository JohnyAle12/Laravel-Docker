all:
	@echo 'Hello'
artisan:
	@docker-compose exec php php /var/www/html/artisan

migrate:
	@docker-compose exec php php /var/www/html/artisan migrate