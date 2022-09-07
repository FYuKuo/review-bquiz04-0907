<?php
$admin = $Admin->find($_GET['id']);
$pr = unserialize($admin['pr']);
?>
<h1 class="ct">修改管理員帳號</h2>

<form action="./api/admin.php" method="post">
<table class="w-60 aut">
    <tr>
        <td class="tt ct w-40">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc" value="<?=$admin['acc']?>">
        </td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw" value="<?=$admin['pw']?>"></td>
    </tr>
    <tr>
        <td class="tt ct">權限</td>
        <td class="pp">
            <input type="checkbox" name="pr[]" id="pr" value="1" <?=(in_array(1,$pr))?'checked':''?>>商品分類與管理 <br>
            <input type="checkbox" name="pr[]" id="pr" value="2" <?=(in_array(2,$pr))?'checked':''?>>訂單管理 <br>
            <input type="checkbox" name="pr[]" id="pr" value="3" <?=(in_array(3,$pr))?'checked':''?>>會員管理 <br>
            <input type="checkbox" name="pr[]" id="pr" value="4" <?=(in_array(4,$pr))?'checked':''?>>頁尾版權區管理 <br>
            <input type="checkbox" name="pr[]" id="pr" value="5" <?=(in_array(5,$pr))?'checked':''?>>最新消息管理 <br>
        </td>
    </tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="<?=$admin['id']?>">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>

</form>