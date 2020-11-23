<?php #init
    function get_groups()
    {
        $mysqli = new mysqli("localhost", "andrey", "12345", "testdb");

        if ($mysqli->connect_error) {
            die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        $result = $mysqli->query("select * from tovar");

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
            $groups[$group_name] = $group; // ИНАЧЕ НИХУЯ НЕ ОБНОВИТСЯ
        }
        return $groups;
    }
?>