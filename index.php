<?php include 'database/DataProvider.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hoàng Hồng Công</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/header.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/body.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/content.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css" />
    <script src="main.js"></script>
</head>
<body>
                <!-- Phan Header -->

	<div class="header">
        <?php include 'includes/header.php'; ?>
    </div>
    
    <div class="clr"></div>

                <!-- Phan Menu -->

    <div class="menu">
        
        <?php include 'includes/menu.php'; ?>
    </div>

                <!-- Phan Content -->


    <div class="content">
        <?php

            $a = 1;
            if(isset($_GET["a"]))
            {
                $a = $_GET["a"];
            }
 
            switch($a)
            {
                case 1:
                    include ("pages/pIndex.php");
                    break;
                case 2:
                    include ("pages/pListProducts.php");
                    break;
                case 3:
                    include ("pages/pProductDetail.php");
                    break;
                default:
                    include ("pages/pError.php");
                    break;
            }
        ?>
    </div>


