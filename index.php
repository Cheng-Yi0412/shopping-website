<?php 
    include_once('head.php');
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
                $itemQ=mysqli_query($dbconnection,'select * FROM `item`');

                echo "<div style='display:flex; flex-wrap:wrap; gap:10px'>";
                while ($item=mysqli_fetch_assoc($itemQ)) {
                    echo "<div class='card'>
                    <img src='./images/{$item['image']}' width='200' height='auto'><br>
                    {$item['name']}<br>
                    售價{$item['price']}<br>
                    剩餘數量{$item['remaining']}<br>
                    <a href='./order.php?itemid={$item['item_id']}' class='btn'>下訂</a>
                    </div>";
                }
                echo "</div>";
            ?>    
        </div>
        
    <?php include_once('footer.php') ?>
</body>
</html>