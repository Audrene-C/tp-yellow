<?php 
$path = "/shared/httpd/tp-integration/htdocs/";
$title = "Boats boats boats!";
$buttonContent = "Book a Yatch!";
$header = file_get_contents('./partials/header.php');
$main = file_get_contents('./partials/main1.php');
$footer = file_get_contents('./partials/footer.php');
include './src/layout.php';