<html>
<body>
<?php
$username = $_POST["username"];
$password = $_POST["password"];
if($username == "lab6" && $password == "secret!") {
    echo "<p> Successfully logged in! </p>";
}
else {
    echo "<p> Sorry, the username or password is incorrect";
}
?>