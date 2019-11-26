<!DOCTYPE html>
<htm>

<head>

	<title>Application</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/volunteer.css">
	<script src = "js/apply.js"></script>

</head>

<body>

	<nav class = "menu">
		<ul>
			<li><a href = "#home">Home</a></li>
			<li><a class = "active" href = "php/opportunity.php">Opportunities</a></li>
			<li><a href = "#contact">Contact Us</a></li>
			<li><a href = "#about">About Us</a></li>
		</ul>
	</nav>
	
	<?php
		
		$db = mysqli_connect("localhost", "rza39", "1234", "bus465_project");
				if (!$db) { die("Connection failed: " . mysqli_connect_error()); }

		$sql = "SELECT applicantID, FirstName, LastName FROM application";
		$result = mysqli_query($db, $sql);
		
		
		echo "<table width=100%>
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