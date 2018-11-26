<?php 
    session_start();
    include_once "lib/DataProvider.php"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hoàng Hồng Công</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/header.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <?php include "modules/mHeader.php"; ?>
        </div>
        
        <div class="nav_login">
            <?php include "modules/mLogin/mLogin.php"; ?>
        </div>

        <div class="nav">
            <?php include "modules/mMenu.php"; ?>
        </div>

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
                        include "pages/pIndex.php";
                        break;
                    case 2:
                        include "pages/pListOfProduct.php";
                        break;
                    case 3:
                        include "pages/pProductDetail.php";
                        break;
                    case 4:
                        include "modules/mLogin/exLogin.php";
                        break;
                    case 5:
                        include "modules/mLogin/exLogout.php";
                        break;
                    default:
                    include "pages/pError.php";

                }


            ?>
        </div>
        
        <div class="footer">
            <?php include "modules/mFooter.php"; ?>
        </div>


    </div>
</body>
</html>
    



