<?php 
    include_once('head.php'); //功能表載入(首頁、訂單查看、登入、登出)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="wdith=device-width", initial-scale="1.0">
</head>
<body>
    
        <div class="container">
            <?php
                $itemQ=mysqli_query($dbconnection,'select * FROM `item`'); //從資料庫找出販售物品的名稱、價格、數量、圖檔名稱

                echo "<div style='display:flex; flex-wrap:wrap; gap:10px'>";
                while ($item=mysqli_fetch_assoc($itemQ)) {      /*迴圈將每一個物件資料印出*/
                    echo "<div class='card'>
                    <img src='./images/{$item['image']}' width='200' height='auto'><br> 
                    {$item['name']}<br>
                    售價{$item['price']}<br>
                    剩餘數量{$item['remaining']}<br>
                    <a href='./order.php?itemid={$item['item_id']}' class='btn'>下訂</a></div>";   //下訂單且將物件id加在URL後給下一個網頁GET
                }
                echo "</div>";
            ?>    
        </div>
        
    <?php include_once('footer.php') ?> <!-- 載入頁尾  -->
</body>
</html>