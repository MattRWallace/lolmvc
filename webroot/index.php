<?php

/**
 * File: index.php
 * Simple MVC core for web applications.  Server must be configured to route
 * all requests to this file.  See server documentation if you do not know how
 * to do so.
 *
 * @author David Mitchel <david@cs.txstate.edu>
 * @author Matt Wallace <matt@cs.txstate.edu>
 * @version 1.0
 * @package MVC
 */


// Set Timezone
date_default_timezone_set('America/Chicago');

// Set Locale
setlocale(LC_ALL, 'en_US');

/**
 * Initialize the built-in PHP class autoloader.
 */
set_include_path(get_include_path() . PATH_SEPARATOR . '../' . PATH_SEPARATOR . '../library/');
spl_autoload_extensions('.php');
spl_autoload_register();

// load configuration values
new Config();

// Debug settings
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', '1');
}

// create the router, generate the page and display
try {
    $router = new \Service\Route($_SERVER['REQUEST_URI']);
} catch (\Service\PageNotFoundException $e) {
    $message = $e->getMessage();
    $request = "error404";
    if (!empty($message))
        $request .= "/$message/";
    $router = new \Service\Route($request);
}

$controller = $router->getController();
$controller->renderPage();

