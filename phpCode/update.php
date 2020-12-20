<?php
include_once "/functions/api.php";
$connection = connect();
$query = "SELECT * FROM `stat_table`";
$result = $connection->query($query);

echo '<form method="post" action="admin_panel.php" id="form-id_list">';
?>

    <input type="hidden" name="admin_login" value="admin">
    <input type="hidden" name="admin_password" value="admin">

<?php
    echo '        <input id="id_update_php" type="hidden" name="php">';
    echo '        <input id="id_title" type="hidden" name="title">';
    echo '        <table border="1" bgcolor="#ffebcd" class="lolTable">';
        echo '            <tr><td colspan="5" bgcolor="#bdb76b">Выберите текст для изменения</td></tr>';
        echo '            <tr bgcolor="#f0e68c">';
            echo '                <td>Название</td>';
            echo '            </tr>';
        while ($row = $result->fetch_assoc()){
        echo "<tr>";
            echo "<td><label onclick=\"open_update_event('form-id_list', '$row[title]');\">$row[title]</td>";
            echo "</tr>";
        }
        echo '</table>';
    echo '</form>';