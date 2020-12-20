<?php
include_once "/functions/api.php";
$connection = connect();
$title = $_REQUEST[title];
$query = "SELECT * FROM `stat_table` WHERE `title` = \"$title\"";

$result = $connection->query($query);
$row = $result->fetch_assoc();
?>

<div class="form_box">
    <form id="insert_form" class="rf" action="events/update_event.php" method="post">
        <input type="hidden" name="admin_login" value="admin">
        <input type="hidden" name="admin_password" value="admin">
        <input type="hidden" name="title" value="<?php echo $row[title]; ?>">
        <table align="center" width="400" border="0" bgcolor="#d0f5ff">
            <tr>
                <td bgcolor="#6495ed">Обновление</td>
            </tr>
            <tr>
                <td><b><?php echo $row[title]; ?></b></td>
            </tr>
            <tr>
                <td>Описание</td>
            </tr>
            <tr>
                <td><textarea id="id_opis" class="rfield" type="text" name="opis"><?php echo $row[opis]; ?></textarea></td>
            </tr>
            <tr>
                <td>Текст</td>
            </tr>
            <tr>
                <td><textarea  id="id_text" class="rfield" type="text" name="text"><?php echo $row[text]; ?></textarea></td>
            </tr>
            <tr>
                <td>Автор</td>
            </tr>
            <tr>
                <td><input id="id_author" class="rfield" type="text" size="40" maxlength="255" name="author" value="<?php echo $row[author]; ?>"></td>
            </tr>
            <tr>
                <td>Тип</td>
            </tr>
            <tr>
                <td><input id="id_type" class="rfield" type="text" size="40" maxlength="255" name="type" value="<?php echo $row[type]; ?>"></td>
            </tr>
            <tr>
                <td>Возрастное ограничение</td>
            </tr>
            <tr>
                <td><input id="id_age_limit" class="rfield" type="number" name="age_limit" value="<?php echo $row[age_limit]; ?>"></td>
            </tr>
            <tr>
                <td align="left"><input id="id_button" class="next btn_submit disabled" type="button" value="Обновить" onclick="insert_check();"></td>
            </tr>
        </table>
    </form>
</div>

