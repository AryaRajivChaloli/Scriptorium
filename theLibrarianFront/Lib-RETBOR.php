<!DOCTYPE html>
<html>
	<head>
		<title>AddMem</title>
		<link rel="stylesheet" type="text/css" href="../theStyle/theStyle.css">
	</head>
	<body>

<!--------------------------------------------TITLE--------------------------------------------->
	    <div class="TITLE" id="TheTitle" >
			<div class="TITLE_text">SCRIPTORIUM</div>
	    </div>

<!------------------------------------------MAIN MENU------------------------------------------->
	    <div class="mainMenu">
	        <a href = "Lib-HOME.php #TheTitle">HOME</a>
	        <a href = 'Lib-ADDMEM.html'>ADD MEMBER</a>
	        <a class="current" href = 'Lib-RETBOR.html'>RETURN/BORROW</a>
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
				<h2>WELCOME</h2>
				<h5>SCRIPTIORIUM LIBRARY, BANGALORE</h5>
				<div class="imagesOnPage" style="height:510px;background-image: url('../theImages/theWebpageImages/About3.jpg');"></div>
				<p >With the enormous and steady increase in the volume of our literature, we must rely more and more upon sympathetic selection, judicious editing, and the indexer who knows where to exercise discretion. Any simpleton can write a book, but it requires high skill to make an index. <br><i>- Rossiter Johnson, Author</i>
				</p>
			</div>

			<div class="main">
				<h2>BORROW - RENEW - RETURN</h2>
				<br><br>
				<br><br>
				<form method="POST" action="retbor_update.php">
					<label>UserId: <br><br><input type="text" name="Id_req" list="ids" placeholder="Enter UserId" autofocus required maxlength="30" minlength="4"></label>
					<br><br><br>
					<datalist id="ids">
					</datalist>
					<?php
						$query="SELECT id,email FROM `users_db` WHERE 1;";
						$conn = mysqli_connect("localhost","root","");
						mysqli_select_db($conn,"wt_project_db");
						$res = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_assoc($res)) {
							echo "
								<script>
									var dlEl = document.getElementById('ids');
									var optEl1 = document.createElement('option');
									dlEl.appendChild(optEl1);
									optEl1.textContent = '".$row['id']."';
								</script>
								";
						}
					?>
					<button type="submit">PROCEED</button>
				</form>
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