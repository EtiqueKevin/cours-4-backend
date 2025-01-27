#!/bin/bash

# installer composer au cas où
if [ ! -d "vendor" ]; then
    docker compose run --rm php composer install
fi

# lancer les containers
docker compose up -d

# lancer les tests
docker compose exec php php vendor/bin/phpunit

# récupérer le code de retour
x=$?

# arrêter les containers
docker compose down

# retourner le code de retour du test
exit $x