<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  

  $con = new mysqli("localhost", "root", "", "sdpdatabase");
  if($con->connect_error) 
  {
    die("Failed to connect : ".$con->connect_error);
  }
  else 
  {
    $stmt = $con->prepare("SELECT * from userdb where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
      $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password)
      {
        $_SESSION['loggedon'] = '$username';
        header("Location:../index.php");
      }
      else
      {
        
        ?>
          <script>
            alert("Invalid Username or Password!");
          </script>
        <?php
        header("Location:../index.php");
      }
    }
    else
    {
      

      ?>
                <script>
                    alert("Invalid Username or Password!");
                </script>
      <?php

      header("Location:../index.php");
    }
  }
?>
