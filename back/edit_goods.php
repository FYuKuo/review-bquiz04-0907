<?php
$good = $Goods->find($_GET['id']);
?>
<h1 class="ct">修改商品</h2>

<form action="./api/goods.php" method="post" enctype="multipart/form-data">
<table class="w-80 aut">
    <tr>
        <td class="tt w-30 ct">所屬大分類</td>
        <td class="pp">
        <select name="big" id="big">
            <?php
            $bigs = $Type->all(['parent'=>0]);
            foreach ($bigs as $key => $big) {
            ?>
            <option value="<?=$big['id']?>" <?=($big['id'] == $good['big'])?'selected':''?>><?=$big['name']?></option>
            <?php
            }
            ?>
        </select>
        </td>
    </tr>
    <tr>
        <td class="tt w-30 ct">所屬中分類</td>
        <td class="pp">
            <select name="mid" id="mid">
            <?php
            $mids = $Type->all(['parent'=>$good['big']]);
            foreach ($mids as $key => $mid) {
            ?>
            <option value="<?=$mid['id']?>" <?=($mid['id'] == $good['mid'])?'selected':''?>><?=$mid['name']?></option>
            <?php
            }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="tt w-30 ct">商品編號</td>
        <td class="pp goods_no">
        <?=$good['no']?>
        <input type="hidden" name="no" value="<?=$good['no']?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 ct">商品名稱</td>
        <td class="pp">
        <input type="text" name="name" id="name" value="<?=$good['name']?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 ct">商品價格</td>
        <td class="pp">
        <input type="text" name="price" id="price" value="<?=$good['price']?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 ct">規格</td>
        <td class="pp">
        <input type="text" name="spec" id="spec" value="<?=$good['spec']?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 ct">庫存量</td>
        <td class="pp">
            <input type="text" name="qt" id="qt" value="<?=$good['qt']?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 ct">商品圖片</td>
        <td class="pp">
            <input type="file" name="img" id="img">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 ct">商品介紹</td>
        <td class="pp">
            <textarea name="intro" id="intro" cols="30" rows="10"><?=$good['intro']?></textarea>
        </td>
    </tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="<?=$good['id']?>">
    <input type="submit" value="修改"> | 
    <input type="reset" value="重置"> | 
    <input type="button" value="返回" onclick="location.href='?do=th'">
</div>

</form>

<script>

    $('#big').on('change',function(){
        $('#mid').load('./api/get_mid.php',{big:$('#big').val()})
    })
    $('#big,#mid').on('change',function(){
        
        $('.goods_no').load('./api/get_no.php',{big:$('#big').val(),mid:$('#mid').val()});
        
    })

</script>