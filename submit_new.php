<?php

include 'include/head.php';
include_once 'mysql.php';

$category = htmlspecialchars($_POST['category']);
$manufacturer = htmlspecialchars($_POST['manufacturer']);
$item = htmlspecialchars($_POST['iname']);
$stock = $_POST['stock'];
$reserved = $_POST['reserved'];
$ordered = $_POST['ordered'];
$cost = $_POST['cost'];

$tech_use = false;

if (isset($_POST['tech_use'])) {
	$tech_use = true;
}

$qry = "INSERT INTO parts (category, manufacturer, name, stock, reserved, ordered, cost, tech_use) VALUES ('" . $category . "', '" . $manufacturer . "', '" . $item . "', '" . $stock . "', '" . $reserved . "', '" . $ordered . "', '" . $cost . "', '" . $tech_use . "')";

echo "Query: " . $qry . "<br>\n";

$result = $mysqli->query($qry);

header( "refresh:0;url=/wimp/fullinventory.php");

echo "<p>MySQL Result: " .  $result . "<br>\nPage will redirect automatically.<br>\n";

include 'include/foot.php';

?> 
