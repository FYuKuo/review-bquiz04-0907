<?php
$good = $Goods->find($_GET['id']);
?>
<h1 class="ct"><?=$good['name']?></h1>

<div class="d-f w-80 aut">
    <div class="pp w-40 p-10 m-1 d-f a-c j-c">

        <img src="./img/<?=$good['img']?>" alt="" style="height: 120px;">

    </div>
    <div class="w-60">
        <div class="pp p-10 m-1 ">
            分類：<?=$Type->find($good['big'])['name']?>><?=$Type->find($good['mid'])['name']?>
        </div>
        <div class="pp p-10 m-1">
            編號：<?=$good['no']?>
        </div>
        <div class="pp p-10 m-1 ">
            價錢：<?=$good['price']?>
        </div>
        <div class="pp p-10 m-1">
            簡介：
            <?=$good['intro']?>
        </div>
        <div class="pp p-10 m-1 ">
            庫存：<?=$good['qt']?>
        </div>
    </div>
</div>
<div class=" w-80 aut tt ct">
    購買數量<input type="number" name="qt" id="qt" min="1" value="1">
    <a href="?do=buycart&id=<?=$good['id']?>">
        <img src="./icon/0402.jpg" alt="">
    </a>
</div>