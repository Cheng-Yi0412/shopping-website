<?php include_once('head.php') ?>
登入頁
<form action="functions.php?op=checkLogin" method="post" autocomplete="off">
    <label for="email">電子郵件</label>
    <input id="email" type="email" name="email" required>

    <label for="password">輸入密碼</label>
    <input id="password" type="password" name="password" required>

    <input type="submit" value="登入">
</form>
<?php include_once('footer.php') ?>