<!DOCTYPE html>
<html>
    <head>
        <title>Login Authorization</title>
        <link rel = "stylesheet" href = "loginpage.css">
    </head>
    <body>
        <?php
            // session_start();
           $db = mysqli_connect("localhost", "kaw19", "1234", "bus465_project");
            if (!$db) { 
                die("Connection failed: " . mysqli_connect_error()); 
            }
            if (isset($_POST["upload"])) {
                $userEmailAddress = mysqli_real_escape_string($db, $_POST["userEmailAddress"]);
                $userPassword = mysqli_real_escape_string($db, $_POST["userPassword"]);

                $sql = "SELECT userEmailAddress FROM registrationVol WHERE userEmailAddress = '$userEmailAddress' 
                and userPassword = '$userPassword'";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result);
                // echo $result;
                $count = mysqli_num_rows($result);
                if ($count == 1) {
                    header("location: welcome.php");
                }
                else {
                    $error = "Your login credentials are incorrect"
                }
            }
        ?>
    </body>
</html>
           
           