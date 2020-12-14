<?php #init
function get_groups()
{
    $mysqli = new mysqli("localhost", "andrey", "12345", "testdb");

    if ($mysqli->connect_error) {
        die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $groups = array();

    $query = "SELECT `group` FROM `tovar` GROUP BY `group`";

    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
        $groups[$row['group']] = array();
    }

    foreach ($groups as $group_name => $group) {
        $query = "SELECT * FROM `tovar` WHERE `group` = '{$group_name}'";
        $result = $mysqli->query($query);
        for ($i = 0; $row = $result->fetch_assoc(); $i++) {
            array_push($group, $row);
        }
        $groups[$group_name] = $group; // ИНАЧЕ НИЧЕГО НЕ ОБНОВИТСЯ
    }
    return $groups;
}

/**
 * @param array $where
 * @return array
 */
function find_tovar($where = NULL)
{
    $mysqli = new mysqli("localhost", "andrey", "12345", "testdb");

    if ($mysqli->connect_error) {
        die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $query = "select * from tovar";
    if (!empty($where)) {
        $query .= " where " . join(" and ", $where);
    }
    echo $query;

    $tovar = array();

    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
        array_push($tovar, $row);
    }

    return $tovar;
}

/**
 * @param array $where
 */
function delete_tovar($where = NULL)
{
    $mysqli = new mysqli("localhost", "andrey", "12345", "testdb");

    if ($mysqli->connect_error) {
        die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $query = "delete from tovar ";
    if (!empty($where)) {
        $query .= " where " . join(" and ", $where);
        $mysqli->query($query);
    }
}

/**
 * @param array $tovar
 */
function add_tovar($tovar)
{
    $mysqli = new mysqli("localhost", "andrey", "12345", "testdb");

    if ($mysqli->connect_error) {
        die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $keys = array();
    $items = array();
    foreach ($tovar as $key => $item){
        array_push($keys, $key);
        array_push($items, "'$item'");
    }

    $query = "INSERT INTO `tovar`(".join(', ', $keys).") VALUES (".join(', ', $items).")";
    echo $query.'<br>';
    if (!empty($tovar)) {
        $mysqli->query($query);
    }
}

/**
 * @param array $tovar
 */
function update_tovar($tovar, $id)
{
    $mysqli = new mysqli("localhost", "andrey", "12345", "testdb");

    if ($mysqli->connect_error) {
        die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $set = array();
    foreach ($tovar as $key => $item) {
        array_push($set, "`$key` = '$item'");
    }

    $query = "UPDATE `tovar` SET " . join(", ", $set) . " WHERE `id` = $id";
    echo $query . '<br>';
    if (!empty($tovar)) {
        $mysqli->query($query);
    }
}
?>