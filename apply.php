<!DOCTYPE html>

<head>
	<title>Application Success!</title>
</head>

<body>
	<?php
		$target_dir = "apply/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		
		echo "<p>Thank you for applying</p>".date('H:i, jS F Y')."</p>";
	?>
</body>

</html>