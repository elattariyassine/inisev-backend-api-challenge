## Inisev backend challenge
My own implementation to the insev backend challenge.

## Implemented features
* [x] Endpoint to create a "post" for a "particular website".
* [x] Endpoint to make a user subscribe to a "particular website" with all the tiny validations included in it.
* [x] Use of command to send email to the subscribers.
* [x] Use of queues to schedule sending in background.

## Used technologies

- PHP 7.4
- Mysql
- Laravel 8
- Docker

## Installation Steps

> prerequisite: PHP > 7.4

* Clone repository
* `composer install`
* Create DB eg: `backend_api_challenge`
* `composer setup` (copies `env` file, generates key, and migrates DB)
* Then run ``` php artisan serve ```

Nb: In this project I used database driver to store the queued notifications, so you have to set database as value the queue connection: ``QUEUE_CONNECTION=database``, then run you have to run this command
``php artisan queue:work``.

## Testing
In this file [doc/postman_collection.json](docs/postman_collection.json) you will find the postman collection that you can import into your local postman app and test the api.






