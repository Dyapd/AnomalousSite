<?php
  $what = $_POST['what'];
  $location = $_POST['location'];
  $time = $_POST['time'];

  $con = new mysqli("localhost", "root", "", "sdpdatabase");
  if($con->connect_error) 
  {
    die("Failed to connect : ".$con->connect_error);
  }
  else 
  {
    $stmt = $con->prepare("INSERT INTO reportdb(what, location, time) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $what, $location, $time);
    $stmt->execute();
    echo "Report sent!";
    $stmt->close();
    $con->close();
  }
?>

