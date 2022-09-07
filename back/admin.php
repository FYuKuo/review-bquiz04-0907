<div class="ct"><input type="button" value="新增管理員" onclick="location.href='?do=add_admin'"></div>
<br>
<table class="ct aut w-80">
    <tr class="tt">
        <td class="w-30">帳號</td>
        <td class="w-30">密碼</td>
        <td class="w-30">管理</td>
    </tr>
    <?php
    $rows = $Admin->all();
    foreach ($rows as $key => $row) {
    ?>
    <tr class="pp">
        <td class="w-30"><?=$row['acc']?></td>
        <td class="w-30"><?=str_repeat('*',strlen($row['pw']))?></td>
        <td class="w-30">
            <?php
            if($row['acc'] == 'admin'){
            ?>
            此帳號為最高權限
            <?php
            }else{
            ?>
            <input type="button" value="修改" onclick="location.href='?do=edit_admin&id=<?=$row['id']?>'">
            <input type="button" value="刪除" onclick="del(<?=$row['id']?>,'<?=$_GET['do']?>')">
            <?php
            }
            ?>
        </td>
    </tr>
    <?php
    }
    ?>

</table>