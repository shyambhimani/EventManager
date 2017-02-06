<?php
session_start();

//if(isset($_SESSION['usr_id'])) {
//	header("Location: welcome.php");
//}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
        $email = mysqli_real_escape_string($con, $_POST['email']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	
	//name can contain only alpha characters and space
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	
        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	if (!$error) {
		if(mysqli_query($con, "INSERT INTO users(email,name,password) VALUES('" . $email . "', '" . $name . "', '" . md5($password) . "')")) {
			$successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
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
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="Registration.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
         <h1> Create your account</h1>
       <div>
           
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" method="post">
                <label for="name">Email</label>
	        <br>
                <i class="glyphicon glyphicon-envelope"></i>
                <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
	          <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                <br><br>
                
                <label for="name"> Name </label>
                <br>
                <i class="glyphicon glyphicon-user"></i>
                <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
	        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
			
                <br><br>
                
                   
                <label for="pwd"> Password</label>
                <br>
                <i class="glyphicon glyphicon-cloud"></i>
                <input type="password" name="password" placeholder="Password" required class="form-control" />
		<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
		
                <br><br>
                
                <label for="pwd"> Retype Password</label>
                <br>
                <i class="glyphicon glyphicon-cloud"></i>
                <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
		<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
	          <br><br>
              
                <input type="submit" name="signup" value="Sign Up"  />
		      
               <span><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
	       <span><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		
	
               <br><br>	
		Already Registered? <a href="login.php">Login Here</a>
             </form>   
           
        </div>
        
    </body>
</html>
