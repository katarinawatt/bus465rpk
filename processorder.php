<html>
<head>
<title>Bob’s Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob’s Auto Parts</h1>
<h2>Order Results</h2>
<?php
echo '<p>Order processed.</p>';
echo $_POST['tireqty']+$_POST['oilqty']+$_POST['sparkqty'];
?>
</body>
</html>