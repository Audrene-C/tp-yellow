<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="codyframe" rel="stylesheet" type="text/css" href="src/sass/style.css">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <title><?=$title?></title>
</head>
<body class="main-page">

<?php 
    echo $header;
    echo $main;
    echo $footer;

include $path.'partials/script.php';?>
    
</body>
</html>