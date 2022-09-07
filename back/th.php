<h1 class="ct">商品分類</h1>
<div class="ct">
    新增大分類<input type="text" name="big" id="big"><input type="button" value="新增">
</div>
<div class="ct">
    新增中分類
    <select name="sb" id="sb">
    </select>
    <input type="text" name="mid" id="mid"><input type="button" value="新增">
</div>
<div class="ct"></div>
<table class="w-90 aut">
    <tr class="tt">
        <td class="w-70">大分類</td>
        <td class="ct">
            <input type="button" value="修改" onclick="location.href='?do=edit_type&id='">
            <input type="button" value="刪除" onclick="del('type')">
        </td>
    </tr>
    <tr class="pp">
        <td class="w-70 ct">123</td>
        <td class="ct">
            <input type="button" value="修改" onclick="location.href='?do=edit_type&id='">
            <input type="button" value="刪除" onclick="del('type')">
        </td>
    </tr>
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
    <tr class="pp">
        <td class="ct">編號</td>
        <td>商品名稱</td>
        <td class="ct">庫存量</td>
        <td class="ct">狀態</td>
        <td class="ct">
            <input type="button" value="修改" onclick="location.href='?do=edit_type&id='">
            <input type="button" value="刪除" onclick="del('type')"><br>
            <input type="button" value="上架" onclick="sh('goods')">
            <input type="button" value="下架" onclick="sh('goods')">
        </td>
    </tr>
</table>
