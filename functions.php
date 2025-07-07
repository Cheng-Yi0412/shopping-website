<?php include_once('head.php') ?>
<?php
if($_GET['op']=="creatOrder"){  //確認GET到的URL分辨運行功能
    creatOrder();
}
if($_GET['op']=='checkLogin'){
    checkLogin($_POST['email'],$_POST['password']);
}
if($_GET['op']=='logout'){
    logout();
    echo "登出頁面";
}
function logout(){          //登出:將session資料銷毀
    session_start();
    session_destroy();
    header('Location: ./index.php');
}

function checkLogin($email, $password){             //確認登入是否與資料庫符合
    global $dbconnection;
    $staffQ=mysqli_prepare($dbconnection,"SELECT * FROM `staff` WHERE `email`=?");
    mysqli_stmt_bind_param($staffQ, "s", $email);
    mysqli_stmt_execute($staffQ);
     $result = mysqli_stmt_get_result($staffQ);
    $staff=mysqli_fetch_assoc($result);

    if($email === $staff['email'] && password_verify($password,$staff['password']) ){       //將輸入密碼和資料庫中hash過的亂碼比對
        $_SESSION['email']=$email;
        header('Location: ./allOrders.php');
    }
    else{
        header('Location: ./login.php');
    }
}

function creatOrder(){          //下訂單進輸入進資料庫
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