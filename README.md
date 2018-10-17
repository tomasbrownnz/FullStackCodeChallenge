# FullStackCodeChallenge
Project created in Laravel, using Valet, Composer and MYSQL. A simple 'to do' app that allows users to log in, create and complete tasks.

## How to use

### Download repository 
Either clone or download the .zip file to your device.


### Install dependencies 
Make sure you have the latest versions of Laravel, Valet, Composer and MySQL installed and running on your system.

### Setup environment 
1) Change directory to where you would normally create Laravel projects.
1) Create new Laravel project called 'toDoApp' by running command `laravel new toDoApp`
1) Copy files from this repository over to this directory and allow the system to replace the duplicate files.
1) Alter your '.env' file to comply with your MySQL parameters by entering your **username** and **password** into the variables:

`DB_CONNECTION=mysql`

`DB_HOST=127.0.0.1`

`DB_PORT=3306`

`DB_DATABASE=toDoApp`

`DB_USERNAME=your_username_here`

`DB_PASSWORD=your_password_here`
  
5) Create a database called `toDoApp` in your coresponding MySQL user by signing into your local MySQL then running `CREATE DATABASE toDoApp`. 
6) Next we have to create the table `users` by running the command `php artisan migrate` in our laravel project directory.
7) After this create the table 'tasks' by running the commands below in your MySQL:

`use toDoApp`

`CREATE TABLE tasks (id MEDIUMINT NOT NULL AUTO_INCREMENT, name CHAR(30) NOT NULL, userId MEDIUMINT UNSIGNED NOT NULL REFERENCES users(id), PRIMARY KEY (id));`

8) Your database is now set up and from the laravel project directory you can run these two commands repsectively to start the system in your default browser:

`valet link`

`valet open`

# Enjoy!

### Created by Tom Brown
