<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="wdith=device-width", initial-scale="1.0">
</head>
<body>
    <nav>
        <ul class ="clientMenu">
            <li><a href="./index.php">首頁</li>
            <li><a href="./allOrders.php">所有訂單</li>
            <?php
                if(isset($_SESSION['email'])){
                    echo '<li><a href="./functions.php?op=logout">登出</a></li>';
                }
                else echo '<li><a href="./login.php">登入</a></li>';
            ?>
            
        </ul>
    </nav>
</body>
</html>