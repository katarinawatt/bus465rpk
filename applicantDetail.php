<!DOCTYPE html>

<head>

<head>

	<title>Opportunity</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/volunteer.css">
	<link rel="stylesheet" href="css/opportunity.css">
	<script src = "js/apply.js"></script>
</head>

<body>

	<nav class = "menu">
		<ul>
			<li><a href = "#home">Home</a></li>
			<li><a class = "active" href = "volunteer.html">Opportunities</a></li>
			<li><a href = "#contact">Contact Us</a></li>
			<li><a href = "#about">About Us</a></li>
		</ul>
	</nav>
	
	<div class = "volunteerInfo">
		<button onclick = "goBack()">Back</button>
		
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