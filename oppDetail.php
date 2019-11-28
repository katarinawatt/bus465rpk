<!DOCTYPE html>
<htm>

<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Application</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="volunteer.css">
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