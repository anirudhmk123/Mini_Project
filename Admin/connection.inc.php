<?php
session_start();
$con = mysqli_connect("localhost","root","","ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/MiniProject1/');
define('SITE_PATH','http://127.0.0.1/MiniProject1/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'/Media/product/');

define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'/Media/product/');
?>