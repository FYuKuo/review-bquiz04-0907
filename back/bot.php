<h1 class="ct">編輯頁尾版權區</h1>

<form action="./api/bot.php" method="post">

    <table class="w-80 aut">
        <tr>
            <td class="tt ct">頁尾宣告內容</td>
            <td class="pp">
                <input type="text" name="text" id="text" style="width: 90%;" value="<?=$Bot->find(1)['text']?>">
                <input type="hidden" name="id" value="1">
            </td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>