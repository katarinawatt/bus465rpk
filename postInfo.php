<html>

<head>
	<title>Volunteer Opportunity</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/volunteer.css">
	<script src = "../js/apply.js"></script>
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
			
			//echo php_ini_loaded_file(); test
			
			$db = mysqli_connect("localhost", "rza39", "1234", "bus465_project");
				if (!$db) { die("Connection failed: " . mysqli_connect_error()); }
				
				
			
				if (isset($_POST["upload"])){
					
					$fname = $_POST["fname"];
					$lname = $_POST["lname"];
					$description = $_POST["yourself"];
					
					/*test
					echo $fname;
					echo $lname;
					echo $description;*/
					
				
					$fileName = $_FILES['resume']['name']; 
					$tmpName = $_FILES['resume']['tmp_name'];
					$fileDir = "fileDir/";
					
					//test sql = "INSERT INTO `applicant`(`FirstName`,`LastName`,`Description`) VALUES ('$fname','$lname','$description')";
					
					if (mysqli_query($db, $sql)){
						echo "Application Successfully submitted!";
					}else{
						echo "Please try again.";
					}
					
					if (move_uploaded_file($tmpName, $fileDir.fileName)) {
						echo "success!";
					}else {
						echo "could not move " . $tmpName . "to " . $fileDir.$fileName;
					}
					
					$sql = "INSERT INTO `application`(`FirstName`,`LastName`,`Description`,`Resume`) VALUES ('$fname','$lname','$description', '$fileName')";
					//test $sql = "INSERT INTO `uploadedResume`(`resumeFile`) VALUES ('$fileName')";
					
					if (mysqli_query($db, $sql)){
						echo "Application Successfully submitted!";
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