<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="jquery.tabledit.js"></script>
<script src="custom_table_edit.js"></script>

<?php

include 'include/head.php';
include_once 'mysql.php';
include 'include/navigation.php';

$sortby = 'category';

if (isset($_GET['sort'])) {
    $sortby = $_GET['sort'];
}

$qry = "SELECT * FROM parts WHERE tech_use = 1 ORDER BY " . $sortby;

$result = $mysqli->query($qry);


if ($result->num_rows > 0) {
?>

<table id="data_table" class="table table-striped">
<thead>
<tr>
<th><a href="tmpinventory.php?sort=id">ID</a></th>
<th><a href="tmpinventory.php?sort=manufacturer">MANUFACTURER</a></th>
<th><a href="tmpinventory.php?sort=name">ITEM</a></th>
<th><a href="tmpinventory.php?sort=stock">STOCK</a></th>
<th><a href="tmpinventory.php?sort=reserved">RESERVED</a></th>
<th><a href="tmpinventory.php?sort=ordered">ORDERED</a></th>
<th><a href="tmpinventory.php?sort=tech_use">SHOP USE</a></th>
</tr>
</thead>
<tbody>
<?php
while ($data = $result->fetch_assoc()) {
$current = $data['stock'] - $data['reserved'];
$withordered = $current + $data['ordered'];

?>
<tr id=<?php echo "'" . $data['id'] . "'"; 
if ($current < 0) {
	if ($withordered < 0) {
		echo " style='background-color: #aa0000;'";
	} else if ($withordered >= 0) {
		echo " style='background-color: #003300;'";
	}
}
?>>
<td><?php echo $data['id'];?></td>
<td><?php echo $data['manufacturer'];?></td>
<td><?php echo $data['name'];?></td>
<td id="numcell"><?php echo $data['stock'];?></td>
<td id="numcell"><?php echo $data['reserved'];?></td>
<td id="numcell"><?php echo $data['ordered'];?></td>
<td id="numcell"><?php echo $data['tech_use'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php
} else {
	echo "Sorry, no results found. Do parts exist?<br><br>\n\n";
}

echo "<a href='new_part.php' id='centerbutton'>Add New Part</a><br>\n";

include 'include/foot.php';
?>
