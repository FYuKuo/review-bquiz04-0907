<?php
include('./base.php');
$DB = new DB($_GET['table']);
$user = $DB->find(['acc'=>$_GET['acc'],'pw'=>$_GET['pw']]);
if(empty($user)){
    echo 0;
}else{
    $_SESSION[$_GET['table']]=$_GET['acc'];
    echo 1;
}

?>