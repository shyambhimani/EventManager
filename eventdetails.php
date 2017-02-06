<?p<?php
            $dbhost = 'localhost';
             $dbuser = 'root';
            $dbpass = '';
   
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
            if(! $conn ) {
             die('Could not connect: ' . mysql_error());
               }
   
            $sql = 'SELECT * FROM users';
             mysql_select_db('eventpost');
               $retval = mysql_query( $sql, $conn );
   
            if(! $retval ) {
            die('Could not get data: ' . mysql_error());
                 }
   
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
              echo " <b>eventname :{$row['eventname']}</b> <br> ".
              " <b>Description :{$row['description']}</b>  <br> ".
               " <b>address :{$row['address']}</b>.  <br> ".
                     "-----------------------------------<br>" ;
                }
   
   
   
            mysql_close($conn);
        ?>