<?php
// print_r($_REQUEST);
// exit;
$url = isset($_GET['url']) ? $_GET['url'] : '';
$params = explode('/', $url);
$page = $params[0];
if(!file_exists("{$page}.php")) $page = "home";

// Now, $params is an array of each part of the URL path
// For example, "article/journey-to-center-of-the-earth/2" becomes:
// $params[0] = 'journey-to-center-of-the-earth'
// $params[1] = '2'

// You can loop through $params to process each parameter
// foreach ($params as $param) {
//     echo htmlspecialchars($param) . "<br> rest</br>";
// }

include "index.php";
exit;
