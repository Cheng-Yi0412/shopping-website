<?php
    $hash = password_hash("testpassword",PASSWORD_DEFAULT);     //確認密碼hash過後的數值，手動輸入進資料庫
    echo $hash;
?>