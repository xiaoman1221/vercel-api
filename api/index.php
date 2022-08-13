<?php
error_reporting(0);
$api = $_GET['api'];  //api名称
if ($api == NULL) {
	exit("小满のAPI");
} else {
    $api = "'/../'".$api . ".php";
    require __DIR__ . $api;
}

