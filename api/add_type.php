<?php
include('./base.php');
$Type->save(['name'=>$_POST['name'],'parent'=>$_POST['parent']]);
?>