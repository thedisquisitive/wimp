<?php
include_once("mysql.php");

$input = filter_input_array(INPUT_POST);

//error_log("INPUT: " . json_encode($input), 0);


if ($input['action'] == 'edit') {
	$update_field = 'id = ' . $input['id'];
	if (isset($input['manufacturer'])) {
		$update_field .= ", manufacturer='" . $input['manufacturer']."'";
	}
	if (isset($input['name'])) {
		$update_field .= ", name='" . $input['name']."'";
	}
	if (isset($input['stock'])) {
		$update_field .= ", stock='" . $input['stock']."'";
	}
	if (isset($input['reserved'])) {
		$update_field .= ", reserved='" . $input['reserved']."'";
	}
	if (isset($input['ordered'])) {
		$update_field .= ", ordered='" . $input['ordered']."'";
	}
	if (isset($input['tech_use'])) {
		$update_field .= ", tech_use='" . $input['tech_use']."'";
	}

//	error_log("UPDATE FIELD: " . json_encode($update_field), 0);


	if ($update_field && $input['id']) {
		$qry = "UPDATE parts SET $update_field WHERE id = '" . $input['id'] . "'";
//		error_log("QUERY: " . $qry);
		mysqli_query($mysqli, $qry) or die("Database error: ". mysqli_error($mysqli));
	}
}
?>
