[comment]: <> (TODO : refactor documenation, those are informations that I save just in case)

The installation of Laravel needs you to have PHP and composer and npm on your computer.

PHP version : php-8.3.8-Win32-vs16-x64

Laravel version : v11.1.1


For the initial setup you might need to do a bunch of changes on your php folder if you just downloaded it : 

Add the php folder to the path variable

Rename the file php.ini-development in php.ini

In the php.ini file, uncomment the lines : 

	- extension=sqlite3

	- extension=pdo_sqlite

	- extension=openssl

	- extension=fileinfo

	- extension=curl

If you encounter error of type "no such table" it might be because you didnt migrate the db, the command is "php artisan migrate"

