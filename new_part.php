<?php

include 'include/head.php';
include_once 'mysql.php';


echo "\n<div class='form'><form id='editform' action='/wimp/submit_new.php' method='post'>
        <label for='iname'>Item Name:</label><br>
        <input type='text' id='iname' name='iname' value=''><br>
        <label for='stock'>In Stock:</label><br>
        <input type='text' id='stock' name='stock' value=''><br>
        <label for='reserved'>Reserved:</label></br>
        <input type='text' id='reserved' name='reserved' value=''<br><br>
        <input type='submit' value='Submit'>
     </form></div> ";

include 'include/foot.php';

?>