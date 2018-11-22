<?php
	session_start();
	extract($_POST);
	//$userdata = fopen("C:/xampp/htdocs/WT_PROJECT/Customer/With Formatting/final/user.txt","w");
	//$userid = fopen("C:/xampp/htdocs/WT_PROJECT/Customer/With Formatting/final/last_userid.txt","w");




	$userdata = fopen("../theMiscData/lastUserId.txt","r");
	$id = fread($userdata, 10);
	fclose($userdata);
	$num = substr($id,3,5)+1;
	$id = "LIS00".$num;
	$userdata = fopen("../theMiscData/lastUserId.txt","w");
	fwrite($userdata, $id);
	fclose($userdata);

	$query1 = "INSERT INTO users_db values ( '$id','$Name','$Email','password123');";
	$query2 = "INSERT INTO borrow_db values ( '$id','-','-','-','-','-','-');";
	
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"wt_project_db");
    mysqli_query($conn,$query1);
    mysqli_query($conn,$query2);
	
	fclose($userdata);
	header("Location:Lib-ADDMEM success.html");
?>