# Composer-unused Symfony example run

With the created [`composer-unused.php`](./composer-unused.php), it results in the following output when run:

```shell
Results
-------

Found 2 used, 3 unused, 38 ignored and 0 zombie packages

 Used packages
 ✓ php
 ✓ symfony/framework-bundle (https://github.com/symfony/framework-bundle)

 Unused packages
 ✗ adrenalinkin/doctrine-naming-strategy (https://github.com/adrenalinkin/doctrine-naming-strategy)
 ✗ alexandre-daubois/monolog-processor-collection (https://github.com/alexandre-daubois/monolog-processor-collection)
 ✗ dukecity/doctrineextensions (https://github.com/Dukecity/DoctrineExtensions)

 Ignored packages
 ○ ext-ctype (ignored by PatternFilter(userProvided: true, string: /ext-.*/))
 ○ ext-iconv (ignored by PatternFilter(userProvided: true, string: /ext-.*/))
 ○ cmsig/seal-symfony-bundle (https://github.com/PHP-CMSIG/seal-symfony-bundle) (ignored by PatternFilter(userProvided: true, string: /-bundle.*/))
 ○ doctrine/annotations (https://github.com/doctrine/annotations) (ignored by NamedFilter(userProvided: true, string: doctrine/annotations))
 ○ doctrine/doctrine-bundle (https://github.com/doctrine/DoctrineBundle) (ignored by PatternFilter(userProvided: true, string: /-bundle.*/))
 ○ doctrine/doctrine-migrations-bundle (https://github.com/doctrine/DoctrineMigrationsBundle) (ignored by PatternFilter(userProvided: true, string: /-bundle.*/))
 ○ doctrine/orm (https://github.com/doctrine/orm) (ignored by NamedFilter(userProvided: true, string: doctrine/orm))
 ○ league/flysystem-bundle (https://github.com/thephpleague/flysystem-bundle) (ignored by PatternFilter(userProvided: true, string: /-bundle.*/))
 ○ league/flysystem-ftp (https://github.com/thephpleague/flysystem-ftp) (ignored by NamedFilter(userProvided: true, string: league/flysystem-ftp))
 ○ phpdocumentor/reflection-docblock (https://github.com/phpDocumentor/ReflectionDocBlock) (ignored by NamedFilter(userProvided: true, string: phpdocumentor/reflection-docblock))
 ○ phpstan/phpdoc-parser (https://github.com/phpstan/phpdoc-parser) (ignored by NamedFilter(userProvided: true, string: phpstan/phpdoc-parser))
 ○ symfony/asset (https://github.com/symfony/asset) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/console (https://github.com/symfony/console) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/doctrine-messenger (https://github.com/symfony/doctrine-messenger) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/dotenv (https://github.com/symfony/dotenv) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/expression-language (https://github.com/symfony/expression-language) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/flex (https://github.com/symfony/flex) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/form (https://github.com/symfony/form) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/http-client (https://github.com/symfony/http-client) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/intl (https://github.com/symfony/intl) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/mailer (https://github.com/symfony/mailer) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/mime (https://github.com/symfony/mime) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/monolog-bundle (https://github.com/symfony/monolog-bundle) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/notifier (https://github.com/symfony/notifier) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/process (https://github.com/symfony/process) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/property-access (https://github.com/symfony/property-access) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/property-info (https://github.com/symfony/property-info) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/runtime (https://github.com/symfony/runtime) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/security-bundle (https://github.com/symfony/security-bundle) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/serializer (https://github.com/symfony/serializer) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/string (https://github.com/symfony/string) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/translation (https://github.com/symfony/translation) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/twig-bundle (https://github.com/symfony/twig-bundle) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/validator (https://github.com/symfony/validator) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/web-link (https://github.com/symfony/web-link) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ symfony/yaml (https://github.com/symfony/yaml) (ignored by PatternFilter(userProvided: true, string: /symfony\/.*/))
 ○ twig/extra-bundle (https://github.com/twigphp/twig-extra-bundle) (ignored by PatternFilter(userProvided: true, string: /twig\/.*/))
 ○ twig/twig (https://github.com/twigphp/Twig) (ignored by PatternFilter(userProvided: true, string: /twig\/.*/))

 Zombies exclusions (did not match any package)
```

Remarks:
- Symfony bundles have been excluded with pattern filter in [`composer-unused.php`](./composer-unused.php), as these are not recognized as "used" (as there are likely no references except using in the YAML config).
- Library `adrenalinkin/doctrine-naming-strategy` has been used in the [`services.yaml`](./config/services.yaml) but is not recognized as used.
- Library `alexandre-daubois/monolog-processor-collection` has been used in the [`services.yaml`](./config/services.yaml) but is not recognized as used.
- Library `dukecity/doctrineextensions` has been used in the [`doctrine_extensions.yaml`](./config/packages/doctrine_extensions.yaml) but is not recognized as used.
- Additional PHP files in [`config/schemas`](./config/schemas) have been added to glob pattern but are not recognized as used.

