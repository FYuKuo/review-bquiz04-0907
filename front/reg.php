<h1 class="ct">會員註冊</h1>


<table class="w-70 aut">
    <tr>
        <td class="tt ct w-40">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="tt ct w-40">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc"><input type="button" value="檢查帳號" onclick="ch_acc()">
        </td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct w-40">電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
    <tr>
        <td class="tt ct w-40">住址</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <td class="tt ct w-40">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
</table>
<div class="ct">
    <input type="button" value="註冊" onclick="reg()">
    <input type="button" value="重置" onclick="reset()">
</div>

<script>
    function ch_acc(){
        let acc = $('#acc').val();

        $.post('./api/ch_acc.php',{acc},(res)=>{
            if(parseInt(res) == 1 || acc == 'admin'){
                
                alert('帳號已存在');
            }else{
                alert('帳號可使用');

            }
        })
    }

    function reg(){
        let acc = $('#acc').val();
        let name = $('#name').val();
        let pw = $('#pw').val();
        let tel = $('#tel').val();
        let addr = $('#addr').val();
        let email = $('#email').val();

        

            $.post('./api/ch_acc.php',{acc},(res)=>{
            if(parseInt(res) == 1 || acc == 'admin'){
                
                alert('帳號已存在');
            }else{
                $.post('./api/reg.php',{acc,name,pw,tel,addr,email},()=>{

                    location.href='?do=login';
                })

            }
        })

    }
</script>