<?php
/**
 * LMVC: Simply Powerful
 *
 * PHP version 5.3+
 *
 * @author David Mitchel <david@lmvc.net>
 * @copyright David Mitchel 2012
 * @license http://www.opensource.org/licenses/mit-license.html
 * @link http://lmvc.net
 * @package LMVC
 * @version .1
 */
echo "github test";
/*
function load_view($controller, $action, $vars) {
	if (is_file("views/$controller/$action.php")) {
		ob_start();
		include "views/$controller/$action.php";
		$content = ob_get_contents();
		ob_end_clean();
	}

	return isset($content) ? $content : '';
}

function render_page($content, $layout) {
	if (isset($layout)) {
		include "layouts/$layout.php";
	} else {
		echo $content;
	}
}

include 'config/config.php';
$baseDirectoryLength = strlen(dirname($_SERVER['PHP_SELF']));
$parsedURI = explode('/', substr($_SERVER['REDIRECT_URL'], ($baseDirectoryLength > 1) ? $baseDirectoryLength + 1 : 1));

if (!($controller = $parsedURI[0])) {
	include 'pages/index.php';
	exit();
} elseif (!preg_match('/\W/', $controller . isset($parsedURI[1]) ? isset($parsedURI[1]) : '') && is_file("controllers/$controller.php")) {
	include "controllers/$controller.php";
	$controllerClass = $controller . 'Controller';
	$action = isset($parsedURI[1]) && !empty($parsedURI[1]) ? $parsedURI[1] : 'index';

	if (class_exists($controllerClass) && in_array($action, get_class_methods($controllerClass))) {
		$controllerObject = new $controllerClass;
		$content = load_view($controller, $action, $controllerObject->$action(array_slice($parsedURI, 2)));
		render_page($content, isset($controllerObject->layout) ? $controllerObject->layout : null);
		exit();
	}
}

header('HTTP/1.1 404 Not Found');
include 'pages/404.php';
 *
 */
?>