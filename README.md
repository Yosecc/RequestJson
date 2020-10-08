RequestJson 
===========

Install
-------

To install with composer:

```sh
composer require yosecc/requestjson
```

Requires PHP 7.1 or newer.

Usage
-----

Here's a basic usage example:

```php
<?php

require '/path/to/vendor/autoload.php';
$json = new \Yosecc\RequestJson\RequestJson();
  
```

Functions
---------

```php
<?php
//Listing all resources 
$json->posts()

// Getting a resource
$json->post($id)

//Creating a resource
$json->create_posts($data)

//Updating a resource with PUT
$json->edit_posts($id, $data)

//Updating a resource with PATCH
$json->edit_posts_patch($id, $data)

//Deleting a resource
$json->delete($id)
  
```
