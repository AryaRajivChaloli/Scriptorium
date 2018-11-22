<!DOCTYPE html>
<html>
	<head>
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="../theStyle/theStyle.css">
	</head>
	<body>

<!--------------------------------------------TITLE--------------------------------------------->
	    <div class="TITLE" id="TheTitle" >
			<div class="TITLE_text">SCRIPTORIUM</div>
	    </div>

<!------------------------------------------MAIN MENU------------------------------------------->
	    <div class="mainMenu">
	        <a class="current" href = "newHomePage.php #TheTitle">HOME</a>
	        <a href = 'newAbout.html'>ABOUT</a>
	        <a href = 'newPlans.html'>PLANS</a>
	        <a href = 'newSearch.php'>CATALOGUE</a>
	        <div class="locRight">
				<a href = 'newRegister.html'>NEW USER</a>
				<a onclick="document.getElementById('login').style.display='block'">LOGIN</a>
	        </div>
		</div>

<!--------------------------------------------LOGIN--------------------------------------------->
		<div id="login" class="login">
			<form class="login-form animate" method="POST" action="login.php">
				<div class="login-form-data" style="background-color:#f1f1f1">
					<h1>LOGIN</h1>
				</div>
				<div class="login-form-data">
					<label><b>UserID / Email : </b><input type="text" name="Id" required autofocus placeholder="Enter email-id"></label>
					<br><br>
					<label><b>Password : </b><input type="password" name="Pwd" required placeholder="Enter Password"></label>
					<br><br>
					<button type="submit">LOGIN</button>
				</div>
				<div class="login-form-data" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelBtn">CANCEL</button>
					<a href="newRegister.html"><button type="button" class="newUserBtn">NEW USER</button></a>
				</div>
			</form>
		</div>

<!----------------------------------------CONTENT--------------------------------------------->
		<div class="row">
			<div class="side">
				<h2>NEW ARRIVAL</h2>
				<?php
					$file = fopen("../theMiscData/newArrival.txt","r");
					if (filesize("../theMiscData/newArrival.txt")!=0) {
						$data = fread($file,filesize("../theMiscData/newArrival.txt"));
						$data = explode(":", $data);
						$title = $data[0];
						$auth = $data[1];
						$img = $data[2];
						$desc = str_replace("\n", "<br>", $data[3]);
						echo "<h5>$title, $auth </h5>
						<div><img class='imagesOnPage' src = '".$img."'></div>
						<p>$desc </p>";
					}
				?>
			</div>
			<div class="main">
				<h2>UPCOMING EVENTS AT THE SCRIPTORIUM</h2>
				<br><br>
				<div class="imagesOnPage" style="height:200px; background-image: url('../theImages/theWebpageImages/Event1.jpg');"></div>
				<h4>Photography workshop, Dec 23, 2018</h4>
				<p>This art, this madness, this compulsion to convey a story we know as photojournalism will not die, storytelling will not die, it will change and evolve but it is human nature to want to learn, to be educated and to understand our world through narratives. <br><i>- Aidan Sullivan, CEO and Founder, Verbatim</i><br><br>
				Join the Photography workshop to be held at the Scriptorium on the 23<sup>rd</sup> of December 2018.</p>
				<br><br>
				<div class="imagesOnPage" style="height:200px; background-image: url('../theImages/theWebpageImages/Event2.jpg');"></div>
				<h4>Book Talk, Jan 19, 2019</h4>
				<p>The story is truly finished, and meaning is made, not when the author adds the last period, but when the reader enters. <br><i>- Celeste Ng, Author</i><br><br>
				Join the Book Talk to be held at the Scriptorium on the 19<sup>th</sup> of January 2019.</p>
				<br>
			</div>
		</div>

<!--------------------------------------------FOOTER--------------------------------------------->
		<div class="footer">
			<h4>SCRIPTIORIUM LIBRARY, BANGALORE</h4>
			Email : info@scriptorium.com &nbsp; &nbsp; &nbsp; Phone : +91 9113984792<br>
		</div>

	</body>
</html>