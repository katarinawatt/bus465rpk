<html>

<head>

	<title>Volunteer Opportunity</title>

	<link rel = "stylesheet" type = "text/css" href = "../css/opportunity.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/volunteer.css">
	<!--<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.min.css">
	<script src = "jquery.dataTables.min.js">-->
	<script type = "text/javascript">
		$(document).ready(function() {
		$('#opportunity').DataTable();
		});
		

	
	</script>
	
</head>

<body>

	<nav class = "menu">
		<ul>
			<li><a href = "#home">Home</a></li>
			<li><a class = "active" href = "opportunity.php">Opportunities</a></li>
			<li><a href = "#contact">Contact Us</a></li>
			<li><a href = "#about">About Us</a></li>
		</ul>
	</nav>

	<div class = "entire">
		<button onclick = "goBack()">Back</button>
	
		<?php
			
			$db = mysqli_connect("localhost", "rza39", "1234", "bus465_project");
				if (!$db) { die("Connection failed: " . mysqli_connect_error()); }
				

				$sql = "SELECT PostID, Organization, Position, Location, Deadline FROM opportunity";
				$result = mysqli_query($db, $sql);
				$fetch = mysqli_fetch_row($result);
				$idNum = 0;
				
				
			echo "<table width=100%>
			<tr>
			<th>Post ID</th>
			<th>Organization</th>
			<th>Position</th>
			<th>Location</th>
			<th>Deadline</th>
			</tr>";

			while($row = mysqli_fetch_array($result)) {

				$id = $row['PostID'];
				
				//echo $id; debug + test

				echo "<tr>";
				echo "<td><a href='oppDetail.php?id=" . $id . "'>" . $row['PostID'] .  "</td>";
				echo "<td><a href='oppDetail.php?id=" . $id . "'>" . $row['Organization'] . "</a> </td>";
				echo "<td><a href='oppDetail.php?id=" . $id . "'>" . $row['Position'] .  "</td>";
				echo "<td><a href='oppDetail.php?id=" . $id . "'>" . $row['Location'] . "</td>";
				echo "<td><a href='oppDetail.php?id=" . $id . "'>" . $row['Deadline'] . "</td>";
				echo "</tr>";
				echo $id;
			}
			echo "</table>";

			mysqli_close($db);
		?>
	
	</div>
	

</body>

</html>