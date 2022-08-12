<?php
error_reporting(0);
if ($api == NULL) {
	exit("小满のAPI");
} else {
    $api = "'/../'".$api . ".php";
    require __DIR__ . $api;
}

