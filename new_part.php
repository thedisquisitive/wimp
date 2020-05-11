<?php

include 'include/head.php';
include_once 'mysql.php';

?>

<div class='form'>
	<form id='editform' action='/wimp/submit_new.php' method='post'>
		<label for='category'>Category:</label><br>
        <input type='text' id='category' name='category' value=''><br>
		<label for='manufacturer'>Manufacturer:</label><br>
        <input type='text' id='manufacturer' name='manufacturer' value=''><br>
        <label for='iname'>Item Name:</label><br>
        <input type='text' id='iname' name='iname' value=''><br>
        <label for='stock'>In Stock:</label><br>
        <input type='text' id='stock' name='stock' value=''><br>
        <label for='reserved'>Reserved:</label></br>
        <input type='text' id='reserved' name='reserved' value=''><br>
		<label for='ordered'>Ordered:</label></br>
        <input type='text' id='ordered' name='ordered' value=''><br>
		<label for='cost'>Cost:</label></br>
        <input type='text' id='cost' name='cost' value=''><br>
		<label for='tech_use'>Commonly Used In Shop:</label></br>
        <input type='checkbox' id='tech_use' name='tech_use' value=''><br><br>
        <input type='submit' value='Submit'>
	</form>
</div>
	
<?php

include 'include/foot.php';

?>