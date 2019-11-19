<html>
<head>
<title>Bob’s Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>

<?php 
echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
?>

<h3> Results: </h3> 

<p>Tires: <?php echo $_POST["tireqty"]; ?> <br>
Oil: <?php echo $_POST["oilqty"]; ?> <br>
Spark Plugs: <?php echo $_POST["sparkqty"]; ?> <br>
 
Total: <?php echo $_POST[tireqty]+$_POST[oilqty]+$_POST[sparkqty]; ?></p> 

</body>
</html>