<html>

<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Application</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="volunteer.css">
	<link rel="stylesheet" href="oppostyle.css">
	<!--<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.min.css">
	<script src = "jquery.dataTables.min.js">-->
	<script type = "text/javascript">
		$(document).ready(function() {
		$('#opportunity').DataTable();
		});
		

	
	</script>
	
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

	<div class = "entire">
		<button onclick = "history.go(-1)">Back</button>
	
		<?php
			
			$db = mysqli_connect("localhost", "rza39", "1234", "bus465_project");
				if (!$db) { die("Connection failed: " . mysqli_connect_error()); }
				

				$sql = "SELECT PostID, Organization, Position, Location, Deadline FROM opportunity";
				$result = mysqli_query($db, $sql);
				$fetch = mysqli_fetch_row($result);
				$idNum = 0;
				
				
			echo "<table class = 'resultTable'>
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