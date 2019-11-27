
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

        <h2>My Account</h2><br>
        <table>
            <tr>
                <th>Name</th>
                <td>
                    <?php 
                        $db = mysqli_connect("localhost", "kaw19", "1234", "bus465_project");
                        if (!$db) { 
                            die("Connection failed: " . mysqli_connect_error()); 
                        }
                        $sql = "SELECT userName FROM registration";
                        if($result = mysqli_query($db,$sql)) {
                            while ($row = mysqli_fetch_row($result)) {
                                printf("%s",$row[0]);
                            }
                        }
                        mysqli_close($db);
                        ?>
                </td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>
                    <?php 
                        $db = mysqli_connect("localhost", "kaw19", "1234", "bus465_project");
                        if (!$db) { 
                            die("Connection failed: " . mysqli_connect_error()); 
                        }
                        $sql = "SELECT userPh FROM registration";
                        if($result = mysqli_query($db,$sql)) {
                            while ($row = mysqli_fetch_row($result)) {
                                printf("%s",$row[0]);
                            }
                        }
                        mysqli_close($db);
                        ?>
                </td>
            </tr>
            <tr>
                <th>Email address</th>
                <td>Email taken from SQL database</td>
            </tr>
        </table><br><br>
        <a href = oppopage.html>Browse Opportunities Available to You</a>
        
    </body>
