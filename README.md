<h1 align="center">
  <img alt="escobar-wordpress" width="652" src="https://jclerc.github.io/assets/repos/banner/escobar-wordpress.jpg">
  <br>
</h1>

<p align="center">
  <img alt="made for: school" src="https://jclerc.github.io/assets/static/badges/made-for/school.svg">
  <img alt="language: php" src="https://jclerc.github.io/assets/static/badges/language/php.svg">
  <img alt="made in: 2016" src="https://jclerc.github.io/assets/static/badges/made-in/2016.svg">
  <br>
  <sub>Campaign site for Pablo Escobar's fake election.</sub>
</p>
<br>

## Features

- [x] Custom WordPress theme
- [x] Every field can be edited
- [x] Custom post types / roles
- [x] Templates use twig

## Stack used

- WordPress `4.6.1`
- Timber `1.1`
- ACF `4.4.11`
- PHP `7.0` / MySQL `5.6`

## Getting started

#### Requirements

- Apache server with PHP 7+ and MySQL 5.6+
- `composer` (if you have Homebrew: `brew install composer`)
- `yarn` (or `npm`)
- `gulp` (`yarn global add gulp-cli` or `npm i -g gulp-cli`)

#### Installation

```sh
git clone https://github.com/jclerc/escobar-wordpress.git
cd escobar-wordpress
```

Then:
1. Create a new MySQL database (name: `wpescobar`, charset: `utf8mb4_unicode_ci` and import the file [`wpescobar.sql`](/wpescobar.sql)
2. Check [`wpescobar/wp-config.php`](/wpescobar/wp-config.php) to ensure database credentials are correct
3. `cd` to [`wpescobar/wp-content/themes/WP-Escobar`](/wpescobar/wp-content/themes/WP-Escobar), and run `composer install` to fetch dependencies
4. `cd` to [`wpescobar/wp-content/themes/WP-Escobar/assets`](/wpescobar/wp-content/themes/WP-Escobar/assets), and run `yarn` (or `npm i`) to fetch dependencies
5. In this last directory, run `gulp` to build assets and watch for changes
6. Lastly, start the webserver in the [`wpescobar`](/wpescobar) directory!
