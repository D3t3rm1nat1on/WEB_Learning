<?php #init
    include_once '../../functions/get_tovar.php';
    $groups = get_groups();
?>

<style>
    td{
        text-align: center;
    }
</style>

<table border="1">
    <tr><td colspan="5" bgcolor="#bdb76b">Прайс лист</td></tr>
    <tr bgcolor="#f0e68c">
        <td>Наименование</td>
        <td>Цена</td>
        <td>Наличие</td>
        <td>Коллекция</td>
        <td>Возрастное ограничение</td>
    </tr>
    <?php
    foreach ($groups as $group => $goods) {
        echo '<tr><td colspan="5" bgcolor="#faebd7">',$group ,'</td></tr>';
        foreach ($goods as $product) {
            echo '<tr>';
            echo '<td>'.$product['name'].'</td>';
            echo '<td>'.$product['price'].'</td>';
            echo '<td>'.$product['amount'].'</td>';
            echo '<td>'.$product['collection'].'</td>';
            echo '<td>'.$product['age_limit'].'</td>';
            echo '</tr>';
        }
    }
    ?>
</table>
<a href="1.php">На главную</a><br>
<a href="2.php">Вывести только новогоднюю коллекцию</a><br>
<a href="3.php">Товары для взрослых</a><br>
<a href="4.php">Отсортироватьт по названию</a><br>
