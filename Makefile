.PHONY: up down build rebuild logs bash composer-install test restart

# Start the containers in detached mode.
up:
	docker compose up -d

# Stop and remove containers, networks, etc.
down:
	docker compose down

# Build the containers (if changes have been made).
build:
	docker compose build

# Rebuild containers from scratch and start them.
rebuild: down
	docker compose build --no-cache
	docker compose up -d

# Follow the logs from all containers.
logs:
	docker compose logs -f

# Open a shell in the "web" container.
bash:
	docker compose exec web bash

# Install Composer dependencies inside the container.
composer-install:
	docker compose exec web composer install

# Run PHPUnit tests inside the container.
test:
	docker compose exec web vendor/bin/phpunit

# Restart the environment.
restart: down up
