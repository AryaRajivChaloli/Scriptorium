<?php
	session_start();
	extract($_POST);
	


	$userdata = fopen("../theMiscData/lastUserId.txt","r");
	$id = fread($userdata, 10);
	fclose($userdata);
	$num = substr($id,3,5)+1;
	$id = "LIS00".$num;
	$userdata = fopen("../theMiscData/lastUserId.txt","w");
	fwrite($userdata, $id);
	fclose($userdata);


	// store required details
	$uid = $id;
	$uname = $Name;
	$uemail = $Email;

	// storing data

	$query1 = "INSERT INTO users_db values ( '$id','$Name','$Email','$Pwd');";
	$query2 = "INSERT INTO borrow_db values ( '$id','-','-','-','-','-','-');";
	
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"wt_project_db");
    mysqli_query($conn,$query1);
    mysqli_query($conn,$query2);
	


	// sending back the id etc
	setcookie("user_id",$uid);
	setcookie("user_name",$uname);
	setcookie("user_email",$uemail);
	$_SESSION["Id"] = $id;
	
	if (isset($_SESSION["last_activity"]) && (time()- $_SESSION["last_activity"])>1000) {
		setcookie("user_id", "", time() - 3600);
		setcookie("user_name", "", time() - 3600);
		setcookie("user_email", "", time() - 3600);
        session_destroy();
        header("Location:outTooLong.html");
	}
	else{
		$_SESSION["last_activity"] = time();
		header("Location:postRegn.html");
	}
?>
