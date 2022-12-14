<h1 class="ct">商品分類</h1>
<div class="ct">
    新增大分類<input type="text" name="big" id="big"><input type="button" value="新增" onclick="add_type('big')">
</div>
<div class="ct">
    新增中分類
    <select name="bigtype" id="bigtype">
    </select>
    <input type="text" name="mid" id="mid"><input type="button" value="新增" onclick="add_type('mid')">
</div>
<div class="ct"></div>
<table class="w-90 aut">
    <?php
    $bigs = $Type->all(['parent'=>0]);
    foreach ($bigs  as $key => $big) {
    ?>
    <tr class="tt">
        <td class="w-70"><?=$big['name']?></td>
        <td class="ct">
            <input type="button" value="修改" onclick="edit_type(<?=$big['id']?>,'<?=$big['name']?>')">
            <input type="button" value="刪除" onclick="del(<?=$big['id']?>,'type')">
        </td>
    </tr>
    <?php
    $mids = $Type->all(['parent'=>$big['id']]);
    foreach ($mids  as $key => $mid) {
    ?>
    <tr class="pp">
        <td class="w-70 ct"><?=$mid['name']?></td>
        <td class="ct">
            <input type="button" value="修改" onclick="edit_type(<?=$mid['id']?>,'<?=$mid['name']?>')">
            <input type="button" value="刪除" onclick="del(<?=$big['id']?>,'type')">
        </td>
    </tr>
    <?php
        }
    }
    ?>
</table>


<h1 class="ct">商品管理</h1>
<div class="ct">
    <input type="button" value="新增商品" onclick="location.href='?do=add_goods'">

</div>
<div class="ct">

    <select name="" id="">
        <option value="">全部商品</option>
    </select>
</div>
<table class="w-90 aut">
    <tr class="tt">
        <th class="w-10">編號</th>
        <th>商品名稱</th>
        <th class="w-20">庫存量</th>
        <th class="w-10">狀態</th>
        <th class="w-20">操作</th>
    </tr>

    <?php
    $goods = $Goods->all();
    foreach ($goods as $key => $good) {
    ?>
        <tr class="pp">
            <td class="ct"><?=$good['no']?></td>
            <td><?=$good['name']?></td>
            <td class="ct"><?=$good['qt']?></td>
            <td class="ct">
                <?=($good['sh'] == 1)?'販售中':'已下架'?>
            </td>
            <td class="ct">
                <input type="button" value="修改" onclick="location.href='?do=edit_goods&id=<?=$good['id']?>'">
                <input type="button" value="刪除" onclick="del(<?=$good['id']?>,'goods')"><br>
                <input type="button" value="上架" onclick="sh(<?=$good['id']?>,1,'goods')">
                <input type="button" value="下架" onclick="sh(<?=$good['id']?>,0,'goods')">
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<script>
    function edit_type(id,name){
        
        name = prompt('請輸入您要修改的名稱',name);

       if(name != null){

           $.post('./api/edit_type.php',{id,name},()=>{
               location.reload();
           })
       }

    }

    $('#bigtype').load('./api/get_big.php');

    function add_type(type){
        let name = $(`#${type}`).val();
        let parent;
        switch (type) {
            case 'big':
                parent = 0;
            break;

            case 'mid':
                parent = $('#bigtype').val();
            break;
        }

        console.log(parent,name);
        $.post('./api/add_type.php',{name,parent},()=>{
            location.reload();
        })
    }

    function sh(id,sh,table){
        $.post('./api/sh.php',{id,sh,table},()=>{
            location.reload();
        })
    }
</script>