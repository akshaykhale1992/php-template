# PHP Template

A simple PHP Template Project with boilerplate code to start with

# Folder structure
    - bootstrap
        - app.php: Library loader which autoloads and set-ups all the used Packages
    - controllers
        - HomeController.php: A sample Controller file
    - public
        - index.php: The hosted file.
    - .env.example: Sample environment file
    - .gitignore
    - LICENCE
    - README.md
    - composer.json: Composer file with all dependencies
    - composer.lock
    - helpers.php: Helper library which is autoloaded in composer.json file
    - routes.php: File which contains all the routes for the application

# Dependencies used :package:
- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)
    - For loading Environment settings from a .env file in Project root directory.
- [nikic/FastRoute](https://github.com/nikic/FastRoute)
    - Router used in the Application.

# How to get started :rocket:
    composer install # Installing dependencies
    cp ./.env.example ./.env # Creating environment file
    cd ./public && php -S localhost:8001 # Hosting the application on port 8001

Visit: [http://localhost:8001](http://localhost:8001) to se it in action.

# How do I use it??? :thinking:
1. Add the route in routes.php, refer to sample route for help.
2. Add the method in controllers/HomeController or you can create your own controller file in the same folder.
3. Navigate to your route.

# Why this project??? :thinking:
This project started as a simple minimal PHP boilerplate to get started with a PHP project. A project which will provide you basic routing and environment settings with basic folder structure like an open canvas giving you freedom to add any dependencies that you may require and even change the folder structure as you please. No restriction a simple template for your PHP project.

# Courtesy :heart:
- [nikic](https://github.com/nikic/FastRoute)
- [vlucas](https://github.com/vlucas)
