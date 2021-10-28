<?php
  // store the processed results in a variable
   $result = array();
 // if a user passes an ID via a query string (?id=1)  
 // then we should retieve the row of data that maches and pass is back the application
 function getProfData($conn, $prof) {
     if (is_null($prof)) { 
        $query = "SELECT * FROM profs";
   
     } else {
        $query = "SELECT * FROM profs WHERE id='".$prof."'";
     }
   // this is the database result -> the raw data that SQL gives us
   $runQuery = $conn->query($query);
   
   
  

// process our DB result and make something we can use with AJAX
while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
    $result[] = $row;
}
    return $result;
} 

