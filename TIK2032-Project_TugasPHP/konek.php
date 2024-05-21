<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "tmessage";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "Konek Gagal";
    die("error!");
}

?>