<?php
include('./base.php');
$big = str_pad($_POST['big'],2,0,STR_PAD_LEFT);
$mid = str_pad($_POST['mid'],2,0,STR_PAD_LEFT);
$end = $Goods->math('MAX','id')+10;
$no = $big.$mid.$end;

echo $no."<input type='hidden' name='no' value='$no' >";
?>