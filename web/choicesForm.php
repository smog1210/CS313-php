<?php
    include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Night Saver</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="project.css">

	<script>
		function submitChoices() {

			/* Get the text field */
			var name = document.getElementById("name");
			var one = document.getElementById("one");
			var two = document.getElementById("two");
			var three = document.getElementById("three");
			var least = document.getElementById("least");

			// show snackbar alert that the choices have been sent
			var x = document.getElementById("snackbar");
			x.className = "show";
			setTimeout(function () { x.className = x.className.replace("show", ""); }, 2000);

			nav();
		}

		function nav() {
            // wait two seconde then navigate to new page
            setTimeout(function () { window.location.assign("choicesForm.php"); }, 1000);
        }

	</script>

</head>

<body>
	<!-- Nav Bar -->
	<div class="topnav">
		<a href="projectHome.html">Home</a>
	</div>

	<div class="page">
		<div class="main">
			<h1 style="text-align: center;">Night Saver</h1>
			<div class="flexContainer">
				<form class="infoBox">
					<input type="text" id="name" placeholder="Name"><br>
					<input type="text" id="one" placeholder="First Choice"><br>
					<input type="text" id="two" placeholder="Second Choice"><br>
					<input type="text" id="three" placeholder="Third Choice"><br>
					<input type="text" id="least" placeholder="Least Favorite">
					<br>
					<input type="submit" onclick="submitChoices()">
					
                    <div class="snackbar" id="snackbar">Choices have been submitted</div>
				</form>
			</div>
		</div>

		<footer class="footer">
			Page Designed By: Cody Hatch
		</footer>
	</div>
</body>

</html>