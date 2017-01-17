vendor: composer.lock
	composer install

.PHONY: vendor

composer.lock: composer.json
	composer update

test: src/*.php
	./vendor/bin/atoum -d tests/units

.PHONY: test
