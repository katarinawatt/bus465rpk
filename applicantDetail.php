<!DOCTYPE html>

<head>

<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Application</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="volunteer.css">
	<link rel="stylesheet" href="oppostyle.css">
	<script src = "js/apply.js"></script>
</head>

<body>

<nav>
					<div class="logo">
						<h1>Project One Foundation</h1>
					</div>
					<ul class="menu">
						<li><a href="homepage.html">Home</a></li>
						<li><a href="oppopage.html">Browse opportunities</a></li>
						<li><a href="aboutpage.html">About us</a></li>
						<li><a href="contactpage.html">Contact us</a></li>
						<li><a href="donatepage.html">Donations</a></li>
						<li><a href="login.html">Log In</a></li>
					</ul>
		</nav>
	
	<div class = "volunteerInfo">
		<button onclick = "history.go(-1)">Back</button>
		
		<?php
		
			$db = mysqli_connect("localhost", "rza39", "1234", "bus465_project");
				if (!$db) { die("Connection failed: " . mysqli_connect_error()); }
			
			//get selected id as the input and select the particular id from the sql table database
			$id = $_GET['id'];
			//echo $id; debug + test
			
			$sql = "SELECT * FROM application WHERE applicantID = $id";
			$result = mysqli_query($db, $sql);
			
			echo "<table>";
			while($row = mysqli_fetch_array($result)) {

			
					echo "<tr><th>Application ID</th>
					<td>" . $row['applicantID'] .  "</td></tr>";
					echo "<tr><th>First Name</th>
					<td>" . $row['FirstName'] . "</td></tr>";
					echo "<tr><th>Last Name</th>
					<td>" . $row['LastName'] .  "</td></tr>";
					echo "<tr><th>Description</th>
					<td>" . $row['Description'] . "</td></tr>";
					echo "<tr><th>Deadline</th>
					<td>" . $row['Resume'] . "</td></tr>";
				
				//echo $id; debug + test
			}
			echo "</table>";
			
		?>
		
		<!--<section class = "apply">
			<button type = "button"><a href="mailto:webmaster@example.com">Email</a></button>
		</section>-->
	</div>
	
</body>

</html>