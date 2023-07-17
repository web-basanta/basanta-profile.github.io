<?php

//include function
include_once "functions.php";
$siteManage = new Main();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     echo $siteManage->title;
     $getData = $siteManage->getData();
     
     $pages_array = array(
        array(
            'slug' => 'index',
            'title' => 'Site Index',
            'template' => 'interior'
        ),
   
        array(
            'slug' => 'a',
            'title' => '100% Wide (Layout A)',
            'template' => 'interior',
            'address' => $siteManage->name
        ),
   
        array(
            'slug' => 'homepage',
            'title' => 'Homepage',
            'template' => 'homepage'
        )
   );
    echo "<pre>";
     print_r($pages_array);
     echo "</pre>";
    ?>
</body>
</html>