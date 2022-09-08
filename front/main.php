<?php
$gettype = ($_GET['type'])??0;
$title = '';
if($gettype == 0){
    $goods = $Goods->all();
    $title = '全部商品';
}else{
    $type = $Type->find($gettype);
    if($type['parent'] == 0){
        $goods = $Goods->all(['big'=>$gettype]);
        $title = $type['name'];
    }else{
        $goods = $Goods->all(['mid'=>$gettype]);
        $title = $Type->find($type['parent'])['name'].">".$type['name'];
    }
}
?>
<h1><?=$title?></h1>

<?php
foreach ($goods as $key => $good) {
?>

<div class="d-f w-80 aut">
    <div class="pp w-40 p-10 m-1 d-f a-c j-c">
        <a href="?do=intro&id=<?=$good['id']?>">
            <img src="./img/<?=$good['img']?>" alt="" style="height: 120px;">
        </a>
    </div>
    <div class="w-60">
        <div class="tt ct p-10 m-1">
            <?=$good['name']?>
        </div>
        <div class="pp p-10 m-1 d-f" style="justify-content: space-between;">
            價錢：<?=$good['price']?>
            <a href="?do=buycart&id=<?=$good['id']?>">
                <img src="./icon/0402.jpg" alt="">
            </a>
        </div>
        <div class="pp p-10 m-1">
            規格：<?=$good['spec']?>
        </div>
        <div class="pp p-10 m-1">
            簡介：
            <?=mb_substr($good['intro'],0,25)?>...
        </div>
    </div>
</div>

<?php
}
?>