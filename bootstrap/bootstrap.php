
<?php

//defines the constant root folder of the entire project
define('SYSTEM_DIR',__DIR__ . '/..');
//defines thecode for our application
define('APP_DIR', SYSTEM_DIR . '/app');
//defines the public folder of the entire project publicly accessible only
define('PUBLIC_DIR', SYSTEM_DIR . '/public');
//contains a list of routes
define('ROUTES_DIR', SYSTEM_DIR . '/routes');
//defines the folder for vendor modules
define('VENDOR_DIR', SYSTEM_DIR . '/vendor');


//require all neccesary libraries
require_once ('../vendor/codingbootcamp/tinymvc/request.php'); // the request class

?>