       
            <?php
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
      echo "eventname :{$row['eventname']}  <br> ".
         "Description : {$row['description']} <br> ".
         "address : {$row['address']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>