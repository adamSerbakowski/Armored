# Armored

Armored is an interactive database and search engine for historical and modern
armored vehicles. Vehicles are the core records and can be explored by operator
country, country of origin, service and production periods, production quantity,
and technical specifications.

## Technology

- Symfony 7.4 LTS
- PHP 8.4
- MySQL 8.4
- Docker Compose

No host installation of PHP, Composer, Symfony CLI, or MySQL is required.

## Development setup

Build and start the application:

```shell
docker compose up --build --detach
```

The application is available at <http://localhost:8080>.

Run a Symfony command:

```shell
docker compose exec app php bin/console about
```

Run the test suite:

```shell
docker compose exec app php bin/phpunit
```

Stop the environment:

```shell
docker compose down
```

Remove the development database as well:

```shell
docker compose down --volumes
```
