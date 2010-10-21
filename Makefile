#
#

# Binary
PHP = php
PHPUNIT = phpunit
PHPDOC = phpdoc

# Path
ROOT = .
PROJECT_LIB_PATH = ${ROOT}/library
PROJECT_TEST_PATH = ${ROOT}/tests
PROJECT_DOC_PATH = ${ROOT}/doc

# Display an help message
all: help
help:
	@echo "Makefile usage:"
	@echo "\nmake doc"
	@echo "\tGenerate the phpDoc documentation using the doc/phpDocumentor.ini config file"
	@echo "\nmake unit-tests"
	@echo "\tExecute the phpUnitTest using the tests/phpunit.xml config file"

# Build the documentation
doc:
	@echo "Building php-doc documentation..."
	@${PHPDOC} -c ${PROJECT_DOC_PATH}/phpDocumentor.ini

# Exec the unit-tests
unit-tests:
	@echo "Running php unit tests..."
	@cd $(PROJECT_TEST_PATH) && $(PHPUNIT) --configuration phpunit.xml

.PHONY: doc
