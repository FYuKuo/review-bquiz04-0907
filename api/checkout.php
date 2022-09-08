<?php
include('./base.php');
$_POST['goods'] = serialize($_SESSION['cart']);
$_POST['no'] = date('Ymd') . str_pad($Ord->math('MAX','id')+1,6,0,STR_PAD_LEFT);
$_POST['orddate'] = date('Y-m-d');
$_POST['acc'] = $_SESSION['mem'];
$Ord->save($_POST);
unset($_SESSION['cart']);
?>