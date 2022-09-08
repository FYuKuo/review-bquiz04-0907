<?php
if(isset($_GET['id'])){
    $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}

if(!isset($_SESSION['mem'])){
    to('?do=login');
}

?>

<h2 class="ct"><?=$_SESSION['mem']?>的購物車</h2>

<?php
if(isset($_SESSION['cart'])){
?>
<table class="w-80 aut ct">
    <tr class="tt">
        <th>編號</th>
        <th>商品名稱</th>
        <th>數量</th>
        <th>庫存量</th>
        <th>單價</th>
        <th>小計</th>
        <th>刪除</th>
    </tr>
    <?php
        // dd($_SESSION['cart']);
    foreach ($_SESSION['cart'] as $key => $value) {
        $good = $Goods->find($key);
    ?>
    <tr class="pp">
        <td><?=$good['no']?></td>
        <td><?=$good['name']?></td>
        <td><?=$value?></td>
        <td><?=$good['qt']?></td>
        <td><?=$good['price']?></td>
        <td><?=$good['price']*$value?></td>
        <td><img src="./icon/0415.jpg" alt="" onclick="delCart(<?=$key?>)"></td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="ct">
    <a href="./index.php"><img src="./icon/0411.jpg" alt=""></a>
    <a href="?do=checkout"><img src="./icon/0412.jpg" alt=""></a>
</div>

<?php    
}else{
?>
<h3 class="ct">目前購物車尚無商品</h3>
<?php    
}
?>

<script>
    function delCart(id)
    {
        $.post('./api/del_cart.php',{id},()=>{
            location.href='?do=buycart';
        })
    }
</script>