<?php include_once('head.php');?>
<?php
    if(!isset($_SESSION['email'])){
        header("Location: ./index.php");
    }
?>
<h1>訂單紀錄</h1>
<?php
    global $dbconnection;
    $orderQ=mysqli_query($dbconnection,"SELECT * FROM `order`");
    while($order=mysqli_fetch_assoc($orderQ)){
        $itemQ=mysqli_query($dbconnection,"SELECT * FROM `item` WHERE item_id =$order[item_id] ");
        $item=mysqli_fetch_assoc($itemQ);
        echo '
            <table border="1">
                <tr>
                    <th>訂購人</th>
                    <th>email</th>
                    <th>物品名</th>
                    <th>數量</th>
                    <th>時間</th>
                </tr>
                <tr>
                <td>'.$order['client_name'].'</td>
                <td>'.$order['client_email'].'</td>
                <td>'.$item['name'].'</td>
                <td>'.$order['quantity'].'</td>
                <td>'.$order['order_time'].'</td>
                </tr>
            </table>'

    ;
    }
    
?>
<?php include_once('footer.php') ?>