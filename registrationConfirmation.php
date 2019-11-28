<!DOCTYPE html>
<html>
    <head>
        <title>Registration Confirmed</title>
        <link rel="stylesheet" href="registration.css">
    </head>
    <body>
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
                    $isVol = $_POST["isVol"];
                    
                    $sql = "INSERT INTO `registration`(`userName`, `userEmailAddress`, `userPassword`, `userPh`, `VolorNot`)
                            VALUES ('$userName', '$userEmailAddress', '$userPassword', '$userPh', '$VolorNot')";
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
            <br><a href = "homepage.html">Return to home page</a>
         <?php
            $userEmailAddress = $_GET['userEmailAddress'];
            echo "<h3><a href = 'opportunity.php?=userEmailAddress=" . $userEmailAddress . "'>Browse opportunity page</a></h3>";    
        ?>
    </body>
</html>