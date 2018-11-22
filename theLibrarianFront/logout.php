<?php
    session_start();
    if (isset($_SESSION["Id"]))
    {
		setcookie("user_id", "", time() - 3600);
		setcookie("user_name", "", time() - 3600);
		setcookie("user_email", "", time() - 3600);
        session_destroy();
    }
    header("Location:LOGIN PAGE.php");
?>