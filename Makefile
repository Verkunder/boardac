up:
	docker-compose down
	docker-compose up -d

down:
	docker-compose down

save.down:
	@make export.dump
	@make down

export.dump:
	docker exec  mysql sh -c 'exec mysqldump boardac -uboardac -pboardac' > $(PWD)/boardac.sql