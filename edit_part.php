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
?>

<div class='form'>
	<form id='editform' action='/wimp/submit_edit.php' method='post'>
		<label for='id'>ID:</label><br>
        <input type='text' id='id' name='id' value=<?php echo "'".$data['id'] . "'"?> readonly='readonly'><br>
		<label for='category'>Category:</label><br>
        <input type='text' id='category' name='category' value=<?php echo "'".$data['category'] . "'"?>><br>
		<label for='manufacturer'>Manufacturer:</label><br>
        <input type='text' id='manufacturer' name='manufacturer' value=<?php echo "'".$data['manufacturer'] . "'"?>><br>
        <label for='iname'>Item Name:</label><br>
        <input type='text' id='iname' name='iname' value=<?php echo "'".$data['name'] . "'"?>><br>
        <label for='stock'>In Stock:</label><br>
        <input type='text' id='stock' name='stock' value=<?php echo "'".$data['stock'] . "'"?>><br>
        <label for='reserved'>Reserved:</label></br>
        <input type='text' id='reserved' name='reserved' value=<?php echo "'".$data['reserved'] . "'"?>><br>
		<label for='ordered'>Ordered:</label></br>
        <input type='text' id='ordered' name='ordered' value=<?php echo "'".$data['ordered'] . "'"?>><br>
		<label for='cost'>Cost:</label></br>
        <input type='text' id='cost' name='cost' value=<?php echo "'".$data['cost'] . "'"?>><br>
		<label for='tech_use'>Commonly Used In Shop:</label></br>
        <input type='checkbox' id='tech_use' name='tech_use' value=<?php if ($data['tech_use'] == true) { echo "'true' checked"; } else { echo "'false'"; }?>><br><br>
        <input type='submit' value='Submit'>
	</form>
</div>
	
<?php

include 'include/foot.php';

?>
