<?php

include 'include/head.php';
include_once 'mysql.php';
include 'include/navigation.php';

$qry = "SELECT * FROM parts";

$result = $mysqli->query($qry);


if ($result->num_rows > 0) {
    echo "<table>\n<tr><th>ITEM</th><th>STOCK</th><th>RESERVED</th><th></th></tr>\n";
    while($row = $result->fetch_assoc()) {
        if ($row['stock'] - $row['reserved'] >= 0) {
            echo "<tr><td id='itemcell'>" . $row['item'] . "</td><td id='numcell'>" . $row['stock'] . "</td><td id='numcell'>" . $row['reserved'] . "</td><td><a href='edit_part.php?id=" . $row['id'] . "' id='edit' >Edit</a></td></tr>\n";
        } else {
            echo "<tr style='background-color: #aa0000;'><td id='itemcell'>" . $row['item'] . "</td><td id='numcell'>" . $row['stock'] . "</td><td id='numcell'>" . $row['reserved'] . "</td><td><a href='edit_part.php?id=" . $row['id'] . "' id='edit' >Edit</a></td></tr>\n";
        }
    }
    echo "</table>\n";
} else {
    echo "Sorry, no results found.<br>\n";
}

echo "<a href='new_part.php' id='centerbutton'>Add New Part</a><br>\n";

include 'include/foot.php';
?>