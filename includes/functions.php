<?php
    // include the connect file so that we can acces our DB
    include("connect.php");
   
  //store the SQL query in a variable
   $query = "SELECT * FROM profs";

   // this is the database result -> the raw data that SQL gives us
   $runQuery = $pdo->query($query);
   
   
   // store each row of data in an empty array (get processed in the while loop below)
   $result = array();

// process our DB result and make something we can use with AJAX
while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
    $result[] = $row;
} 

// Send the DB result back to our JS file as a JSON object
echo (json_encode($result));
