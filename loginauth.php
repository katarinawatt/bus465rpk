<!DOCTYPE html>
<html>
    <head>
        <title>Login Authorization</title>
        <link rel = "stylesheet" href = "loginpage.css">
    </head>
    <body>
        <?php
           $db = mysqli_connect("localhost", "kaw19", "1234", "bus465_project");
            if (!$db) { 
                die("Connection failed: " . mysqli_connect_error()); 
            }
            if (isset($_POST["upload"])) {
                $userEmailAddress = mysqli_real_escape_string($db, $_POST["userEmailAddress"]);
                $userPassword = mysqli_real_escape_string($db, $_POST["userPassword"]);

                $sql = "SELECT userEmailAddress, ID, VolorNot, userPh FROM registration WHERE userEmailAddress = '$userEmailAddress' 
                and userPassword = '$userPassword'";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result);
                $count = mysqli_num_rows($result);
                $userEmailAddress = "$row[0]";
                $ID = "$row[1]";
                $VolorNot = "$row[2]";
                $userPh = "$row[3]";
                if ($result == true) {
                    header("location: welcome.php?userEmailAddress=".$userEmailAddress."&ID=".$ID."&VolorNot=".$VolorNot."&userPh=".$userPh);
                }
                else {
                    echo "Your login credentials are incorrect";
                }
            }
         ?>
     </body>
</html>  
           