<?php
  $emailad = $_POST['emailad'];
  $feedback = $_POST['feedback'];

  $con = new mysqli("localhost", "root", "", "sdpdatabase");
  if($con->connect_error) 
  {
    die("Failed to connect : ".$con->connect_error);
  }
  else 
  {
    $stmt = $con->prepare("insert into registration(emailad, feedback) values (?, ?)");
    $stmt->bind_param("ss", $emailad, $feedback);
    $stmt->execute();
    echo "Feedback sent!";
    $stmt->close();
    $con->close();
  }
?>