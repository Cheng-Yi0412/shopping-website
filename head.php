<?php include_once('dbConnect.php'); ?>     <!--資料庫連接-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="wdith=device-width", initial-scale="1.0">
</head>
<body>
    <div class="nav-bar">
        <ul>
            <li ><a href="./index.php">首頁</a></li> 
            <li><a href="./allOrders.php">所有訂單</a></li>
            <?php
                if(isset($_SESSION['email'])){                      //若是已登入則只顯示登出按鈕
                    echo '<li><a href="./functions.php?op=logout">登出</a></li>';
                }
                else echo '<li><a href="./login.php">登入</a></li>';
            ?>
            
        </ul>
    </div>
</body>
</html>