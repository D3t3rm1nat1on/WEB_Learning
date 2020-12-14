<html lang="ru">
<head>
    <style>
        table{
            font-family: "Andale Mono";
            padding: 20px;
            border: solid cadetblue;
        }

        .g1{
            font-size: 24px;
        }

        .g2{
            font-size: 18px;
        }

        input{
            border-style: dot-dot-dash;
            font-size: 15px;
            height: 40px;
            width: 100%
        }

        span.g_enter{
            font-size: 20px;
        }

        a{

            text-decoration-line: none;
        }

        input.next{
            color: white;
            font-size: 20px;
            width: min-content;
            background-color: cornflowerblue;
        }

        td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="admin.php" method="post">
        <table border="1">
            <tr>
                <td rowspan="2">
                    <input type="submit" value="Найти в БД"     name="find">
                    <input type="submit" value="Удалить из БД"  name="delete">
                    <input type="submit" value="Добавить в БД"  name="add">
                    <input type="submit" value="Обновить по ID"  name="update">
                </td>
                <td>id</td>
                <td>group</td>
                <td>name</td>
                <td>price</td>
                <td>amount</td>
                <td>collection</td>
                <td>age_limit</td>
            </tr>
            <tr>
                <td><label><input name="id"         placeholder="0"         type="number"></label></td>
                <td><label><input name="group"      placeholder="First"     type="text"></label></td>
                <td><label><input name="name"       placeholder="Топор"     type="text"></label></td>
                <td><label><input name="price"      placeholder="0"         type="number"></label></td>
                <td><label><input name="amount"     placeholder="0"         type="number"></label></td>
                <td><label><input name="collection" placeholder="halloween" type="text"></label></td>
                <td><label><input name="age_limit"  placeholder="0"         type="number"></label></td>
            </tr>
            <tr bgcolor="#f0e68c"><td colspan="8" align="center">Результаты</td></tr>
            <?php
                include_once '/functions/api.php';

                if (isset($_POST['find'])){
                    echo 'find'.'<br>';
                }
                if (isset($_POST['delete'])){
                    echo 'delete'.'<br>';
                    $where = array();
                    foreach ($_POST as $key => $value) {
                        if ($value != "" and $key != "find" and $key != "delete" and $key != "add" and $key != "update")
                            array_push($where, "`{$key}` = '{$value}'");
                    }
                    delete_tovar($where);
                }
                if (isset($_POST['add'])){
                    echo 'add'.'<br>';
                    $item = array();
                    foreach ($_POST as $key => $value) {
                        if ($value != "" and $key != "find" and $key != "delete" and $key != "add" and $key != "update")
                            $item[$key] = $value;
                    }
                    add_tovar($item);
                }
                if (isset($_POST['update'])){
                    echo 'update'.'<br>';
                    $item = array();
                    foreach ($_POST as $key => $value) {
                        if ($value != "" and $key != "id" and $key != "find" and $key != "delete" and $key != "add" and $key != "update")
                            $item[$key] = $value;
                    }
                    if (isset($_POST['id']))
                        update_tovar($item, (int)$_POST['id']);
                }


                $where = array();
                foreach ($_POST as $key => $value) {
                    if ($value != "" and $key != "find" and $key != "delete" and $key != "add" and $key != "update")
                        array_push($where, "`{$key}` = '{$value}'");
                }
                $tovar = find_tovar($where);
                foreach ($tovar as $key => $value){
                    echo '<tr>';
                    echo '<td></td>';
                    echo '<td>'.$value['id'].'</td>';
                    echo '<td>'.$value['group'].'</td>';
                    echo '<td>'.$value['name'].'</td>';
                    echo '<td>'.$value['price'].'</td>';
                    echo '<td>'.$value['amount'].'</td>';
                    echo '<td>'.$value['collection'].'</td>';
                    echo '<td>'.$value['age_limit'].'</td>';
                    echo '</tr>';
                }

            ?>
        </table>
    </form>
</body>
</html>
<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';

    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
?>

