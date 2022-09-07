<?php
include('./base.php');
$acc = $Mem->math('COUNT','id',['acc'=>$_POST['acc']]);

if($acc > 0){
    echo 1;

}else{
    echo 0;
}
?>