<?php
include_once "../functions/api.php";
$date = getdate();
$title     = $_REQUEST[title];
$date      = "$date[year]-$date[mon]-$date[mday]";
$opis      = $_REQUEST[opis];
$text      = $_REQUEST[text];
$author    = $_REQUEST[author];
$type      = $_REQUEST[type];
$age_limit = $_REQUEST[age_limit];

$connection = connect();
$query = "UPDATE `stat_table` SET `date` = '$date', `opis` = '$opis', `text` = '$text', `author` = '$author', `type` = '$type', `age_limit` = '$age_limit' WHERE `title` = '$title'";
$result = $connection->query($query);
echo $query.'<br>';
if ($result)
{
    echo "New record updated successfully";
}
else
{
    echo "ERROR";
}