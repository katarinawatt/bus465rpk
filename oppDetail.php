<!DOCTYPE html>

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
			
			$sql = "SELECT * FROM opportunity WHERE PostID = $id";
			$result = mysqli_query($db, $sql);
			
				
			/*echo "<table width=100% display: block >
			<tr>
			<th>Post ID</th>
			<th>Organization</th>
			<th>Position</th>
			<th>Location</th>
			<th>Deadline</th>
			<th>Description</th>
			</tr>";*/
			echo "<table>";
			while($row = mysqli_fetch_array($result)) {

			
					echo "<tr><th>Post ID</th>
					<td>" . $row['PostID'] .  "</td></tr>";
					echo "<tr><th>Organization</th>
					<td>" . $row['Organization'] . "</td></tr>";
					echo "<tr><th>Position</th>
					<td>" . $row['Position'] .  "</td></tr>";
					echo "<tr><th>Location</th>
					<td>" . $row['Location'] . "</td></tr>";
					echo "<tr><th>Deadline</th>
					<td>" . $row['Deadline'] . "</td></tr>";
					echo "<tr><th>Description</th>
					<td>" . $row['Description'] . "</td></tr>";
				
				//echo $id; debug + test
			}
			echo "</table>";
			
		?>
		
		<section class = "apply">
			<button type = "button"><a href = "../apply.html" target = "_blank">Apply</a></button>
		</section>
	</div>
	
</body>

</html>