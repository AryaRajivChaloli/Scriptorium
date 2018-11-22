<?php

$date=date_create(date("Y-m-d"));
	date_add($date,date_interval_create_from_date_string("14 days"));
	extract($_POST);

	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"wt_project_db");
	if ($B1) {
		$query = "UPDATE borrow_db SET book1= '".$B1."', ret1='".date_format($date,"Y-m-d")."' WHERE id='".$ID."';";
		mysqli_query($conn,$query);
	}
	if ($B2) {
		$query = "UPDATE borrow_db SET book2= '".$B2."', ret2='".date_format($date,"Y-m-d")."' WHERE id='".$ID."';";
		mysqli_query($conn,$query);
	}
	if ($B3) {
		$query = "UPDATE borrow_db SET book3= '".$B3."', ret3='".date_format($date,"Y-m-d")."' WHERE id='".$ID."';";
		mysqli_query($conn,$query);
	}
	header("Location:retbor_update.php");
?>