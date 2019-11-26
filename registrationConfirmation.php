<html>
    <head>
        <title>Registration Confirmed</title>
        <link rel="stylesheet" href="registration.css">
    </head>
    <body>
        <?php //echo $_POST["userName"]; ?>. 
        <?php
                $db = mysqli_connect("localhost", "kaw19", "1234", "bus465_project");
                if (!$db) { 
                    die("Connection failed: " . mysqli_connect_error()); 
                }
                if (isset($_POST["upload"])) {
                    $userName = $_POST["userName"];
                    $userEmailAddress = $_POST["userEmailAddress"];
                    $userPassword = $_POST["userPassword"];
                    $userPh = $_POST["userPh"];
                    
                    $sql = "INSERT INTO `registration`(`userName`, `userEmailAddress`, `userPassword`, `userPh`)
                            VALUES ('$userName', '$userEmailAddress', '$userPassword', '$userPh')";

                    if(mysqli_query($db, $sql)) {                        
                        echo "Successfully registered.  Thank you, " . $userName . ".";
                    }
                    else {
                        echo "Unable to register.  Please try again.";
                    } 
                }
                else {
                    exit;
                }
                mysqli_close($db);
            ?>

    </body>
</html>