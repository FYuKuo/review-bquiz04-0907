<h1 class="ct">會員管理</h1>
<table class="ct aut w-80">
    <tr class="tt">
        <td class="w-20">姓名</td>
        <td class="w-20">會員帳號</td>
        <td class="w-20">註冊會員</td>
        <td class="w-20">操作</td>
    </tr>
    <?php
    $rows = $Mem->all();
    foreach ($rows as $key => $row) {
    ?>
    <tr class="pp">
        <td class="w-30"><?=$row['name']?></td>
        <td class="w-30"><?=$row['acc']?></td>
        <td class="w-30"><?=$row['regdate']?></td>

        <td class="w-30">

            <input type="button" value="修改" onclick="location.href='?do=edit_mem&id=<?=$row['id']?>'">
            <input type="button" value="刪除" onclick="del(<?=$row['id']?>,'<?=$_GET['do']?>')">

        </td>
    </tr>
    <?php
    }
    ?>

</table>