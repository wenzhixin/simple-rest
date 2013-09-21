<?php
ob_start();

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__)));

function __autoload($path) {
	return include str_replace('_', '/', $path) . '.php';
}

$rest = new Rest();
$rest->process();
ob_end_flush();
?>