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
	        <a href = "newHomePage.php #TheTitle">HOME</a>
	        <a href = 'newAbout.html'>ABOUT</a>
	        <a href = 'newPlans.html'>PLANS</a>
	        <a class="current" href = 'newSearch.html'>CATALOGUE</a>
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
				
				<div class="tab">
				  <button class="tablinks" onclick="openSeries(event, 'OTTOLINE')" id="defaultOpen">OTTOLINE</button>
				  <button class="tablinks" onclick="openSeries(event, 'HARRY POTTER')">HARRY POTTER</button>
				  <button class="tablinks" onclick="openSeries(event, 'SEPTIMUS HEAP')">SEPTIMUS HEAP</button>
				</div>

			</div>
			<div class="main">
				<div id="OTTOLINE" class="tabcontent">
					<h2>THE OTTOLINE SERIES</h2>
					<div>
						<img src="../theImages/theBookImages/ottoline/Ottoline.jpg" class="imagesOnPage">
						<blockquote><i>" Quintessentially quirky... no-one both writes and illustrates books quite like Chris Riddell. Described as a 'small girl who has big adventures', Ottoline is a series which has big appeal. "</i></blockquote>
					</div>
				</div>

				<?php
					$query="Select * from books_db where Series = 'OTT';";
					$conn = mysqli_connect("localhost","root","");
				    mysqli_select_db($conn,"wt_project_db");
				    $res = mysqli_query($conn,$query);

			    	while ($row = mysqli_fetch_assoc($res)) {
			    				$l = $row['description'];
			    		echo "
			    			<script>

			    				var otoEl = document.getElementById('OTTOLINE');
								var bntEl = document.createElement('button');
			    				otoEl.appendChild(bntEl);
			    				bntEl.setAttribute('class', 'accordion');
			    				bntEl.textContent = '".$row['title']."';


			    				var panelEl =  document.createElement('div');
			    				otoEl.appendChild(panelEl);
			    				panelEl.setAttribute('class', 'panel');

			    				var rowEl =  document.createElement('div');
			    				panelEl.appendChild(rowEl);
			    				rowEl.setAttribute('class', 'row');

			    				var sideEl =  document.createElement('div');
			    				rowEl.appendChild(sideEl);
			    				sideEl.setAttribute('class', 'side');

			    				var imgEl =  document.createElement('img');
			    				sideEl.appendChild(imgEl);
			    				imgEl.setAttribute('class', 'imagesOnPage');
			    				imgEl.setAttribute('src', '".$row['cover']."');

			    				var mainEl =  document.createElement('div');
			    				rowEl.appendChild(mainEl);
			    				mainEl.setAttribute('class', 'main');

			    				var parEl =  document.createElement('p');
			    				mainEl.appendChild(parEl);
			    				parEl.textContent = '$l';

			    			</script>
							";
			    	}
				?>

				

				<div id="HARRY POTTER" class="tabcontent">
					<h2>THE HARRY POTTER SERIES</h2>
					<div>
						<img src="../theImages/theBookImages/HP/hp.jpg" class="imagesOnPage">
						<blockquote><i>'He’ll be famous – a legend – I wouldn’t be surprised if today was known as Harry Potter Day in future – there will be books written about Harry – every child in our world will know his name!' (From Harry Potter and the Philosopher's Stone).<br>
It starts with Dumbledore, Professor McGonagall and Rubeus Hagrid leaving a baby boy, with a tuft of jet-black hair and a curiously shaped wound on his brow, on the doorstep of number four, Privet Drive. They might have thought that his aunt and uncle would look after him kindly. But ten years later, Harry Potter sleeps in a cupboard under the stairs, and the Dursleys – Vernon, Petunia and their son Dudley – don’t exactly treat him like one of the family. Especially as it becomes clear quite how different from them he is. <br>
As his eleventh birthday arrives, the time comes for Harry Potter to discover the truth about his magical beginnings – and embark on the enthralling, unmissable adventure that will lead him to Hogwarts School of Witchcraft and Wizardry, his true friends Ron Weasley and Hermione Granger, powerful secrets and a destiny he cannot avoid ...</i></blockquote>
					</div>
				</div>

				<?php
					$query="Select * from books_db where Series = 'HP' ";
					$conn = mysqli_connect("localhost","root","");
				    mysqli_select_db($conn,"wt_project_db");
				    $res = mysqli_query($conn,$query);
			    	while ($row = mysqli_fetch_assoc($res)) {
			    				$l = $row['description'];
			    		echo "
			    			<script>

			    				var otoEl = document.getElementById('HARRY POTTER');
								var bntEl = document.createElement('button');
			    				otoEl.appendChild(bntEl);
			    				bntEl.setAttribute('class', 'accordion');
			    				bntEl.textContent = '".$row['title']."';


			    				var panelEl =  document.createElement('div');
			    				otoEl.appendChild(panelEl);
			    				panelEl.setAttribute('class', 'panel');

			    				var rowEl =  document.createElement('div');
			    				panelEl.appendChild(rowEl);
			    				rowEl.setAttribute('class', 'row');

			    				var sideEl =  document.createElement('div');
			    				rowEl.appendChild(sideEl);
			    				sideEl.setAttribute('class', 'side');

			    				var imgEl =  document.createElement('img');
			    				sideEl.appendChild(imgEl);
			    				imgEl.setAttribute('class', 'imagesOnPage');
			    				imgEl.setAttribute('src', '".$row['cover']."');

			    				var mainEl =  document.createElement('div');
			    				rowEl.appendChild(mainEl);
			    				mainEl.setAttribute('class', 'main');

			    				var parEl =  document.createElement('p');
			    				mainEl.appendChild(parEl);
			    				parEl.textContent = '$l';

			    			</script>
							";
			    	}
				?>


				

				<div id="SEPTIMUS HEAP" class="tabcontent">
					<h2>THE SEPTIMUS HEAP SERIES</h2>
					<div>
						<img src="../theImages/theBookImages/SH/sh.jpg" class="imagesOnPage">
						<blockquote><i>Septimus Heap is a series of fantasy novels featuring a protagonist of the same name written by English author Angie Sage. In all, it features seven novels, entitled Magyk, Flyte, Physik, Queste, Syren, Darke and Fyre, the first (Magyk) in 2005 and the final (Fyre) in 2013.<br> A full colour supplement to the series, entitled The Magykal Papers, was published in June 2009, and an online novella titled The Darke Toad is also available. A sequel trilogy, The TodHunter Moon Series, set seven years after the events of Fyre, began in October 2014.<br>
The series follows the adventures of Septimus Heap who, as a seventh son of a seventh son, has extraordinary magical powers. After he becomes an apprentice to the ("ExtraOrdinary") wizard of the series, Marcia Overstrand, he must study for seven years and a day until his apprenticeship ends. In the first book, he is known as Young Army Expendable Boy 412, until his great-aunt, Zelda Zanuba Heap reveals his true identity. His adventures are placed in the context of the warmth and strength of his family, and developed alongside those of Jenna, his adoptive sister, who is heir to the throne of the Castle, the community where they live. The novels, set in an elaborate fantastic world, describe the many challenges that Septimus and his friends must overcome.</i></blockquote>
					</div>
				</div>

				<?php
					$query="Select * from books_db where Series = 'SH' ";
					$conn = mysqli_connect("localhost","root","");
				    mysqli_select_db($conn,"wt_project_db");
				    $res = mysqli_query($conn,$query);

			    	while ($row = mysqli_fetch_assoc($res)) {
			    				$l = $row['description'];
			    		echo "
			    			<script>

			    				var otoEl = document.getElementById('SEPTIMUS HEAP');
								var bntEl = document.createElement('button');
			    				otoEl.appendChild(bntEl);
			    				bntEl.setAttribute('class', 'accordion');
			    				bntEl.textContent = '".$row['title']."';


			    				var panelEl =  document.createElement('div');
			    				otoEl.appendChild(panelEl);
			    				panelEl.setAttribute('class', 'panel');

			    				var rowEl =  document.createElement('div');
			    				panelEl.appendChild(rowEl);
			    				rowEl.setAttribute('class', 'row');

			    				var sideEl =  document.createElement('div');
			    				rowEl.appendChild(sideEl);
			    				sideEl.setAttribute('class', 'side');

			    				var imgEl =  document.createElement('img');
			    				sideEl.appendChild(imgEl);
			    				imgEl.setAttribute('class', 'imagesOnPage');
			    				imgEl.setAttribute('src', '".$row['cover']."');

			    				var mainEl =  document.createElement('div');
			    				rowEl.appendChild(mainEl);
			    				mainEl.setAttribute('class', 'main');

			    				var parEl =  document.createElement('p');
			    				mainEl.appendChild(parEl);
			    				parEl.textContent = '$l';

			    			</script>
							";
			    	}
				?>






			</div>
		</div>








<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>


<script>
function openSeries(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<!--------------------------------------------FOOTER--------------------------------------------->
		<div class="footer">
			<h4>SCRIPTIORIUM LIBRARY, BANGALORE</h4>
			Email : info@scriptorium.com &nbsp; &nbsp; &nbsp; Phone : +91 9113984792<br>
		</div>

	</body>
</html>