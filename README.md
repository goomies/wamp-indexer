# Indexer
Minimalist [WampServer](http://www.wampserver.com) template that works great on any screen based on [Material Design](https://material.io/design). Perfectly designed for simple navigation, with detailed projects.

# Demo
You can find my Indexer demo [here](https://indexer.remymanescau.com).

![Indexer Screenshot](https://indexer.remymanescau.com/screenshot.png)

# Introduction
This **Indexer** project is a simple application using [Composer](https://getcomposer.org), and [Packagist](https://packagist.org) (the main **Composer** repository, that aggregates public **[PHP](https://www.php.net) packages** installable with **Composer**).

# Features
**Indexer** displays your repositories and files as a portfolio.

- **Repository Count**
- **Search Repository by Name**
- **Filter Repository by Type**
- **Convert README file as HTML and use it as a description**
- **Server informations**
- **Responsive Design**

# Author
**Rémy Manescau | @goomies**

- Site : [remymanescau.com](https://www.remymanescau.com)
- GitHub : [github.com/goomies](https://github.com/goomies)
- GitLab : [gitlab.com/goomies](https://gitlab.com/goomies)
- LinkedIn : [linkedin.com/in/remy-manescau](https://www.linkedin.com/in/remy-manescau)
- Facebook : [facebook.com/GoomiesDev](https://www.facebook.com/GoomiesDev)
- Twitter : [twitter.com/GoomiesDev](https://twitter.com/GoomiesDev)
- Instagram : [instagram.com/remwithorion](https://www.instagram.com/remwithorion) 


# Installation

Download and install [WampServer](http://www.wampserver.com/).

## Initial Configuration
1. Donwload and copy the `indexer` folder inside your `www` folder.
2. Export `index.php` present in your `indexer` folder to your `www` folder.
3. Restart **WampServer**.

## Setup project
Use [Composer](https://getcomposer.org/) to install Indexer packages : `composer install`.

# Configuration
By default, I've always named my website repositories : `mydomain.com`

* Title - the name of your repository.
* Thumbnail - `screenshot.png` from your repository.
* Description - `README.md` from your repository.

## Default setup
The `indexer` folder inside your `www` folder is hidden with CSS in order to not be count and displayed as a repository.
- You can change your profile picture here : `indexer\web\img\profile.png`.
- The style modifications are in : `indexer\web\css\style.css`.
- The Javascript modifications are in : `indexer\web\js\app.js`.
- The PHP modifications are in : `indexer\src\app.php`.

## Dummy content
There is a `dummy-content` folder for the demo that you can put inside your `www` folder, it's just here to show you the final result but you can delete it.

## h5ai Configuration (optional)
*[h5ai](https://larsjung.de/h5ai/) is a modern **file indexer** for **HTTP web servers** with focus on your files. Directories are displayed in a appealing way and browsing them is enhanced by different views, a breadcrumb and a tree overview. See the [Demo](https://larsjung.de/h5ai/demo/).

You can use **h5ai** in this template if you dont have any `index.html` or `index.php` in your directories.

# Credits
Used for this template:

* [WampServer](http://www.wampserver.com/)
* [MAMP](https://www.mamp.info/en/mac)
* [Material Design](https://material.io/design/)
* [jQuery](https://jquery.com/)
* [Composer](https://getcomposer.org/)
* [Packagist](https://packagist.org/)
* [Symfony finder](https://packagist.org/packages/symfony/finder)
* [Michelf php-markdown](https://packagist.org/packages/michelf/php-markdown)
* [Guzzle HTTP PHP](https://packagist.org/packages/guzzlehttp/guzzle)
