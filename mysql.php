<?php

$mysql_user = 'invkeeper';
$mysql_password = 'Alpha2Omega';
$mysql_host = 'localhost';
$mysql_database = 'inventory';

$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);

if ($mysqli->connect_errno) {
    echo "<p style='text-align: center; color: #ddddff;'>Failed to connect to MySQL: " . $mysqli->connect_error . "</p><br>\n";
    include 'foot.php';
    exit();
}



?> 
