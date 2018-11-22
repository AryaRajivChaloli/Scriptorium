<?php
	if (isset($_COOKIE['customer']))
		setcookie("customer",$Id_req,time()-100);
	header("Location:Lib-RETBOR.php");
?>



