<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$partid = $_GET["id"];

include 'include/head.php';
include_once 'mysql.php';
include 'include/navigation.php';

$qry = "SELECT * FROM parts WHERE id=" . $partid . ";";

$result = $mysqli->query($qry);
$data = $result->fetch_assoc();



echo "\n<div class='form'><form id='editform' action='/wimp/submit_edit.php' method='post'>
        <label for='id'>ID:</label><br>
        <input type='text' id='id' name='id' value='" . $partid . "'><br>
        <label for='iname'>Item Name:</label><br>
        <input type='text' id='iname' name='iname' value='" . $data['item'] . "'><br>
        <label for='stock'>In Stock:</label><br>
        <input type='text' id='stock' name='stock' value='" . $data['stock'] . "'><br>
        <label for='reserved'>Reserved:</label></br>
        <input type='text' id='reserved' name='reserved' value='" . $data['reserved'] . "'<br><br>
        <input type='submit' value='Submit'>
     </form></div> ";

include 'include/foot.php';

?>