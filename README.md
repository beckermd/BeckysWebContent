BeckysWebContent — README

Quick overview

This project is a small PHP/HTML website (static pages + some PHP files that use a DB connection). The workspace contains HTML, PHP, CSS, JS and images under the repository root. The typical entry points are indexVs2.php or apettizer.html.

Prerequisites (macOS)

- PHP 8.x (or 7.4+) — install with Homebrew: `brew install php` if not already present.
- MySQL or MariaDB if you want to use pages that rely on a database: `brew install mysql` and then `brew services start mysql` (or use MAMP/XAMPP).
- A browser to view the site.

Optional tools

- MAMP/XAMPP (GUI Apache+MySQL+PHP) — useful if you prefer a GUI stack.

Steps to run locally (simple, no-apache method)

1. Open Terminal and cd into the project folder:

   cd /Users/mariadanielabecker/github/BeckysWebContent

2. If you need a database, install and start MySQL and create the DB used by the app:

   brew install mysql        # if needed
   brew services start mysql
   mysql -u root
   # inside mysql shell create a database and user, or import an SQL dump if you have one
   CREATE DATABASE beckys_db;
   EXIT;

3. Update database connection settings: edit connection.php and set host, username, password and database name to match your local MySQL instance. Example variables to look for inside connection.php:

   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname = 'beckys_db';

4. Start PHP built-in web server from the project root (serves PHP files):

   php -S localhost:8000

   Note: if you want the server document root to be this folder explicitly, run:

   php -S localhost:8000 -t .

5. Open the site in your browser:

   http://localhost:8000/indexVs2.php

   or

   http://localhost:8000/apettizer.html

Troubleshooting

- Blank pages / PHP code visible in browser: you are not running a PHP server. Use step 4 or a web server with PHP enabled (MAMP/XAMPP/Apache+PHP).
- Database connection errors: confirm credentials in connection.php and that MySQL is running. Check MySQL logs and PHP warnings.
- Permission errors: make sure files are readable by your user. Use `chmod`/`chown` only if necessary.

Notes

- The application appears to be a simple PHP site; there is no package manager config (composer, npm) in the project root. If you add dependencies, add installation steps here.
- If you prefer Apache default document root, copy the project into /Library/WebServer/Documents or configure a VirtualHost in httpd.conf (or use MAMP/XAMPP).

If you want, I can also:
- Add an example .env or config.sample file and update connection.php to read from it.
- Provide SQL create statements for the database if you supply the schema or tell me which pages require DB tables.

