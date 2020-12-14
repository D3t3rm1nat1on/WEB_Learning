<?php
echo extension_loaded('pgsql') ? 'yes':'no';
$dbconn2 = pg_connect("host=localhost port=5432 dbname=mary");
//подключиться к базе "mary" на хосте "localhost", порт "5432"
