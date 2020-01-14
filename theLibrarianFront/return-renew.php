<?php

	$date=date_create(date("Y-m-d"));
	date_add($date,date_interval_create_from_date_string("7 days"));

	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"wt_project_db");

	foreach ($_POST as $key => $value) {
		if ($key=='b3') {
			if ($value=='renew') {
				$query = "UPDATE borrow_db SET ret3='".date_format($date,"Y-m-d")."' WHERE id='".$_POST['ID']."';";
				mysqli_query($conn,$query);
			}
			if ($value=='return') {
				$query = "UPDATE borrow_db SET book3= '-', ret3='-' WHERE id='".$_POST['ID']."';";
				mysqli_query($conn,$query);
			}
		}
		if ($key=='b2') {
			if ($value=='renew') {
				$query = "UPDATE borrow_db SET ret2='".date_format($date,"Y-m-d")."' WHERE id='".$_POST['ID']."';";
				mysqli_query($conn,$query);
			}
			if ($value=='return') {
				$query = "UPDATE borrow_db SET book2= '-', ret2='-' WHERE id='".$_POST['ID']."';";
				mysqli_query($conn,$query);
			}
		}
		if ($key=='b1') {
			if ($value=='renew') {
				$query = "UPDATE borrow_db SET ret1='".date_format($date,"Y-m-d")."' WHERE id='".$_POST['ID']."';";
				mysqli_query($conn,$query);
			}
			if ($value=='return') {
				$query = "UPDATE borrow_db SET book1= '-', ret1='-' WHERE id='".$_POST['ID']."';";
				mysqli_query($conn,$query);
			}
		}
	}
	header("Location:retbor_update.php");
?>