---

<h1 align="center">🎼 Symfony Docker 🐋</h1>

<div align="center">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/phpcs.yml?branch=main&label=PHPCS" alt="Code style">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/phpmd.yml?branch=main&label=PHPMD" alt="Mess detector">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/phpstan.yml?branch=main&label=PHPStan" alt="Static analysis">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/phpunit.yml?branch=main&label=PHPUnit" alt="Unit tests">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/security.yml?branch=main&label=Security" alt="Security">
    <br />
    <br />
    A webapp starting template for <a href="https://symfony.com/doc/current/setup.html">Symfony 6</a> with <a href="https://docs.docker.com/compose/install/">Docker Compose</a>.
</div>

## 📜 Introduction

This repository acts as a template to set up basic Symfony webapp with docker compose and Traefik.

### 🧰 Prerequisites

* [Docker Compose (v2.21.0+)](https://docs.docker.com/compose/install/)
* [Task](https://taskfile.dev/installation/)
* [Reverse proxy | Traefik](https://doc.traefik.io/traefik/) (Optional)
    * It is assumed that the user has a working development setup for [Traefik](https://doc.traefik.io/traefik/).

> [!TIP]
> You can switch out Traefik for any other reverse proxy of your choice (or not use a reverse proxy at all), although
> this requires additional tweaking of labels (or exposing ports) in the docker compose configuration.

## 🎬 Get Started

### Update hosts file

Add `webapp.local` to your hosts files, e.g. `/etc/hosts` (Unix).

### Initialise dotenv

For first time setup, initialise the `.env.local` from the `.env`.

```shell
task init
```

You can now tweak the values in the `.env.local` if needed.

### Start application services

```shell
task up
```

### Visit the application

If the reverse proxy is configured correctly, you should be able to visit `webapp.local` in your browser and be
greeted by Symfony's default landing page.

> [!NOTE]
> You can disregard the SSL certificate warnings for development usages.

## 📚 Additional services

You can add additional services to either `compose.yaml` or `compose.override.yaml` (specifically for your current
environment).

The following services are commonly used in a Symfony web application and serve as examples on how you can use additional docker containers in your stack.

> [!IMPORTANT]
> Make sure you run `task docker:up` (or `task docker:recreate`) after adding new services.

### Mail

Want to test if your mails are send and displayed correctly in development? Use [Mailcrab](https://github.com/tweedegolf/mailcrab).

`compose.override.yaml`
```yaml
services:
  mailcrab:
    image: marlonb/mailcrab:${MAILCRAB_IMAGE_VERSION}
    ports:
      - "1080:1080"
    expose:
      - 1025
    networks:
      - webapp
      - proxy

networks:
  webapp:
    driver: bridge
  proxy:
    external: true
```

`.env.local`
```dotenv
###> IMAGE VERSIONS ###
MAILCRAB_IMAGE_VERSION="v1.4.0"
###< IMAGE VERSIONS ###

###> symfony/mailjet-mailer ###
MAILER_DSN="smtp://mailcrab:1025"
###< symfony/mailjet-mailer ###
```
#### Usage

You can now access Mailcrab at [localhost:1080](localhost:1080).

### Redis

Want to cache in-memory? Use [Redis](https://github.com/redis/redis).

#### Compose configuration

`compose.yaml`
```yaml
x-restart-always: &restart-always
  restart: always

services:
  redis:
    image: redis:${REDIS_IMAGE_VERSION}
    command: redis-server --include /usr/local/etc/redis/redis.conf --requirepass ${REDIS_PASSWORD}
    <<: [*restart-always]
    environment:
      REDISCLI_AUTH: ${REDIS_PASSWORD}
    expose:
      - 6379
    volumes:
      - redis_data:/data
      - ./.docker/redis/redis.conf:/usr/local/etc/redis/redis.conf
    networks:
      - webapp

volumes:
  redis_data:
    driver: local

networks:
  webapp:
    driver: bridge
```

#### Environment variables

`.env`
```dotenv
###> IMAGE VERSIONS ###
REDIS_IMAGE_VERSION="7.0-alpine"
###< IMAGE VERSIONS ###

###> redis ###
REDIS_USER="default"
REDIS_PASSWORD="password"
REDIS_DSN="redis:${REDIS_USER}:${REDIS_PASSWORD}@?host[redis:6379]&dbindex=1"
###< redis ###
```

#### Usage

You can either run `task` commands to run `redis-cli` commands inside the Redis container (see [`.tasks/redis/Taskfile.yml`](.tasks/redis/Taskfile.yml)), or you can
expose the port to the host and use external tools to access the Redis container through `localhost`.

For the latter case, this would require additional entry to the `compose.override.yaml` (create if not exists).

`compose.override.yaml`
```yaml
services:
  redis:
    ports:
      - "6379:6379"
```

You can now access Redis at [localhost:6379](localhost:6379).

> [!TIP]
> Use [Redis Insight (v2)](https://github.com/RedisInsight/RedisInsight) to view the data in your Redis container.

### Messenger & RabbitMQ

Want to handle data asynchronously? Use [RabbitMQ](https://github.com/rabbitmq/rabbitmq-server).

#### Dependencies

Install the following PHP dependencies to use AMQP messenger with Symfony:

```shell
task composer:require -- symfony/messenger:^6.4.*
task composer:require -- symfony/amqp-messenger:^6.4.*
```

#### Compose configuration

`compose.yaml`
```yaml
x-restart-always: &restart-always
  restart: always

x-restart-unless-stopped: &restart-unless-stopped
  restart: unless-stopped

services:
  messenger:
    extends:
      file: compose.common.yaml
      service: php
    depends_on:
      phpfpm:
        condition: service_started
      rabbitmq:
        condition: service_healthy
    <<: [*restart-unless-stopped]
    command: bin/console messenger:consume --time-limit=300 --quiet async
    logging:
      options:
        max-size: "25mb"
        max-file: "10"

  rabbitmq:
    image: rabbitmq:${RABBITMQ_IMAGE_VERSION}
    hostname: rabbitmq
    security_opt:
      - no-new-privileges:true
    <<: [*restart-always]
    environment:
      RABBITMQ_DEFAULT_USER: ${MESSENGER_TRANSPORT_USER}
      RABBITMQ_DEFAULT_PASS: ${MESSENGER_TRANSPORT_SECRET}
    healthcheck:
      test: ["CMD-SHELL", "if rabbitmqctl status; then \nexit 0 \nfi \nexit 1"]
      interval: 5s
      timeout: 5s
      retries: 5
    expose:
      - 5672
      - 15672
    volumes:
      - ./.docker/rabbitmq/enabled_plugins:/etc/rabbitmq/enabled_plugins
      - ./.docker/rabbitmq/rabbitmq.conf:/etc/rabbitmq/rabbitmq.conf
      - rabbitmq_data:/var/lib/rabbitmq
    labels:
      traefik.enable: true
      traefik.docker.network: proxy
      traefik.http.routers.webapp-rabbitmq.tls: true
      traefik.http.routers.webapp-rabbitmq.entrypoints: websecure
      traefik.http.routers.webapp-rabbitmq.rule: Host(`rabbitmq.${APP_DOMAIN}`)
      traefik.http.routers.webapp-rabbitmq.service: webapp-rabbitmq
      traefik.http.services.webapp-rabbitmq.loadbalancer.server.port: 15672
    networks:
      - webapp
      - proxy

volumes:
  rabbitmq_data:
    driver: local

networks:
  webapp:
    driver: bridge
  proxy:
    external: true
```

#### Environment variables

`.env`
```dotenv
###> IMAGE VERSIONS ###
RABBITMQ_IMAGE_VERSION="3-management"
###< IMAGE VERSIONS ###

###> symfony/messenger ###
MESSENGER_TRANSPORT_USER="default"
MESSENGER_TRANSPORT_SECRET="password"
MESSENGER_TRANSPORT_DSN="amqp://${MESSENGER_TRANSPORT_USER}:${MESSENGER_TRANSPORT_SECRET}@rabbitmq:5672/%2f/messages"
###< symfony/messenger ###
```

### Usage

You can now access the RabbitMQ panel at [rabbitmq.webapp.local](rabbitmq.webapp.local).

> [!TIP]
> You can scale the `messenger` service to use multiple containers to handle messages even faster!
>
> Scale `messenger` service with `5` containers:
> ```shell
> docker compose up -d messenger --scale messenger=5
> ```

## 🛠️ Contribute

### Install dependencies

```shell
task app:install:dev
```

### Enable GrumPHP

```shell
task grum:init
```

### Manual test run

```shell
task contribute
```

## 🧰 DIY

If you want to create a Symfony project from scratch yourself, with the essential dependencies, you
can do the following:

```shell
# Substitute "dev.example.com" with desired project directory name
docker run --rm -it -v $(pwd):/app composer:2 create-project symfony/skeleton:6.4.* dev.example.com
docker run --rm -it -v $(pwd)/dev.example.com:/app composer:2 require webapp -n
sudo chown -R $(id -u):$(id -g) $(pwd)/dev.example.com
 ```

This will give you a basic Symfony webapp environment (without Docker).

## ❕ Licence

This repository comes with a [MIT license](./LICENSE).
