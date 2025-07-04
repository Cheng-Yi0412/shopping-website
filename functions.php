<?php include('head.php') ?>
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
    $admin_email='test_email';
    $admin_password='test_password';
    if($email == $admin_email && $password ==$admin_password){
        $_SESSION['email']=$email;
        header('Location: ./allOrders.php');
    }
    else{
        header('Location: ./login.php');
    }
}

function creatOrder(){
    echo '<pre>
    <h1>訂單已完成</h1>'.
    $_POST['itemid'].
    $_POST['quantity'].
    '</pre>';  
    $my_file= fopen('data.csv','a') or die("存入失敗");
    $data= $_POST['itemid'].','.$_POST['email'].','.$_POST['name'].','.$_POST['quantity'].','.date('Y-M-N H:i:s')."\r\n";
    fwrite($my_file,$data);
    fclose($my_file);
}

?>
<?php include('footer.php') ?>