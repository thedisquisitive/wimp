<?php

include 'include/head.php';
include_once 'mysql.php';
include 'include/navigation.php';

$sortby = 'category';

if (isset($_GET['sort'])) {
    $sortby = $_GET['sort'];
}

$qry = "SELECT * FROM parts WHERE tech_use = true ORDER BY " . $sortby;

$result = $mysqli->query($qry);


if ($result->num_rows > 0) {
    echo "<table>\n<tr><th><a href='shopinventory.php?sort=category'>CATEGORY</a></th><th><a href='shopinventory.php?sort=manufacturer'>ITEM</a></th><th><a href='shopinventory.php?sort=stock'>STOCK</a></th><th><a href='shopinventory.php?sort=reserved'>RESERVED</a></th><th><a href='shopinventory.php?sort=ordered'>ORDERED</a></th><th></th></tr>\n";
    while($row = $result->fetch_assoc()) {
        if ($row['stock'] - $row['reserved'] >= 0) {
            echo "<tr><td id='itemcell'>" . $row['category'] . "</td><td id='itemcell'>" . $row['manufacturer'] . " " . $row['name'] . "</td><td id='numcell'>" . $row['stock'] . "</td><td id='numcell'>" . $row['reserved'] . "</td><td>" . $row['ordered'] . "</td><td><a href='edit_part.php?id=" . $row['id'] . "' id='edit' >Edit</a></td></tr>\n";
        } else {
	    if (($row['stock'] - $row['reserved'] + $row['ordered']) < 0) {
              echo "<tr style='background-color: #aa0000;'><td id='itemcell'>" . $row['category'] . "</td><td id='itemcell'>" . $row['manufacturer'] . " " . $row['name'] . "</td><td id='numcell'>" . $row['stock'] . "</td><td id='numcell'>" . $row['reserved'] . "</td><td>" . $row['ordered'] . "</td><td><a href='edit_part.php?id=" . $row['id'] . "' id='edit' >Edit</a></td></tr>\n";
            } else {
              echo "<tr style='background-color: #004488;'><td id='itemcell'>" . $row['category'] . "</td><td id='itemcell'>" . $row['manufacturer'] . " " . $row['name'] . "</td><td id='numcell'>" . $row['stock'] . "</td><td id='numcell'>" . $row['reserved'] . "</td><td>" . $row['ordered'] . "</td><td><a href='edit_part.php?id=" . $row['id'] . "' id='edit' >Edit</a></td></tr>\n";
            }
        }
    }
    echo "</table>\n";
} else {
    echo "Sorry, no results found.<br>\n";
}

echo "<a href='new_part.php' id='centerbutton'>Add New Part</a><br>\n";

include 'include/foot.php';
?>
