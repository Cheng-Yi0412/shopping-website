<?php 
    try{
        $dbconnection=mysqli_connect('localhost','root','12345678','php_index');
        mysqli_set_charset($dbconnection,'utf8mb4');
    }catch(mysqli_sql_exception $error){
        echo "資料庫連線失敗:".$error->getCode();
        exit();
    }
    
?>