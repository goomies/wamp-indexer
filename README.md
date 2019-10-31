# Wampindexer
Minimalist [WampServer](http://www.wampserver.com) template that works great on any screen based on [Material Design](https://material.io/design). Perfectly designed for simple navigation, with detailed projects.

![Wampindexer Screenshot](https://raw.githubusercontent.com/goomies/wampindexer/master/screenshot.png)

# Introduction
This **Wampindexer** project is a simple application using [Composer](https://getcomposer.org), and [Packagist](https://packagist.org) (the main **Composer** repository, that aggregates public **PHP packages** installable with **Composer**).

# Features
**Wampindexer** displays your repositories and files as a portfolio.

- **Repository Count**
- **Search Repository by Name**
- **Filter Repository by Type**
- **Convert README file as HTML and use it as a description**
- **Server informations**
- **Responsive Design** - fully adapted for a simple navigation, exactly well presented on any screen.

# Author
**Rémy Manescau | @goomies**

- GitHub : [github.com/goomies](https://github.com/goomies)
- GitLab : [gitlab.com/goomies](https://gitlab.com/goomies)
- LinkedIn : [linkedin.com/in/remy-manescau](https://www.linkedin.com/in/remy-manescau)
- Facebook : [facebook.com/GoomiesDev](https://www.facebook.com/GoomiesDev)
- Twitter : [twitter.com/GoomiesDev](https://twitter.com/GoomiesDev)


# Installation
## Initial Configuration:
1. Donwload and copy the `_wampindexer` folder inside your `www` folder.
2. Export `index.php` present in your `_wampindexer` folder to your `www` folder.
3. Restart **WampServer**.

### h5ai Configuration (optional)
*[h5ai](https://larsjung.de/h5ai/) is a modern **file indexer** for **HTTP web servers** with focus on your files. Directories are displayed in a appealing way and browsing them is enhanced by different views, a breadcrumb and a tree overview. You can use **h5ai** in this template if you dont have any `index.html` or `index.php` in your directories.

1. Modify your `httpd.conf` file in `WanpServer` -> `Apache` -> `httpd.conf` and replace the DirectoryIndex by : `DirectoryIndex index.php index.php3 index.html index.htm /_wampindexer/public/index.php`.
2. Restart **WampServer** and enjoy !

# Configuration
By default, I've always named my repositories by the domains : `mydomain.com`

* Title - the name of your repository.
* Thumbnail - `screenshot.png` from your repository.
* Description - `README.md` from your repository.

## Default setup
the ` _wampindexer` folder inside your `www` folder is hidden with CSS in order to not be count and displayed as a repository.
- You can change your profile picture here : `_wampindexer\web\img\profile.png`.
- The style modifications are in : `_wampindexer\web\css\style.css`.
- The Javascript modifications are in : `_wampindexer\web\js\app.js`.
- The PHP modifications are in : `_wampindexer\src\app.php`.


# Credits
Used in this template:

* [WampServer](http://www.wampserver.com/)
* [Material Design](https://material.io/design/)
* [Composer](https://getcomposer.org/)
* [Packagist](https://packagist.org/)
* [Symfony finder](https://packagist.org/packages/symfony/finder)
* [Michelf php-markdown](https://packagist.org/packages/michelf/php-markdown)
* [Guzzle HTTP PHP](https://packagist.org/packages/guzzlehttp/guzzle)
* [h5ai](https://larsjung.de/h5ai/)