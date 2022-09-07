<?php
include('./base.php');
// dd($_POST);
$Mem->save($_POST);
to('../back.php?do=mem');
?>