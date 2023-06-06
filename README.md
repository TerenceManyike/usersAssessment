My starfleet project's README

    First install PHP on the local machine.

List of packages to install

- libapache2-mod-php7.4               
- php7.4

    Install composer globally based on the machine OS from here: https://getcomposer.org/doc/00-intro.md#globally
    Download and install MySQL Workbench (<Optional_can_use_database_of_choice>) based on the OS from here: https://dev.mysql.com/downloads/workbench/
        After MySQL Workbench is installed open the application and follow the instructions to set up a database user.
    For Linux then:
        Run: mysql -u <userNameFromMySqlWorkbenchUser> -p on the terminal.
        Enter the correct password for the database user to open MySQL Workbench.
        Run: CREATE DATABASE <dataBaseName> to create a database.
    After cloning the project connect to local machine database.
        Run: cp .env.example .env in the project folder example-app.
        Edit the new .env file to connect to the database.
        In line 14, 15 and 16 of the .env file replace default database name, username and password with the correct one.
    On the terminal in the project folder example-app RUN: php artisan migrate
        This will create the Users table in the database.
    On the terminal in the project folder example-app RUN: php artisan serve.
        This will host the example-app project in the local server, click to the link.

QUICK LINKS

Comments are available in the source code. Laravel MVC architecture was used in the example-app project.

    The users database model can be found in the path example-app/app/Models in User.php.
        The fetchUsers() method inside the User.php model will retrieve data from the API and populate the users table in the database.
    The controller which sends data from the database model to the view can be found in the path example-app/app/Http/Controllers in UsersController.php.
    The view which displays the users info can be found in the path example-app/resources/views in welcome.blade.php
