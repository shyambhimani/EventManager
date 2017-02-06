<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: welcome.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['signin'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: Home.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Registration.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <h1>Sign In</h1>
          <div>
           
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="LoginFrom">
                <label for="email">Email</label>
                <br>
                <i class="glyphicon glyphicon-envelope"></i>
                <input type="email" name ="email"  id="email" required>
                <br><br>
                <label for="pwd"> Password</label>
                <br>
                <i class="glyphicon glyphicon-cloud"></i>
                <input type="password" name="password" value = "" required>
                <br><br>
                <input type="submit" value="signin" name="signin">
                <br><br>
                New User? <a href="Registration.php">Sign Up Here</a>
             </form>   
        </div>
    </body>
</html>
