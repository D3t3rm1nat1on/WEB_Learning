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
    $query = "INSERT INTO `stat_table` ( `title`, `date`, `opis`, `text`, `author`, `type`, `age_limit`) VALUES ('$title', '$date', '$opis', '$text', '$author', '$type', '$age_limit')";
    $result = $connection->query($query);
    echo $query.'<br>';
    if ($result)
    {
        echo "New record created successfully";
    }
    else
    {
        echo "ERROR";
    }