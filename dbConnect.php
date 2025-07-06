<?php 
    try{
        $dbconnection=mysqli_connect('localhost','root','12345678','php_website');
        mysqli_set_charset($dbconnection,'utf8');
    }catch(mysqli_sql_exception $error){
        echo "資料庫連線失敗:".$error->getCode();
        exit();
    }
    
?>