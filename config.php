<?php
// define('ROOT', '/MVC/');

// // HTTP
// define('HTTP_SERVER', 'http://dannyyo.oicp.net/MVC/');
// define('HTTP_IMAGE', 'http://dannyyo.oicp.net/MVC/image/');
// define('HTTP_ADMIN', 'http://dannyyo.oicp.net/MVC/libs/Controller');


// // HTTPS
// define('HTTPS_SERVER', 'http://dannyyo.oicp.net/MVC/');
// define('HTTPS_IMAGE', 'http://dannyyo.oicp.net/MVC/image/');


	$config = array(
		'viewconfig' => array(
			'left_delimiter' => '{',  'right_delimiter' => '}',  'template_dir' => '././tpl',  'compile_dir' => '././data/template_c'),
		'dbconfig' => array(
			'dbhost' => 'localhost', 'dbuser'=>'root', 'dbpsw' => 'root' , 'dbname' => 'mvc', 'dbcharset' => 'utf8')
	);
?>