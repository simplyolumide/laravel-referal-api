

This is a referral system built with Laravel.
User can invite other user, each user that register automatically have a referral link, they can share this link to friend and family on social media,each user count is track and user can register if they are not reffered by any user. There is an admin interface that allow admin to view all users from top users with the highest referral count to the list.
 
 To run the project

- Clone it to your computer.
- Run `composer install` to install application dependencies.
- Copy `.env.example` to `.env`.
- Run `php artisan key:generate` to generate an application key.
- Add database credentials to `.env`.
- Run `php artisan migrate` to migrate the database.
- To run the tests included, add database credentials for the `testing` database connection defined in `config/database.php` to `.env`.

