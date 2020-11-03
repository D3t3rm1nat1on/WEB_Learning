<?php #init
$groups['First'] = array(
    array('name' => "Топор", 'price' => 500, 'amount' => 10, "collection" => "halloween", "age_limit" => 18),
    array('name' => "Лопата", 'price' => 300, 'amount' => 15, "collection" => "new year", "age_limit" => 14),
    array('name' => "Резак", 'price' => 760, 'amount' => 4, "collection" => "none", "age_limit" => 18),
);
$groups['Second'] = array(
    array('name' => "Конфеты", 'price' => 100, 'amount' => 60, "collection" => "halloween", "age_limit" => 0),
    array('name' => "Чудо напиток", 'price' => 70, 'amount' => 23, "collection" => "new year", "age_limit" => 0),
    array('name' => "Шоколад", 'price' => 110, 'amount' => 50, "collection" => "none", "age_limit" => 0),
);
$groups['Third'] = array(
    array('name' => "Удочка", 'price' => 7500, 'amount' => 3, "collection" => "halloween", "age_limit" => 16),
    array('name' => "Раскладной стул", 'price' => 2000, 'amount' => 9, "collection" => "new year", "age_limit" => 6),
    array('name' => "Приманка", 'price' => 30, 'amount' => 110, "collection" => "none", "age_limit" => 14),
);
$groups['Fourth'] = array(
    array('name' => "Футбольный мяч", 'price' => 450, 'amount' => 6, "collection" => "halloween", "age_limit" => 6),
    array('name' => "Баскетбольный мяч", 'price' => 500, 'amount' => 3, "collection" => "new year", "age_limit" => 6),
    array('name' => "Волейбольный мяч", 'price' => 400, 'amount' => 8, "collection" => "none", "age_limit" => 6),
);
$groups['Fifth'] = array(
    array('name' => "Нож", 'price' => 500, 'amount' => 7, "collection" => "halloween", "age_limit" => 18),
    array('name' => "Ружье", 'price' => 20000, 'amount' => 1, "collection" => "new year", "age_limit" => 18),
    array('name' => "Палатка", 'price' => 15000, 'amount' => 2, "collection" => "none", "age_limit" => 16),
);
$groups['Sixth'] = array(
    array('name' => "Помада", 'price' => 400, 'amount' => 20, "collection" => "halloween", "age_limit" => 6),
    array('name' => "Тушь", 'price' => 350, 'amount' => 20, "collection" => "new year", "age_limit" => 6),
    array('name' => "Тени", 'price' => 350, 'amount' => 50, "collection" => "none", "age_limit" => 6),
);
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
            echo '<tr><td>',join('</td><td>', $product), '</td></tr>';
        }
    }
    ?>
</table>
<a href="1.php">На главную</a><br>
<a href="2.php">Вывести только новогоднюю коллекцию</a><br>
<a href="3.php">Товары для взрослых</a><br>
<a href="4.php">Отсортироватьт по названию</a><br>
