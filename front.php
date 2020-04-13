<?php 
include_once "utils/config.php";
//echo var_dump($_SERVER);
$my_root = $_SERVER['DOCUMENT_ROOT'];
include 'redirect.php';
//echo var_dump(session_get_cookie_params(),strtotime('+30 days'),PERSISTENT);
?>
<?php
	include_once "model/PostsDatabase.php";
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);
	//echo var_dump($TitlKe);
	include 'post/post_fetcher.php';
?>
<?php include 'view/header.php';?>
<?php include 'view/front_list_view.php';?>
<?php include 'view/footer.php';?>