<!DOCTYPE html>
<html>

<html>

<head>

	<title>Create Volunteer Post</title>

	<title>Volunteer Opportunity</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/volunteer.css">
	<script src = "../js/apply.js"></script>
	
</head>

<body>

	<div class = "entire">
		<button onclick = "goBack()">Back</button>
	
		<?php
			
			//echo php_ini_loaded_file(); test
			
			$db = mysqli_connect("localhost", "rza39", "1234", "bus465_project");
				if (!$db) { die("Connection failed: " . mysqli_connect_error()); }
				
				
			
				if (isset($_POST["submit"])){
					
					$org = $_POST["org"];
					$position = $_POST["position"];
					$location = $_POST["location"];
					$deadline = $_POST["deadline"];
					$description = $_POST["description"];

					
					$sql = "INSERT INTO `opportunity`(`Organization`,`Position`,`Location`,`Deadline`, `Description`) VALUES ('$org','$position','$location', '$deadline', '$description')";
					//test $sql = "INSERT INTO `uploadedResume`(`resumeFile`) VALUES ('$fileName')";
					
					if (mysqli_query($db, $sql)){
						echo "Post successfully posted!";
					}else{
						echo "Please try again.";
					}
				}else {
					exit;
				}

			mysqli_close($db);
		?>
	
	</div>
	


</body>

</html>