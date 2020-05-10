<?php

include 'include/head.php';
include_once 'mysql.php';

$item = htmlspecialchars($_POST['iname']);
$stock = $_POST['stock'];
$reserved = $_POST['reserved'];

$qry = "INSERT INTO parts (item, stock, reserved) VALUES ('" . $item . "', '" . $stock . "', '" . $reserved . "')";

echo "Query: " . $qry . "<br>\n";

$result = $mysqli->query($qry);

header( "refresh:1;url=/wimp/inventory.php");

echo "<p>MySQL Result: " .  $result . "<br>\nPage will redirect automatically.<br>\n";

include 'include/foot.php';

?> 