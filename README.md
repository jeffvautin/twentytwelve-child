# twentytwelve-child
Personalization of wordpress TwentyTwelve theme.

## Personalization ##

* Added links to RSS feeds for main posts and microblog in `header.php`
* Disabled post comment feeds in `functions.php`
* Migrated twentytwelve_setup() function in `functions.php` to child theme so that loading of RSS feeds (including the main comments feed) can be disabled.

## Installation ##
Checkout to wp-content/themes folder:
`git clone https://github.com/jeffvautin/twentytwelve-child.git /var/www/website/wp-content/themes/twentytwelve-child/`
