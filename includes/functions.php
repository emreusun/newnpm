<?php
  // store the processed results in a variable
   $result = array();
 // if a user passes an ID via a query string (?id=1)  
 // then we should retieve the row of data that maches and pass is back the application
 function getOneProf($conn, $prof) {
   $query = "SELECT * FROM profs WHERE id='".$prof."'";

   // this is the database result -> the raw data that SQL gives us
   $runQuery = $conn->query($query);
   
   
  

// process our DB result and make something we can use with AJAX
while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
    $result[] = $row;
}
    return $result;
} 



// if a user does no pass an id, then they must want all the data so retrieve 
// all of it and pass it back to the app
 function getAllProfs($conn) {
     $query = "SELECT * FROM profs";

     $runQuery = $conn->query($query);
     while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
         $result[] = $row;
     }

    }