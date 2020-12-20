<div class="form_box">
    <form id="insert_form" class="rf" action="events/insert_event.php" method="post">
        <table align="center" width="400" border="0" bgcolor="#d0f5ff">
            <tr>
                <td bgcolor="#6495ed">Добавление</td>
            </tr>
            <tr>
                <td>Название</td>
            </tr>
            <tr>
                <td><input id="id_title" class="rfield" type="text" size="40" maxlength="255" name="title"></td>
            </tr>
            <tr>
                <td>Описание</td>
            </tr>
            <tr>
                <td><textarea id="id_opis" class="rfield" type="text" name="opis"></textarea></td>
            </tr>
            <tr>
                <td>Текст</td>
            </tr>
            <tr>
                <td><textarea  id="id_text" class="rfield" type="text" name="text"></textarea></td>
            </tr>
            <tr>
                <td>Автор</td>
            </tr>
            <tr>
                <td><input id="id_author" class="rfield" type="text" size="40" maxlength="255" name="author"></td>
            </tr>
            <tr>
                <td>Тип</td>
            </tr>
            <tr>
                <td><input id="id_type" class="rfield" type="text" size="40" maxlength="255" name="type"></td>
            </tr>
            <tr>
                <td>Возрастное ограничение</td>
            </tr>
            <tr>
                <td><input id="id_age_limit" class="rfield" type="number" name="age_limit"></td>
            </tr>
            <tr>
                <td align="left"><input id="id_button" class="next btn_submit disabled" type="button" value="Добавить" onclick="insert_check();"></td>
            </tr>
        </table>
    </form>
</div>
