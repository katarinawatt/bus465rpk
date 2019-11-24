<html>

<head>
	<title>Volunteer Opportunity</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/volunteer.css">
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
		
		<!--<form action = "postInfo.php" method = "post" enctype = "multipart/form-data">
			<table>
				<tr>
					<td>First Name </td>
					<td><input type = "text" name = "fname" maxlength = "10" id = "fname" /></td>
				</tr>
				<tr>
					<td>Last Name </td>
					<td><input type = "text" name = "lname" maxlength = "10" id = "lname" /></td>
				</tr>
				<tr>
					<td>Tell Us About Yourself</td>
					<td><textarea id = "yourself" name = "yourself" placeholder = "I am...(Maximum Length: 500 words)" maxlength: "500"></textarea></td>
				</tr>
				<tr>
					<td>Upload Resume</td>
					<td><input type = "file" name = "uploadResume" id = "resume" /></td>
				</tr>
				<tr>
					<td><input type = "submit" value = "Submit" name = "submitInfo" /></td>
				</tr>
			</table>
		</form>-->
	</div>
	
</body>

</html>