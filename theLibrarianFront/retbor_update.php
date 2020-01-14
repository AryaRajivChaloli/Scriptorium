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
	        <a class="current" href = 'Lib-RETBOR.php'>RETURN/BORROW</a>
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
					<h2 id = "idreq"></h2>
					<br><br>

					<datalist id="ids">
					</datalist>
						<h3>BORROW</h3>
						<form action='borr.php' method='POST' id='borr'> 
							<input name="ID" id = "id_req_ip" hidden>
						</form>
						<br><br><br><br>
						<h3>RETURN / RENEW</h3>
						<form action="return-renew.php" method="POST" id="returnRenew">
							<input name="ID" id = "id_req_ip" hidden>
							<table style="border-style: none;" id="retren">
								<tr>
									<th style="width:50%">Borrowed</th>
									<th>Return / Renew</th>
									<th>Due Date</th>
								</tr>
							</table>
						</form>
					<?php
						extract($_POST);
						if (isset($Id_req))
							setcookie("customer",$Id_req);
						else
							$Id_req = $_COOKIE["customer"];
						$query="SELECT title FROM books_db WHERE 1;";
						$conn = mysqli_connect("localhost","root","");
						mysqli_select_db($conn,"wt_project_db");
						$res = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_assoc($res)) {
							echo "
								<script>
									var dlEl = document.getElementById('ids');
									var optEl1 = document.createElement('option');
									dlEl.appendChild(optEl1);
									optEl1.textContent = '".$row['title']."';
								</script>
								";
						}
						echo "
							<script>
							var h = document.getElementById('idreq');
							var h1 = document.querySelectorAll('#id_req_ip');
							for (i = 0, len = h1.length; i < len; i++) { 
							    h1[i].setAttribute('value','".$Id_req."');
							}
							h.textContent = '".$Id_req."';
							</script>
							";
						$query = "SELECT * FROM borrow_db WHERE id = '".$Id_req."';";
						
					    $conn = mysqli_connect("localhost","root","");
					    mysqli_select_db($conn,"wt_project_db");
					    $res = mysqli_query($conn,$query);
						$borr_b = array();
						$borr_r = array();
						while ($row = mysqli_fetch_assoc($res)) {
								$books_borr = array($row['book1'], $row['book2'], $row['book3']);
								$ret_borr = array($row['ret1'], $row['ret2'], $row['ret3']);
							if ($row['book1']!='-') {
								echo "
									<script>
										var tab_retren = document.getElementById('retren');
										var trEl = document.createElement('tr');
										var td1El = document.createElement('td');
										var td2El = document.createElement('td');
										var td3El = document.createElement('td');
										tab_retren.appendChild(trEl);
										trEl.appendChild(td1El);
										trEl.appendChild(td2El);
										trEl.appendChild(td3El);
										td1El.textContent = '".$row['book1']."';
										td2El.innerHTML = '<label><input type=\'radio\' name=\'b1\' value=\'return\'> Return</label> &nbsp; &nbsp;<label><input type=\'radio\' name=\'b1\' value=\'renew\'> Renew</label>';
										td3El.textContent = '".$row['ret1']."';
									</script>
									";
								echo "
								<script>
									var borEl = document.getElementById('borr');
									var labEl = document.createElement('label');
									borEl.appendChild(labEl);
									labEl.setAttribute('hidden','1');
									labEl.innerHTML = '<br>SELECT BOOK: <input type=\'text\' name=\'B1\' list=\'ids\' placeholder=\'SELECT BOOK\' maxlength=\'200\' minlength=\'4\' hidden>';
								</script>
									";
							}
							else {
								echo "
								<script>
									var borEl = document.getElementById('borr');
									var labEl = document.createElement('label');
									borEl.appendChild(labEl);
									labEl.innerHTML = '<br>SELECT BOOK: <input type=\'text\' name=\'B1\' list=\'ids\' placeholder=\'SELECT BOOK\' maxlength=\'200\' minlength=\'4\'>';
								</script>
									";
							}
							if ($row['book2']!='-') {
								echo "
									<script>
										var tab_retren = document.getElementById('retren');
										var trEl = document.createElement('tr');
										var td1El = document.createElement('td');
										var td2El = document.createElement('td');
										var td3El = document.createElement('td');
										tab_retren.appendChild(trEl);
										trEl.appendChild(td1El);
										trEl.appendChild(td2El);
										trEl.appendChild(td3El);
										td1El.textContent = '".$row['book2']."';
										td2El.innerHTML = '<label><input type=\'radio\' name=\'b2\'  value=\'return\'> Return</label> &nbsp; &nbsp; <label><input type=\'radio\' name=\'b2\'  value=\'renew\'> Renew</label>';
										td3El.textContent = '".$row['ret2']."';
									</script>
									";
								echo "
								<script>
									var borEl = document.getElementById('borr');
									var labEl = document.createElement('label');
									borEl.appendChild(labEl);
									labEl.setAttribute('hidden','1');
									labEl.innerHTML = '<br>SELECT BOOK: <input type=\'text\' name=\'B2\' list=\'ids\' placeholder=\'SELECT BOOK\' maxlength=\'200\' minlength=\'4\' hidden>';
								</script>
									";
							}
							else {
								echo "
								<script>
									var borEl = document.getElementById('borr');
									var labEl = document.createElement('label');
									borEl.appendChild(labEl);
									labEl.innerHTML = '<br>SELECT BOOK: <input type=\'text\' name=\'B2\' list=\'ids\' placeholder=\'SELECT BOOK\' maxlength=\'200\' minlength=\'4\'>';
								</script>
									";
							}
							if ($row['book3']!='-') {
								echo "
									<script>
										var tab_retren = document.getElementById('retren');
										var trEl = document.createElement('tr');
										var td1El = document.createElement('td');
										var td2El = document.createElement('td');
										var td3El = document.createElement('td');
										tab_retren.appendChild(trEl);
										trEl.appendChild(td1El);
										trEl.appendChild(td2El);
										trEl.appendChild(td3El);
										td1El.textContent = '".$row['book3']."';
										td2El.innerHTML = '<label><input type=\'radio\' name=\'b3\' value=\'return\'> Return</label> &nbsp; &nbsp;<label><input type=\'radio\' name=\'b3\' value=\'renew\'> Renew</label>';
										td3El.textContent = '".$row['ret3']."';
									</script>
									";
								echo "
								<script>
									var borEl = document.getElementById('borr');
									var labEl = document.createElement('label');
									borEl.appendChild(labEl);
									labEl.setAttribute('hidden','1');
									labEl.innerHTML = '<br>SELECT BOOK: <input type=\'text\' name=\'B3\' list=\'ids\' placeholder=\'SELECT BOOK\' maxlength=\'200\' minlength=\'4\' hidden>';
								</script>
									";
							}
							else {
								echo "
								<script>
									var borEl = document.getElementById('borr');
									var labEl = document.createElement('label');
									borEl.appendChild(labEl);
									labEl.innerHTML = '<br>SELECT BOOK: <input type=\'text\' name=\'B3\' list=\'ids\' placeholder=\'SELECT BOOK\' maxlength=\'200\' minlength=\'4\'>';
								</script>
									";
							}

						}
					?>
					<script>
						var f1 = document.getElementById('returnRenew');
						var f2 = document.getElementById('borr');
						var b1 = document.createElement('button');
						b1.setAttribute('type','submit');
						b1.setAttribute('style','width:20%; float:right;');
						b1.textContent = 'RETURN / RENEW';
						f1.appendChild(b1);
						var b2 = document.createElement('button');
						b2.setAttribute('type','submit');
						b2.setAttribute('style','width:20%; float:right;');
						b2.textContent = 'BORROW';
						f2.appendChild(b2);
					</script>
					<br><br><br><br><br>
					<a href="doneRETBOR.php"><button type="submit">DONE</button></a>
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