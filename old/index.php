<?php
include "./language/en.php";
// print_r($_REQUEST);
// exit;
$url = isset($_GET['path']) ? $_GET['path'] : '';
$params = explode('/', $url);
$page = $params[0];

//if(in_array($page, $create_new))

if(!file_exists("{$page}.php")) $page = "home";
include "layout.php";
