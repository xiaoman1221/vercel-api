<?php
error_reporting(0);
$api = $_GET['api'];  //api名称
if ($api == NULL) {
	exit("小满のAPI");
} else {
    $url = "/../$api.php";
    require __DIR__ . $api;
}

