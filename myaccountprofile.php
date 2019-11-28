
<!DOCTYPE html>
<html>
    <head>
        <title>My Account</title>
        <link rel="stylesheet" href="myaccountprofile.css">
    </head>
    <body>
        <nav>
			<div class="logo">
				<h1>Project One Foundation</h1>
			</div>
			<ul class="menu">
				<li><a href="homepage.html">Home</a></li>
				<li><a href="oppopage.html">Browse opportunities</a></li>
				<li><a href="aboutpage.html">About us</a></li>
				<li><a href="contactpage.html">Contact us</a></li>
				<li><a href="donatepage.html">Donations</a></li>
				<li><a href="login.html">Log In</a></li>
        </nav>
        <?php
            $userEmailAddress = $_GET['userEmailAddress'];
            $VolorNot = $_GET['VolorNot'];
            $userPh = $_GET['userPh'];
            $ID = $_GET['ID'];
            echo $userEmailAddress;
        ?>
        <h2>My Account</h2><br>
        <table>
            <tr>
                <th>Email</th>
                <td>
                    <?php
                        echo $userEmailAddress;
                    ?>
                </td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>
                    <?php
                        echo $userPh;
                    ?>
                </td>
            </tr>
            <tr>
                <th>ID</th>
                <td>
                    <?php
                        echo $ID;
                    ?>
                </td>
            </tr>
        </table><br><br>
        <a href = oppopage.html>Browse Opportunities Available to You</a>
        
    </body>
