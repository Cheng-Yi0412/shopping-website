<?php include_once('head.php') ?>
<?php
if($_GET['op']=="creatOrder"){
    creatOrder();
}
if($_GET['op']=='checkLogin'){
    checkLogin($_POST['email'],$_POST['password']);
}
if($_GET['op']=='logout'){
    logout();
    echo "登出頁面";
}
function logout(){
    session_start();
    session_destroy();
    header('Location: ./index.php');
}

function checkLogin($email, $password){
    global $dbconnection;
    $staffQ=mysqli_query($dbconnection,"SELECT * FROM `staff` WHERE `email`='$email'");
    $staff=mysqli_fetch_assoc($staffQ);

    if($email === $staff['email'] && password_verify($password,$staff['password']) ){
        $_SESSION['email']=$email;
        header('Location: ./allOrders.php');
    }
    else{
        header('Location: ./login.php');
    }
}

function creatOrder(){
    global $dbconnection;
    $order_SQL="INSERT INTO `order`
    (`client_name`, `client_email`, `quantity`, `item_id`)
    VALUES
    ('{$_POST['name']}','{$_POST['email']}',{$_POST['quantity']},{$_POST['itemid']})
    ";

    if(mysqli_query($dbconnection,$order_SQL)){
        header('Location:./allOrders.php');
    }else{
        echo"執行失敗";
 }



    /*echo '<pre>
    <h1>訂單已完成</h1>'.
    $_POST['itemid'].
    $_POST['quantity'].
    '</pre>';  
    $my_file= fopen('data.csv','a') or die("存入失敗");
    $data= $_POST['itemid'].','.$_POST['email'].','.$_POST['name'].','.$_POST['quantity'].','.date('Y-M-N H:i:s')."\r\n";
    fwrite($my_file,$data);
    fclose($my_file);*/
}

?>
<?php include_once('footer.php') ?>