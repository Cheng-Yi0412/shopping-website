<?php include('head.php');?>
<?php
    if(!isset($_SESSION['email'])){
        header("Location: ./index.php");
    }
?>
<h1>訂單紀錄</h1>
<?php
    $orderData= file_get_contents('data.csv');
    $orders =str_getcsv($orderData,"\r\n");
    foreach($orders as $order){
        $single_order=explode(',',$order);
        echo '
            <table border="1">
                <tr>
                    <th>物品名稱</th>
                    <th>姓名</th>
                    <th>數量</th>
                    <th>時間</th>
                </tr>
                <tr>
                <td>'.$single_order[0].'</td>
                <td>'.$single_order[2].'</td>
                <td>'.$single_order[3].'</td>
                <td>'.$single_order[4].'</td>
                </tr>
            </table>'

    ;
    }
    
?>
<?php include('footer.php') ?>