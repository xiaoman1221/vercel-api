<?php
error_reporting(0);
$id = $_GET['id'];  //API id
if ($id == NULL) {
    exit("参数有误！");
} else {
    require __DIR__ . "/" . $id . ".php";
}
