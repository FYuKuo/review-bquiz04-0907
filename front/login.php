<?php
$num1 = rand(10,99);
$num2 = rand(10,99);
$_SESSION['anser'] = $num1+$num2;
?>
<h2>第一次購物</h2>
<a href="?do=reg">
    <img src="./icon/0413.jpg" alt="">
</a>

<h2>會員登入</h2>

<table class="w-60 aut">
    <tr>
        <td class="tt ct w-40">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc">
        </td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp"><?=$num1."+".$num2?><input type="text" name="anser" id="anser"></td>
    </tr>
</table>
<div class="ct">
    <input type="button" value="確認">
</div>