<?php
	session_start();
	extract($_POST);

	$userdata = fopen("../theMiscData/newArrival.txt","w");
	fwrite($userdata, $Name.":".$Author.":".$uploadCover.":".$Description);

	$desc = str_replace("'", "\\'", $Description);

	$query = "INSERT INTO books_db values ( '$Series','$Name','$Author','$uploadCover','$desc');";
	
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"wt_project_db");
    mysqli_query($conn,$query);
	
	fclose($userdata);
	header("Location:Lib-ADDBOOK success.html");
?>