# Micro MVC Skeleton Application

* Slim 3
* PHP-View template renderer
* Monolog logger.

## Install the Application

* Clone this repo.
* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.
* `composer install`
* Use mvc.sql DB
* Set connection to DB in: `src/settings.php`

To run the application in development, you can run these commands 

	composer start

Run this command in the application directory to run the test suite

	composer test
