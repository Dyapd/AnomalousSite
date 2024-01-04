 <?php



  $name = $_POST['name'];
  $location = $_POST['location'];
  $title = $_POST['title'];
  $report = $_POST['report'];
  $type = $_POST['type']; 
  $threat = $_POST['threat'];
  $status = $_POST['status'];


  $con = new mysqli("localhost", "root", "", "sdpdatabase");
  if($con->connect_error) 
  {
    die("Failed to connect : ".$con->connect_error);
  }
  else 
  {
    $stmt = $con->prepare("INSERT INTO entrysubdb(name, location, title, report, type, threat, status) values (?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssss", $name, $location, $title, $report, $type, $threat, $status);
    $stmt->execute();
    echo "Submission sent!";
    $stmt->close();
    $con->close();
  }

?> 


