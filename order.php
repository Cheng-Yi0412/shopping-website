<?php include_once('head.php') ?>
<?php
/*if(!isset($_SESSION['email'])){
    header('Location:./index.php');
}*/
?>

<form action="functions.php?op=creatOrder" method="post" >      <!--輸入表單，將要下的訂單資料傳給function-->
    <input name="itemid" type="hidden" name="itemid" value="<?php echo $_GET['itemid']; ?>">
        <?php echo "{$_GET['itemid']}" ?>
    </input></br>

    <label for="email">郵件:</label>
    <input id="email" name="email"></input></br>

    <label for="name">你的名字:</label>
    <input id="name" name="name"></input></br>

    <label for="quantity">購買數量</label>
    <input id="quantity" type="number" name="quantity" min="1" max="5" value="1"></input></br>

    <input class="buyBtn" type="submit" value="下單">
</form>

<?php include_once('footer.php') ?>