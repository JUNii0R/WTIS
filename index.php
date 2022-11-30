<?php 
    $url = "";
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $uri = (parse_url($url, PHP_URL_PATH));
    $result = str_replace("/wtux/", "", $uri);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/global.css">

</head>
<body>
    <?php
    require_once "assets/components/navbar.php";

    switch($result){
        case "":
            include "content/home.php";
            break;
        case "home":
            include "content/home.php";
            break;
        case "recepten":
            include "content/recepten.php";
            break;
        default:
            include "content/404.php";
    }
    ?>
</body>
</html>