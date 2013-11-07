NavBarBundle
============

Symfony2 bundle to manage a nav bar


Installation
============

To install this bundle please follow the next steps:

First add the dependency in your `composer.json` file:

```json
"require": {
    ...
    "idci/nav-bar-bundle": "dev-master"
},
```

Then install the bundle with the command:

```sh
$ php composer update
```

Enable the bundles in your application kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new IDCI\Bundle\NavBarBundle\IDCINavBarBundle()
    );
}
```

Update your routing.yml file:

```yml
idci_nav_bar:
    resource: "@IDCINavBarBundle/Controller/"
    type:     annotation
```


Configuration
=============

This bundle provide a simple navbar easily customizable.
To configure it simply change or add items in the `app/config/config.yml`:

```yml
# Tms navbar configuration
idci_nav_bar:
    brand_title: "MyNAV"
    brand_url: http://www.mywebsite.com
    items:
        link1:
            title: LinkTitle1
            url: http://www.website1.com
            color: "#F00"
        link2:
            title: LinkTitle2
            url: http://www.website2.com
            color: "#00F"
        linkN:
            title: LinkTitleN
            url: http://www.websiteN.com
            color: "#000"
            target: _blank
```


Routes
======

To see the routes, run this given command:

```sh
$ php app/console router:debug --env=prod
```

You will get this output:

    [router] Current routes
    Name                   Method Scheme Host Path
    idci_navbar_menu_nav ANY    ANY    ANY  /nav.{_format}

The configurated menu is now available via the HTTP protocol in diffrent formats.
To see it in action simply open a web browser at the previous configurated
virtual host (navbar.ens-lyon.fr) and add the following path: /nav.{_format}

ex: http://www.mywebsite.com/nav.html

Here is a list of available formats:

    * html => This will display the menu
    * css  => This is the generated css
    * json => This is the menu data in Json format
    * js   => This is the generated js to inject the menu in web page


How to use
==========

Diffrent way to use this application exist, here is some methods but some others
are posible according to your imagination.

Javascript:
-----------

Simply add a javascript source to automatically inject html and css data in order
to display this menu in an existing website.

```html
<!DOCTYPE html>
<html>
    <head>
        ...
        <script type="text/javascript" src="http://www.mywebsite.com/nav.js"></script>
    </head>
    <body>
        ...
    </body>
</html>
```
