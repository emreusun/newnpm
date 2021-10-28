<?php
    require("connect.php");
    require("functions.php");

    // filter the incoming basic request and call the appropriate function
    // (the live functions/php)
    // this is a ternary statement -> shorthand if/else

   /*  if (isset($_GET["id"])) {
         // this is the id that user is passing to the script (1,2,3 etc)
        // it referes to the row of data that we want to retrieve fron the DB
        $id = $_GET["id"];
        
        // create a variable to hold the result of the database request
        $result = getOneProf($pdo, $id);
    } else {
        $result = getAllProfs($pdo);
    } */
    // ternary statement - shorhand if/ else
    $id = isset($_GET['id']) ? $_GET["id"] : null; 
    $result = getProfData($pdo, $id);

   // send the database result (our data) back to the javascript file
   echo json_encode($result);
