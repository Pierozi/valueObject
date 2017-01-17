vendor: composer.lock
	composer install

.PHONY: vendor

composer.lock: composer.json
	composer update

test: src/*.php
	./vendor/bin/atoum -d tests/units

.PHONY: test

phpcs: phpcs.xml
	rm -rf phpcs-reports
	mkdir phpcs-reports
	vendor/bin/phpcs -p --colors --report-full=./phpcs-reports/phpcs-report-full.txt --report-gitblame=./phpcs-reports/phpcs-report-gitblame.txt --report-info=./phpcs-reports/phpcs-report-info.txt --standard=phpcs.xml .
