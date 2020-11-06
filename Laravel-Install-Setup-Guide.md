# Breach Alert - Laravel Install and Local Project Setup

This guide will serve as a walk-through for setting up a Laravel, as well as getting a local instance of Breach Alert running.

# Installing Laravel

This section will walk through installing Laravel as well as setting up a sample test project

### Pre-Install Requirements

For Laravel to run, the following need to be running on your machine:

* PHP version 7.3 or higher: ([external link](https://www.php.net/))
* MySQL: ([external link](https://www.mysql.com/))
* Apache: ([external link](https://www.apache.org/))

### Installing Composer

Composer is a dependency manager for PHP that allows the developer to pull in differenct tools to use. In this case, the tool will be Laravel.

To install Composer:

1. Go to [Composer's download page](https://getcomposer.org/download/) (external site)
2. Copy the script in the "Command-line installation" section and run it in your terminal
  1. Look for something like this: 
  ```
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php -r "if (hash_file('sha384', 'composer-setup.php') === '795f976fe0ebd8b75f26a6dd68f78fd3453ce79f32ecb33e7fd087d39bfeb978342fb73ac986cd4f54edd0dc902601dc') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
  ```
3. Verify Composer successfully installed by running `composer` in the terminal. It should available options and commands

### Install Laravel and create a new project

Once Composer is installed, we will install Laravel, then create a simple project to verify Laravel is working

1. In terminal, run `composer global require laravel/installer`
2. Navigate terminal to a directory where you would like to store the project
3. Create the new project by running `laravel new [project name]`, with [project name] replace with a name of your choice.
  1. In this guide, the project will be called "test"; to create that project run `laravel new test`
4. To verify the project works, run `php artisan serve`, then enter the provided URL in your browser

### Create an alias in Apache

Aliases will allow you to run Laravel projects directly from a localhost adddress (ex: localhost/test) rather than having use php artisan serve.

1. Open Apache's httpd.conf file (found in Apache24/conf)
2. At the bottom of the file, add the following:
```
alias /test "C:/Users/David/Documents/Programming/LaravelStuff/test/public"
<Directory "C:/Users/David/Documents/Programming/LaravelStuff/test/public">
	Options Indexes FollowSymLinks
	AllowOverride All
	Require all granted
</Directory>
```
  1. Note: you will have to change the alias name and path to reflect the path to your project, 
3. Restart Apache
4. Access the project by going to localhost/[alias]

###### Troubleshooting

* If the alias results in a 404 after restarting Apache, PHP may need the extension "php_fileinfo.dll" enabled for aliases to work.
  * In php.ini, look for that extension under "dynamic extensions" and enable it if its not already.
* If Apache refuses to restart after adding alias, restart machine. Apache should start.

## Database Connections

Note: this part is not necessary for the test setup, but is important for getting downloaded projects running

Information for database connections is stored in the .env file.

To connect a Laravel project to a database, first create a new MySQL database for the project. Do not worry about the tables, they will be created later with migrations.

Example:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=breachalertlocal
DB_USERNAME=root
DB_PASSWORD=
```

Note that this file is specific to each machine (localhost, web server, etc), and is ignored by Git.

### Migrations

Migrations allow for easy creation and updating of database tables, as well as version control for the database schema. Migrations also allow for a database schema to be quickly replacated after moving a project to another environment.

In the Laravel project, migrations are stored in the database/migrations directory

To create a migration, run `php artisan make:migration [migration_name]` 
  * you don't need to do this unless you are making changes to the database schema (adding/removing/renaming tables/columns)

To run migrations and apply their changes to the database schema, run `php artisan migrate`

# Setting up Breach Alert

Once Laravel has been set up, you can now create a local version of Breach Alert to work on from your machine.

### Downloading the Project

Currently, the most up-to-date version of the project is stored on the daviddev branch.

Download the project to a location where you would like to work with it.

### Make an alias to the project

Create another alias for Apache to the project's path, similar to what was done for the test project, then restart Apache

### Set up database connections and run migrations

When you downloaded the Breach Alert project, it came with the database migrations. Luckily, this means that the specific database layout can be automatically recreated.

1. Open a MySQL connection and create a new database for the local project to use.
2. Open the .env file and set the appropriate database settings:
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=(usually 3306)
  DB_DATABASE=(name of your database)
  DB_USERNAME=(database username (usually root))
  DB_PASSWORD=(database password)
  ```
3. Run `php artisan migrate`

After running the migration command, the database tables will be created, however, they will have no data themselves. Check that everything works by registering new users.