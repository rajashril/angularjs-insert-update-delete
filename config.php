<?php

//site specific configuration declartion
define('BASE_PATH', 'http://localhost/angularjs-insert-update-delete/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'angular-js-apps');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');

$mysqli  = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
	echo("Failed to connect, the error message is : ". mysqli_connect_error());
	exit();
}