<?php include('head.php') ?>
登入頁
<form action="functions.php?op=checkLogin" method="post">
    <label for="email">電子郵件</label>
    <input id="email" name="email">

    <label for="password">輸入密碼</label>
    <input id="password" name="password">

    <input type="submit" value="登入">
</form>
<?php include('footer.php') ?>