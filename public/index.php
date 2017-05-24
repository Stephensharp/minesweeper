<?php


//include the bootstrap php
require '../bootstrap/bootstrap.php';


//echo PUBLIC_DIR.'<br>';
//echo __DIR__.'<br>';
//echo __FILE__.'<br>';
//echo __LINE__.'<br>';   these check the locations of the paths and accesses to see the difference between public and local access



echo request::get('route', '404');

?>