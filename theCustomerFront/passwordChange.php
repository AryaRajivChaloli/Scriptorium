<?php
    session_start();
    if (isset($_SESSION["Id"]))
    {
		if (isset($_SESSION["last_activity"]) && (time()- $_SESSION["last_activity"])>1000) {
			setcookie("user_id", "", time() - 3600);
			setcookie("user_name", "", time() - 3600);
			setcookie("user_email", "", time() - 3600);
	        session_destroy();
	        header("Location:outTooLong.html");
		}
		else {
			$_SESSION["last_activity"] = time();



	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"wt_project_db");
	extract($_POST);

	$query = "SELECT pwd from users_db WHERE id = '".$_POST['ID']."';";
	$res = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($res);

	if ($pwd == $row['pwd']) {

		$query = "UPDATE users_db SET pwd='".$npwd."' WHERE id='".$_POST['ID']."';";
				mysqli_query($conn,$query);

				header("Location:success_pwd.html");

			}



else{

			header("Location:fail_pwd.html");
		}
		}
	}
?>