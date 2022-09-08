<?php
include('./base.php');
$_POST['goods'] = serialize($_SESSION['cart']);
$_POST['no'] = date('Ymd') . str_pad(0,6,$Ord->math('MAX','id')+1,STR_PAD_LEFT);
$_POST['orddate'] = date('Y-m-d');
$_POST['acc'] = $_SESSION['mem'];
$Ord->save($_POST);
unset($_SESSION['cart']);
?>