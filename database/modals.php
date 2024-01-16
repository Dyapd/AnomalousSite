<?php

    if(isset($_REQUEST['feedbackbtn']))
    {
        $emailad = $_POST['emailad'];
        $feedback = $_POST['feedback'];
            
        $con = new mysqli("localhost", "root", "", "sdpdatabase");
        if($con->connect_error) 
        {
            die("Failed to connect : ".$con->connect_error);
        }
        else 
        {
            $stmt = $con->prepare("INSERT INTO feedbackdb(emailad, feedback) VALUES (?, ?)");
            $stmt->bind_param("ss", $emailad, $feedback);
            $stmt->execute();
            ?>
                <script>
                    alert("Feedback sent! Thank you for your time!");
                </script>
            <?php
            $stmt->close();
            $con->close();
        }
    }
    elseif(isset($_REQUEST['report']))
    {
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
            ?>
                <script>
                    alert("Report sent!");
                </script>
            <?php
            $stmt->close();
            $con->close();
        }
    }
    elseif(isset($_REQUEST['entrySubmission']))
    {
        /* connection to database */
        $con = new mysqli("localhost", "root", "", "sdpdatabase");
        $pic_uploaded = 0;
        if($con->connect_error) 
        {
            die("Failed to connect : ".$con->connect_error);
        }

        /* if connected successfuly then execute this else block */
        else 
        {
            $name = $_POST['name'];
            $location = $_POST['location'];
            $title = $_POST['title'];
            $report = $_POST['reporte'];
            $type = $_POST['type']; 
            $threat = $_POST['threat'];
            $status = $_POST['status'];
            $image = $_FILES["img"]['name'];
            $entryName = $_POST['entryName'];

            /* this is for inserting images included is validation for image type and size */

            if(move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/AnomalousSite/images/'. $image))
            {
            $target_file = $_SERVER['DOCUMENT_ROOT']. '/AnomalousSite/images/'. $image;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $picname = basename($_FILES['img']['name']);
            $photo = time().$picname;

            /* validation for image type */
            if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png" )
            { 
                ?>
                <script>
                    alert("Please upload proper photo extension .jpg/jpeg/png");
                </script>
                <?php
            }
            /* validation for image size */
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
            
            /* if pic uploaded successfully then execute this block */
            if ($pic_uploaded == 1)
            {
            /* this is for validation if an entryname(Ex EN-001) already exists */
            $stmt = $con->prepare("SELECT id FROM entrysubdb WHERE entryName = ? LIMIT 1");
            $stmt->bind_param("s", $entryName);
            $stmt->execute();
            $result = $stmt->get_result();

            /* This is the main code for putting everything in the database */
            if($result->num_rows == 1) 
            {
                ?>
                <script>
                    alert("Entry Number Already Exists.");
                </script>
                <?php
            } 
            else 
            {
                $stmt = $con->prepare("INSERT INTO entrysubdb(name, location, title, report, type, threat, status, image, entryName) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssssss", $name, $location, $title, $report, $type, $threat, $status, $image, $entryName);
                $stmt->execute();
                ?>
                <script>
                    alert("Entry Submitted Successfully!");
                </script>
                <?php
                header("Location:entryList.php");
                $stmt->close();
                $con->close();
            }
            }
            /* if pic is not uploaded succesfully  */
            else 
            {
            ?>
                <script>
                alert("Photo Not Uploaded...");
                </script>
            <?php
            }
        }
    }elseif(isset($_REQUEST['entryEdit']))
    {
        /* connection to database */
        $con = new mysqli("localhost", "root", "", "sdpdatabase");
        $pic_uploaded = 0;
        if($con->connect_error) 
        {
            die("Failed to connect : ".$con->connect_error);
        }

        /* if connected successfuly then execute this else block */
        else 
        {
            $id = $_REQUEST['id'];
            $name = $_POST['name'];
            $location = $_POST['location'];
            $title = $_POST['title'];
            $report = $_POST['reporte'];
            $type = $_POST['type']; 
            $threat = $_POST['threat'];
            $status = $_POST['status'];
            $image = $_FILES["img"]['name'];
            $entryName = $_POST['entryName'];

            /* this is for inserting images included is validation for image type and size */

            if(move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/AnomalousSite/images/'. $image))
            {
            $target_file = $_SERVER['DOCUMENT_ROOT']. '/AnomalousSite/images/'. $image;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $picname = basename($_FILES['img']['name']);
            $photo = time().$picname;

            /* validation for image type */
            if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png" )
            { 
                ?>
                <script>
                    alert("Please upload proper photo extension .jpg/jpeg/png");
                </script>
                <?php
            }
            /* validation for image size */
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
            
            /* if pic uploaded successfully then execute this block */
            if ($pic_uploaded == 1)
            {
            /* this is for validation if an entryname(Ex EN-001) already exists */
            $stmt = $con->prepare("SELECT id FROM entrysubdb WHERE entryName = ? LIMIT 1");
            $stmt->bind_param("s", $entryName);
            $stmt->execute();
            $result = $stmt->get_result();
            
            $idar = $result->fetch_array(MYSQLI_ASSOC);

            /* This is the main code for putting everything in the database */
            if($result->num_rows == 1 && $idar['id'] != $id) 
            {
                ?>
                <script>
                    alert("Entry Number Already Exists.");  
                </script>
                <?php
            } 
            else 
            {
                $stmt = "UPDATE entrysubdb SET 
                name = '$name', location = '$location', title = '$title', 
                report = '$report', type = '$type', threat = '$threat', status = '$status', 
                image = '$image', entryName = '$entryName'
                WHERE id = $id";
                mysqli_query($con, $stmt);
                ?>
                <script>
                    alert("Entry Edited Successfully!");
                </script>
                
                <?php

                header("Location:entryList.php");
                exit();
            }
            }
            /* if pic is not uploaded succesfully  */
            else 
            {
        
            $stmt = "UPDATE entrysubdb SET 
            name = '$name', location = '$location', title = '$title', 
            report = '$report', type = '$type', threat = '$threat', status = '$status', 
            entryName = '$entryName'
            WHERE id = $id";
            mysqli_query($con, $stmt);
            ?>
            <script>
                alert("Entry Edited Successfully!");
            </script>
            
            <?php

            header("Location:entryList.php");
            exit();
            }
        }
    }elseif(isset($_REQUEST['delete'])){

        $con = new mysqli("localhost", "root", "", "sdpdatabase");

        if($con->connect_error) 
        {
            die("Failed to connect : ".$con->connect_error);
        }

        $id = $_REQUEST['id'];
        
        $stmt = "DELETE FROM entrysubdb WHERE id = $id";
        ?>
            <script>
                alert("Entry Deleted!");
            </script>
        <?php   
        mysqli_query($con, $stmt);
        header("Location:entryList.php");
        
        exit();
    }

?>