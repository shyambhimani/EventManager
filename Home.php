

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>


    <head>

        <title>Friend NPU</title>
        <link rel="stylesheet" type="text/css" href="home.css">

    </head>

    <body>
        <div class="header">
            <div class="buttonHeader1">
                <a href ="logout.php" class="logOutButton"><b>Log out</b></a>
            </div>
        </div>

        <div class="welcome">

            <img id ="imageWelcome" src="./pictures/welcome.jpg" alt="welcome">

            <!--            <div class="center">
                            <input type="text" name="searchLine">
                             <a href ="#" class="search" > <b> search </b></a>
                             
                        </div>
            -->


        </div>



        <div class="desc">
            <hr>
            <a href ="Newevent.php">
                <h2><b>Host an Event</b></h2>
            </a>


            <h4>When host a event</h4>
            <h5>in your account page,click"Post Event"button,
                fill up the information about your event,
                wait for someone to join and enjoy it!</h5>
            <br>
            <hr>
            <!--            <br>
                        <h2>Attend an Event</h2>
                        
                        <h4> When attend a event</h4>
                        <h5>type in keyword, search for the event,
                        or to see our coming events below
                        click the attend button and enjoy it!</h5>
                       <hr>-->
        </div>

        <div class ="contents">

            <!--        <div class="img">
                        <a target="_blank" href="./pictures/img_fjords.jpg">
                        <img src="./pictures/img_fjords.jpg" alt="Trolltunga Norway" width="300" height="200">
                        </a>
                        <div class="desc">Event A</div>
                    </div>
            
                    <div class="img">
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
            <div id="eventdiv" class="img">
                <a target="_blank" href="eventdetails.php">
                        <!--                image display code here-->
                        <img src="./pictures/img_forest.jpg" alt="yogas" width="600" height="400">
                    </a>
                    <!--              event name-->
                    <div class="es">  
                        <a href ="eventdetails.php">
                            <?php
                            $dbhost = 'localhost';
                            $dbuser = 'root';
                            $dbpass = '';

                            $conn = mysql_connect($dbhost, $dbuser, $dbpass);

                            if (!$conn) {
                                die('Could not connect: ' . mysql_error());
                            }

                            $sql = 'SELECT * FROM users';
                            mysql_select_db('eventpost');
                            $retval = mysql_query($sql, $conn);

                            if (!$retval) {
                                die('Could not get data: ' . mysql_error());
                            }

                            while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                                echo " <b>{$row['eventname']}</b>  <br> ";
                            }



                            mysql_close($conn);
                            ?></a></div>

                </div>



                <br>
                <br>
<br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br>
                </div>
                <div class="footer">
                    Copyright @FriendNPU.com
                </div>
                </body>
                </html>
