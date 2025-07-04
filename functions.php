<?php include('head.php') ?>
<?php
if($_GET['op']="creatOrder"){
    creatOrder();
}
elseif($_GET['op']='logout'){
    echo "登出頁面";
}

function creatOrder(){
    echo "<pre>
    <h1>訂單已完成</h1>
    {$_POST['itemid']}
    {$_POST['quantity']}
    </pre>";  
    $my_file= fopen('data.csv','a') or die("存入失敗");
    $data= $_POST['itemid'].','.$_POST['email'].','.$_POST['name'].','.$_POST['quantity'].','.date('Y-M-N H:i:s')."\r\n";
    fwrite($my_file,$data);
    fclose($my_file);
}

?>
<?php include('footer.php') ?>