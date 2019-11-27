<!DOCTYPE html>
<html>
    <?php 
        $db = mysqli_connect("localhost", "kaw19", "1234", "bus465_project");
        session_start();

        $checkUser = $_SESSION["userid"];
        $result = mysqli_query($db, "SELECT userEmailAddress FROM registration WHERE userEmailAddress = "$checkUser"");
        $row = mysqli_fetch_array($result);
        $userSession = $row["userEmailAddress"];
        
        if (!isset($_SESSION["userid"])) {
            header("location:loginauth.php");
            die();
        }
    ?>
</html>