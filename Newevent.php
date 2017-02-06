<?php 
session_start();
//if(isset($_SESSION['usr_id'])) {
//	header("Location: Home.php");
//}
 if(! empty( $_POST)){
    
    $mysqli = new mysqli('localhost', 'root', '', 'eventpost');
    
    if ($mysqli -> connect_error){
        die('Connect Error: ' . $mysqli -> connect_errno . ': ' . $mysqli->connect_error);
        
    }
    
    $sql = "INSERT INTO users ( eventname, description, address) VALUES ( '{$mysqli->real_escape_string($_POST['eventname'])}' , '{$mysqli->real_escape_string($_POST['description'])}' , '{$mysqli->real_escape_string($_POST['address'])}' )"; 
    
    $insert = $mysqli->query($sql);
    
    if ($insert){
        echo "Successfully Inserted in DB";
        
    } else{
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    $mysqli->close();
    
 }
    
    
    

//include_once 'dbconnectionpost.php';

//set validation error flag as false
//$error = false;
//
////check if form is submitted
//if(! empty( $_POST)){
//      
//    $eventname = mysqli_real_escape_string($con, $_POST['eventname']);
//	$decsription = mysqli_real_escape_string($con, $_POST['description']);
//	$address= mysqli_real_escape_string($con, $_POST['address']);
//		
//	//name can contain only alpha characters and space
//        
//	
//        if (!preg_match("/^[a-zA-Z ]+$/",$eventname)) {
//		$error = true;
//		$eventname_error = "EventName must contain only alphabets and space";
//	}
//	
//	if (!$error) {
//		if($sql = "INSERT INTO users ( eventname, description, address) VALUES ( '{$mysqli->real_escape_string($_POST['eventname'])}' , '{$mysqli->real_escape_string($_POST['description'])}' , '{$mysqli->real_escape_string($_POST['address'])}' )") {
//			$successmsg = "Successfully upload! <a href='Home.php'>Click here </a>";
//		} else {
//			$errormsg = "Error in uploading...Please try again later!";
//		}
//	}
//}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>New Event</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Registration.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <h1> Post An event</h1>
        <div>

            <form action="Newevent.php" method="post">
                
                <label for="eventname"> Event Name </label>
                <br>
                <input type="text" name="eventname" placeholder="Enter event Name" 
                
                
                <span class="text-danger">
                    
                    </span>
			
                <br><br>
                 <label for="description"> Description </label>
                <br>
                <input type="text" name="description" placeholder="Enter description " 
               
                <span class="text-danger">
                    </span>
                <br>
               <label for="address">Address </label>
                <br>
                <input type="text" name="address" placeholder="Enter address" 
                
                <span class="text-danger">
                    </span>
                
                  <input type="submit" name="upload" value="upload"  />
            </form>   
        </div>
    </body>
</html>
