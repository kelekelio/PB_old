<?php

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$mysqli =new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($mysqli,"utf8");