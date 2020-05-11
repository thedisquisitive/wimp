<?php

include 'include/head.php';
include_once 'mysql.php';

$category = htmlspecialchars($_POST['category']);
$manufacturer = htmlspecialchars($_POST['manufacturer']);
$id = $_POST['id'];
$item = htmlspecialchars($_POST['iname']);
$stock = $_POST['stock'];
$reserved = $_POST['reserved'];
$ordered = $_POST['ordered'];
$cost = $_POST['cost'];

$tech_use = false;
if (isset($_POST['tech_use'])) {
	$tech_use = true;
}


$qry = "UPDATE parts SET category = '" . $category . "', manufacturer = '" . $manufacturer . "', name = '" . $item . "', stock = " . $stock . ", reserved = " . $reserved . ", ordered = '". $ordered . "', cost = '" . $cost . "', tech_use = '" . $tech_use . "' WHERE id = " . $id;

echo "Query: " . $qry . "<br>\n";

$result = $mysqli->query($qry);

header( "refresh:0;url=/wimp/fullinventory.php");

echo "<p>MySQL Result: " .  $result . "<br>\nPage will redirect automatically.<br>\n";

include 'include/foot.php';

?> 
