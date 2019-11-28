<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <h1>Welcome!</h1><br>
        <h2><a href = "homepage.html">Please continue to home page</a></h2>
        <?php
            $userEmailAddress = $_GET['userEmailAddress'];
            $VolorNot = $_GET['VolorNot'];
            $userPh = $_GET['userPh'];
            $ID = $_GET['ID'];
           // echo "<h3><a href = 'myaccountprofile.php?=userEmailAddress=".$userEmail."&ID=".$ID."&VolorNot=".$VolorNot."&userPh=".$userPh."'>Your Account</a></h3>";
           echo "<h3><a href = 'myaccountprofile.php?userEmailAddress=".$userEmailAddress."&ID=".$ID."&VolorNot=".$VolorNot."&userPh=".$userPh." '>Your Account</a></h3>";
           //echo "<h3><a href = 'myaccountprofile.php?=userEmailAddress=" . $userEmail . "'>Browse opportunity page</a></h3>";    

        ?>
    </body>
</html>