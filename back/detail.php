<?php
$ord = $Ord->find($_GET['id']);
?>

<h1 class="ct">訂單編號 <span style="color: red;"><?=$ord['no']?></span> 的詳細資料</h1>

<table class="aut w-80">
    <tr>
        <td class="tt ct w-30">
            登入帳號
        </td>
        <td class="pp">
        <?=$ord['acc']?>
        </td>
    </tr>
    <tr>
        <td class="tt ct w-30">
            姓名
        </td>
        <td class="pp">
            <?=$ord['name']?>
        </td>
    </tr>
    <tr>
        <td class="tt ct w-30">
            電子信箱
        </td>
        <td class="pp">
            <?=$ord['email']?>
        </td>
    </tr>
    <tr>
        <td class="tt ct w-30">
            聯絡地址
        </td>
        <td class="pp">
            <?=$ord['addr']?>
        </td>
    </tr>
    <tr>
        <td class="tt ct w-30">
            聯絡電話
        </td>
        <td class="pp">
            <?=$ord['tel']?>
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
$ord['goods'] = unserialize($ord['goods']);
$sum = 0;
foreach ($ord['goods'] as $key => $value) {
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
    <input type="button" value="返回" onclick="location.href='?do=order'">
</div>