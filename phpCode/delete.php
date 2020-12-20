<div class="form_box">
    <form id="insert_form" class="rf" action="events/delete_event.php" method="post">
        <table align="center" width="400" border="0" bgcolor="#d0f5ff">
            <tr>
                <td bgcolor="#6495ed"">Удаление</td>
            </tr>
            <tr>
                <td>Название</td>
            </tr>
            <tr>
                <td><input id="id_title" class="rfield" type="text" size="40" maxlength="255" name="title"></td>
            </tr>
            <tr>
                <td align="left"><input id="id_button" class="next btn_submit disabled" type="button" value="Удалить" onclick="insert_check();"></td>
            </tr>
        </table>
    </form>
</div>
