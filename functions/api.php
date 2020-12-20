<?php

function connect() {
    $server = $_SERVER['localhost'];
    $username = 'root';
    $password = '';
    $dbname = 'site_db';
    $charset = 'utf8';

    $connection = new mysqli($server, $username, $password, $dbname);

    if ($connection->connect_error){
        die('Ошибка соединения '.$connection->connect_error);
    }

    if (!$connection->set_charset($charset)){
        echo 'Ошибка установки кодировки UTF8';
    }

    return $connection;
}

function check_login($username, $password) {
    $connection = connect();
    $query = "SELECT * FROM `user_table` WHERE `username` = \"$username\" and `password` = \"$password\"";
    $result = $connection->query($query);
    return $result->num_rows != 0;
}

function check_username($username){
    $connection = connect();
    $query = "SELECT * FROM `user_table` WHERE `username` = \"$username\"";
    $result = $connection->query($query);
    return $result->num_rows != 0;
}

function create_user() {

}
