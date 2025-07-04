<?php include("stock.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="wdith=device-width", initial-scale="1.0">
</head>
<body>
    <?php include('head.php') ?>
    
        <div>
            <?php
                foreach($item as $key => $value){
                    echo "<img src='./images/{$value['image']}' width='200' height='auto' />
                    <p>名稱:{$value['name']}</p>
                    <p>價格:{$value['price']}</p>
                    <a href='./order.php?itemid={$value['name']}' class='buyBtn'>預定{$value['name']}</a></br>
                    ";                    
                }
            ?>    
        </div>
        
    <?php include('footer.php') ?>
</body>
</html>