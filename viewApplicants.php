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
	<?php
		
		$db = mysqli_connect("localhost", "rza39", "1234", "bus465_project");
				if (!$db) { die("Connection failed: " . mysqli_connect_error()); }

		$sql = "SELECT applicantID, FirstName, LastName FROM application";
		$result = mysqli_query($db, $sql);
		
		
		echo "<table class = 'iniTable'>
		<tr>
		<th>Application ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		</tr>";

		while($row = mysqli_fetch_array($result)) {

			$id = $row['applicantID'];
			
			//echo $id; debug + test

			echo "<tr>";
			echo "<td><a href='applicantDetail.php?id=" . $id . "'>" . $row['applicantID'] .  "</td>";
			echo "<td><a href='applicantDetail.php?id=" . $id . "'>" . $row['FirstName'] . "</a> </td>";
			echo "<td><a href='applicantDetail.php?id=" . $id . "'>" . $row['LastName'] .  "</td>";
			echo "</tr>";
			//echo $id; debug + test
		}
			
		echo "</table>";
		

mysqli_close($db);
		
		
		
	?>
</body>

</html>