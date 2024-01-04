<?php
  $what_encounter = $_POST['what_encounter'];
  $where_encounter = $_POST['where_encounter'];
  $when_encounter = $_POST['when_encounter'];

  $con = new mysqli("localhost", "root", "", "sdpdatabase");
  if($con->connect_error) 
  {
    die("Failed to connect : ".$con->connect_error);
  }
  else 
  {
    $stmt = $con->prepare("insert into registration(what_encounter, where_encounter, when_encounter) values (?, ?, ?)");
    $stmt->bind_param("sss", $what_encounter, $where_encounter, $when_encounter);
    $stmt->execute();
    echo "Report sent!";
    $stmt->close();
    $con->close();
  }
?>