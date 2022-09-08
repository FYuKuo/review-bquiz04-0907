<h1 class="ct">填寫資料</h1>

<table class="aut w-80">
    <tr>
        <td class="tt ct w-30">
            登入帳號
        </td>
        <td class="pp">
            <?=$_SESSION['mem']?>
        </td>
    </tr>
    <tr>
        <td class="tt ct w-30">
            姓名
        </td>
        <td class="pp">
            <input type="text" name="name" id="name" value="<?=$Mem->find(['acc'=>$_SESSION['mem']])['name']?>">
        </td>
    </tr>
    <tr>
        <td class="tt ct w-30">
            電子信箱
        </td>
        <td class="pp">
            <input type="text" name="email" id="email" value="<?=$Mem->find(['acc'=>$_SESSION['mem']])['email']?>">
        </td>
    </tr>
    <tr>
        <td class="tt ct w-30">
            聯絡地址
        </td>
        <td class="pp">
            <input type="text" name="addr" id="addr" value="<?=$Mem->find(['acc'=>$_SESSION['mem']])['addr']?>">
        </td>
    </tr>
    <tr>
        <td class="tt ct w-30">
            聯絡電話
        </td>
        <td class="pp">
            <input type="text" name="tel" id="tel" value="<?=$Mem->find(['acc'=>$_SESSION['mem']])['tel']?>">
        </td>
    </tr>
</table>
<table class="aut w-80 ct">
<tr class="tt">
    <th class=" w-30">商品名稱</th>
    <th>編號</th>
    <th>數量</th>
    <th>單價</th>
    <th>小計</th>
</tr>
<?php
$sum = 0;
foreach ($_SESSION['cart'] as $key => $value) {
    $good = $Goods->find($key);
    $sum += $good['price']*$value;
?>
<tr class="pp">
    <td><?=$good['name']?></td>
        <td><?=$good['no']?></td>
        <td><?=$value?></td>
        <td><?=$good['price']?></td>
        <td><?=$good['price']*$value?></td>
</tr>
<?php
}
?>
<tr class="tt">
    <td colspan="5">
        總價：<?=$sum?>
    </td>
</tr>
</table>
<div class="ct">
    <input type="button" value="確定送出" onclick="checkout()">
    <input type="button" value="返回修改訂單" onclick="location.href='?do=buycart'">
</div>

<script>
    function checkout()
    {
        let name = $('#name').val();
        let email = $('#email').val();
        let addr = $('#addr').val();
        let tel = $('#tel').val();
        let total = <?=$sum;?>;

        $.post('./api/checkout.php',{name,email,addr,tel,total},()=>{
            alert('訂購成功 \n 感謝您的選購');
            location.href='./index.php';
        })

    }
</script>
