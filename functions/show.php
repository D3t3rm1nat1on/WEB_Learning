<?php
include_once 'api.php';

function show_stat($title){
    $connection = connect();
    $query = "SELECT * FROM `stat_table` WHERE `title` = \"$title\"";

    $result = $connection->query($query);
    $row = $result->fetch_assoc();

    echo "<div class='div_text'>"; // название
    echo "<h1>";
    echo $row[title];
    echo "</h1>";
    echo "</div>";

    echo "<div class='div_text'>"; // описание
    echo "<h3>";
    echo $row[opis];
    echo "</h3>";
    echo "</div>";

    echo "<div class='div_text'>"; // текст
    echo $row[text];
    echo "</div>";
}

function show_list($where_string){
    $connection = connect();
    $query = "SELECT * FROM `stat_table` ".$where_string;
    $result = $connection->query($query);

    $username = $_POST[username] ? $_POST[username] : 'Гость';

    echo '<form method="post" action="index.php" id="form-id_list">';
    echo '        <input id="id_search" type="hidden" name="where_string">';
    echo '        <input id="id_title" type="hidden" name="title">';
    echo '        <input type="hidden" name="username" value='.$username.'>';
    echo '        <table border="1" bgcolor="#ffebcd" class="lolTable">';
    echo '            <tr><td colspan="5" bgcolor="#bdb76b">Список текстов (КЛИКАБЕЛЬНО)</td></tr>';
    echo '            <tr bgcolor="#f0e68c">';
    echo '                <td>Название</td>';
    echo '                <td>Автор</td>';
    echo '                <td>Тип</td>';
    echo '                <td>Возрастное ограничение</td>';
    echo '            </tr>';
    while ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td><label onclick=\"show_title('form-id_list', '$row[title]');\">$row[title]</td>";
        echo "<td><label onclick=\"show_where('author', '$row[author]', 'form-id_list');\">$row[author]</td>";
        echo "<td><label onclick=\"show_where('type', '$row[type]', 'form-id_list');\">$row[type]</td>";
        echo "<td><label onclick=\"show_where('age_limit', '$row[age_limit]', 'form-id_list');\">$row[age_limit]</td>";
        echo "</tr>";
    }
    echo '</table>';
    echo '</form>';
}

//                        $php = $_POST[php] ? $_POST[php] : '1';
//                        include_once "phpCode/$php.php";
?>