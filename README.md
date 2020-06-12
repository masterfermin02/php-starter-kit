[![Build Status](https://travis-ci.com/masterfermin02/fp-blog.svg?branch=master)](https://travis-ci.org/masterfermin02/fp-blog)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.txt)
# PHP starter kit
This project will help you to start a new project in PHP

# How to make it work
A few simple steps are needed to get this application up and running:

The next step assumes that composer is available in your PATH

``sh
# install the project and its dependencies
composer create-project masterfermin02/php-starter-kit [project-name]
cd [project-name]
``

#  Usage with composer
- clone the repository
- run `docker-compose up --biuld`
- run  `composer install`
- `docker-compose up`
- Run in background `docker-compose up -d`
- To see your local cotainers running process `docker ps`
- Stop containers in background `docker-compose down`

# Usage with PHP native server
- run `sh serve.sh`

# Run test
- `composer run test`

# Helpers
If you notice that your machine has any file permission errors, you might need to execute the following in a project locally
`chmod -R o+rw bootstrap/ storage/`

# Resources
These are a list of resources if you want to create a project like this or getting more knowledge 
on how to build your own framework in PHP.
- [PHP the right way](https://phptherightway.com/#code_style_guide)
- [PHP without frameworks](https://github.com/PatrickLouys/no-framework-tutorial)
- [SOLID](https://en.wikipedia.org/wiki/SOLID)

# Feedback
Found a bug or have a suggestion? Please create a [new GitHub issue](https://github.com/masterfermin02/php-starter-kit/issues/new). We want your feedback!

