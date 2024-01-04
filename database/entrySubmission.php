<!-- <?php
  $entryName = $_POST['entryName'];
  $anomLocation = $_POST['anomLocation'];
  $title = $_POST['title'];
  $investiRep = $_POST['investiRep'];

  $con = new mysqli("localhost", "root", "", "sdpdatabase");
  if($con->connect_error) 
  {
    die("Failed to connect : ".$con->connect_error);
  }
  else 
  {
    $stmt = $con->prepare("insert into registration(entryName, anomLocation, title, investiRep) values (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $entryName, $anomLocation, $title, $investiRep);
    $stmt->execute();
    echo "Submission sent!";
    $stmt->close();
    $con->close();
  }
?> -->


<?php 

print_r($_POST);


?>