<?php
include_once 'functions/api.php';
//echo "$_POST[username] 1 $_POST[psw]";
echo check_login($_POST[username], $_POST[psw]);