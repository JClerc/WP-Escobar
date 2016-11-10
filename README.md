# WP-Escobar

## Installation

All these steps are mandatory to make it work.

#### 1. Clone project
Install it in a directory named "wpescobar", which has to be in the root of your web server, so its address will be http://localhost:8888/wpescobar/
```
git clone git@github.com:JClerc/WP-Escobar.git wpescobar
```

#### 2. Setup database
Create a new mysql database named "wpescobar" using charset "utf8mb4_unicode_ci". Then import the file `wpescobar.sql`.

#### 3. Composer
Move to directory `wpescobar/wp-content/themes/WP-Escobar`, and run command `composer install` to fetch dependencies.

#### 4. Start webserver
It should work now, don't forget to commit & push often!
