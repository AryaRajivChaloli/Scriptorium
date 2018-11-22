<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="../theStyle/theStyle.css">
	</head>
	<body>

<!--------------------------------------------TITLE--------------------------------------------->
	    <div class="TITLE" id="TheTitle" >
			<div class="TITLE_text">SCRIPTORIUM</div>
	    </div>

<!------------------------------------------MAIN MENU------------------------------------------->
	    <div class="mainMenu">
	        <a class="current" href = "Lib-HOME.php #TheTitle">HOME</a>
	        <a href = 'Lib-ADDMEM.html'>ADD MEMBER</a>
	        <a href = 'Lib-RETBOR.php'>RETURN/BORROW</a>
	        <a href = 'Lib-ADDBOOK.html'>ADD BOOK</a>
	        <a href = 'Lib-SEARCH.php'>SEARCH</a>
	        <div class="locRight">
				<a id="dashboard" style="color: blue;border-bottom: 3px solid transparent;">NAME's DASHBOARD</a>
				<a onclick="document.getElementById('login').style.display='block'">LOGOUT</a>
			</div>
		</div>
		<script>
			function getCookie(cname) {
				var name = cname + "=";
				var ca = document.cookie.split(';');
				for(var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
						return c.substring(name.length, c.length);
					}
				}
				return "";
			}
			function convName(uname) {
				var name = ""
				for (var i = 0; i < uname.length; i++) {
					if (uname[i]=='+') {
						name = name+' ';
					}
					else {
						name = name+uname[i];
					}
				}
				return name;
			}
			dash = document.getElementById('dashboard');
			name = convName(getCookie("user_name").toUpperCase());
			dash.textContent = "ADMIN : "+name;
		</script>

<!--------------------------------------------LOGOUT--------------------------------------------->
		<div id="login" class="login">
			<form class="login-form animate" method="POST" action="login.php" style="width: 40%">
				<div class="login-form-data" style="background-color:#f1f1f1;text-align: center">
					<h1>LOGOUT ?</h1>
				</div>
				<br><br>
				<p style="text-align: center">" Are you sure, you want to log out ? "<br><br></p>
				<br><br>
				<div class="login-form-data" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelBtn" >CANCEL</button>
					<a href="logout.php"><button type="button" class="newUserBtn">LOGOUT</button></a>
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
		<a href="LOGIN PAGE.php" id='forceQuit' style="display: none;">ForceQuit</a>
		<script>
			name = convName(getCookie("user_name").toUpperCase());
			if (!name) {
				document.getElementById("forceQuit").click();
			}
		</script>
	</body>
</html>