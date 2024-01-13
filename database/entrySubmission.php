 <?php
 


  $con = new mysqli("localhost", "root", "", "sdpdatabase");
  $pic_uploaded = 0;
  if($con->connect_error) 
  {
    die("Failed to connect : ".$con->connect_error);
  }
  else 
  {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $title = $_POST['title'];
    $report = $_POST['report'];
    $type = $_POST['type']; 
    $threat = $_POST['threat'];
    $status = $_POST['status'];
    $image = $_FILES["img"]['name'];
    $entryName = $_POST['entryName'];

    if(move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/AnomalousSite/images/'. $image))
    {
      $target_file = $_SERVER['DOCUMENT_ROOT']. '/AnomalousSite/images/'. $image;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      $picname = basename($_FILES['img']['name']);
      $photo = time().$picname;
      if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png" )
      { 
        ?>
          <script>
            alert("Please upload proper photo extension .jpg/jpeg/png");
          </script>
        <?php
      }
      else if($_FILES["img"]['size'] > 20000000)
      {
        ?>
          <script>
            alert("Your photo exceeded the size limit (2 MB)");
          </script>
        <?php
      } 
      else 
      {
        $pic_uploaded = 1;
      }
    }
    
    if ($pic_uploaded == 1)
    {
      $stmt = $con->prepare("INSERT INTO entrysubdb(name, location, title, report, type, threat, status, image, entryName) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssssss", $name, $location, $title, $report, $type, $threat, $status, $image, $entryName);
      $stmt->execute();
      
      $stmt->close();
      $con->close();

    }
    else 
    {
      ?>
          <script>
            alert("Photo Not Uploaded...");
          </script>
        <?php
    }
  }

?> 


