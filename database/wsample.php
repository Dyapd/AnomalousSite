<?php

$con = new mysqli("localhost", "root", "", "sdpdatabase");
if($con->connect_error) 
{
  die("Failed to connect : ".$con->connect_error);
}
else 
{

    if(){

    $emailad = $_POST['emailad'];
    $feedback = $_POST['feedback'];
    
    $stmt = $con->prepare("INSERT INTO feedbackdb(emailad, feedback) VALUES (?, ?)");
    $stmt->bind_param("ss", $emailad, $feedback);
    $stmt->execute();
    echo "Feedback sent!";
    $stmt->close();
    $con->close();
    }
    else if (){
        
    }
}

?>