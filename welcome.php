<?php
session_start();
include_once 'dbconnect.php';
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    
    <head>
        
        <title>Friend NPU</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
   
    </head>
    
    <body>
        <div class="header">
           <div class="buttonHeader1">
               <a href ="login.php" class="signInButton" ><b>Sign In</b></a>
            </div>
            <div class="buttonHeader2">
                <a href ="Registration.php" class="signUpButton" onclick="resizeWin()"> <b>Sign Up </b></a>
            </div>
        </div>
        
        <div class="welcome">
           
            <img id ="imageWelcome" src="./pictures/welcome.jpg" alt="welcome">
        
            <div class="center">
                <a href = "Registration.php" onclick="resizeWin();return false;" class="button">Join Us Now </a>
            </div>
        
        
        </div>


        
        <div class="desc">
            <h1>About FriendNPU</h1>
            <h3>
                post events and attend events, meet new friends here
            </h3>
         </div>
        
        <div class ="contents">
            
        <div class="img">
            <a target="_blank" href="login.php">
            <img src="./pictures/img_fjords.jpg" alt="Trolltunga Norway" width="300" height="200">
            </a>
<!--            <div class="desc">Event A</div>-->
        </div>

<!--        <div class="img">
            <a target="_blank" href="./pictures/img_forest.jpg">
            <img src="./pictures/img_forest.jpg" alt="Forest" width="600" height="400" >
            </a>
            <div class="desc">Event B</div>
        </div>

        <div class="img">
            <a target="_blank" href="./pictures/img_lights.jpg">
            <img src="./pictures/img_lights.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Event C</div>
        </div>

        <div class="img">
            <a target="_blank" href="./pictures/img_mountains.jpg">
            <img src="./pictures/img_mountains.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Event D</div>
        </div>
        
        <div class="img">
            <a target="_blank" href="./pictures/img_mountains.jpg">
            <img src="./pictures/yoga.jpg" alt="yogas" width="600" height="400">
            </a>
            <div class="desc">Event E</div>
        </div>-->

        </div><br>
        <br>
        <br>
        <br><br>
        <br><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
        <div class="footer">
            Copyright @FriendNPU.com
        </div>
        <script type="text/javascript">
            //Resize the window
            var myWindows;
            function resizeWin(){
                myWindows = windows.open(this.href);
                myWindows.resizeTo(500,500);
                myWindows.focus();
            }
        </script>
    </body>
</html>
