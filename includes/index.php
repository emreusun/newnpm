<?php
    require("connect.php");
    require("functions.php");

    $id = isset($_GET['id']) ? $_GET["id"] : null; 
    $result = getProfData($pdo, $id);

   // send the database result (our data) back to the javascript file
   echo json_encode($result);
