<?php
$num1 = rand(10,99);
$num2 = rand(10,99);
$_SESSION['anser'] = $num1+$num2;
?>

<h2>管理登入</h2>

<table class="w-60 aut">
    <tr>
        <td class="tt ct w-40">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc">
        </td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp"><?=$num1."+".$num2?><input type="text" name="anser" id="anser"></td>
    </tr>
</table>
<div class="ct">
    <input type="button" value="確認" onclick="login()">
</div>

<script>
    function login(){
        let acc = $('#acc').val();
        let pw = $('#pw').val();
        let myAnser = $('#anser').val();
        let anser = <?=$_SESSION['anser']?>;
        let table = 'admin';


        if(anser == myAnser){

            $.get('./api/login.php',{acc,pw,table},(res)=>{
                if(parseInt(res) == 1){
                    location.href='./back.php';
                }else{
                    alert('帳號或密碼錯誤');
                }
            })
        }else{
            alert('對不起，您輸入的驗證碼有誤 \n 請您重新登入')
        }



    }
</script>