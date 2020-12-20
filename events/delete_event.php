<?php
include_once "../functions/api.php";
$title     = $_REQUEST[title];

$connection = connect();
$query = "DELETE FROM `stat_table` WHERE `title` = '$title'";
$result = $connection->query($query);

echo $query.'<br>';
if ($result){
    echo "Deleted successfully";
}
else
{
    echo "ERROR";
}