<?php

include 'include/head.php';
include_once 'mysql.php';

$id = $_POST['id'];
$item = htmlspecialchars($_POST['iname']);
$stock = $_POST['stock'];
$reserved = $_POST['reserved'];

$qry = "UPDATE parts SET item = '" . $item . "', stock = " . $stock . ", reserved = " . $reserved . " WHERE id = " . $id;

echo "Query: " . $qry . "<br>\n";

$result = $mysqli->query($qry);

header( "refresh:1;url=/wimp/inventory.php");

echo "<p>MySQL Result: " .  $result . "<br>\nPage will redirect automatically.<br>\n";

include 'include/foot.php';

?> 