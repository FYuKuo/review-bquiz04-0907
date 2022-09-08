<h1 class="ct">訂單管理</h1>

<table class="w-80 aut ct">
    <tr class="tt">
        <th>訂單編號</th>
        <th>金額</th>
        <th>會員帳號</th>
        <th>姓名</th>
        <th>下單時間</th>
        <th>操作</th>
    </tr>

    <?php
    $ords = $Ord->all();
    foreach ($ords as $key => $ord) {
    ?>
    <tr class="pp">
        <td>
            <a href="?do=detail&id=<?=$ord['id']?>">
                <?=$ord['no']?>
            </a>
        </td>
        <td><?=$ord['total']?></td>
        <td><?=$ord['acc']?></td>
        <td><?=$ord['name']?></td>
        <td><?=$ord['orddate']?></td>
        <td>
            <input type="button" value="刪除" onclick="del(<?=$ord['id']?>,'ord')">
        </td>
    </tr>
    <?php
    }
    ?>
</table>
