<?php

// Display error message cause by your PHP scripts
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors',1);

// The require or include statement takes all the text/code/markup that exists 
// in the specified file and copies it into the file that uses the include (or require) statement.
// require 'application/mvc.php';
require 'application/view/load.php';
// require 'application/model/model.php';
require 'application/controller/controller.php';


$pageURI =$_SERVER['REQUEST_URI'];
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
	if (!$pageURI)
		new Controller('main');
	else
		new Controller($pageURI);
?>