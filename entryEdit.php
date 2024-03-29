<?php
    session_start();
    include 'database/modals.php';
?>

<?php
    include "database/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="layouts.css">
    <link rel="stylesheet" href="modules.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Entry Submission</title>
</head>
<body>
    <header>
        <div class="header-border">
            <div class="logo-img">
                <a href="index.php">
                    <img src="images/headerlogo.png" alt="Logo" width="75px">
                </a>
            </div> 
        </div>
    </header>
    
    <header class="header-bottomshape">
        <nav>
            <ul>
                <li>
                    <a href="aboutUs.php">About</a>
                    <a href="entryList.php">Entry List</a>

                    <?php if(empty($_SESSION)) : ?> <!-- check if session is empty -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-login">Login</a>
                    <?php endif ?>

                    <!-- check if session has loggedon set if so then is logged in -->
                    <?php if(isset($_SESSION['loggedon'])) : ?>
                        <a href="database/logout.php" >Signout</a>
                        <a href="entrySubmission.php">Submit Entry</a>
                    <?php endif ?>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main-entryEdit">

    <?php if(empty($_SESSION)) : ?>
            <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img src="images/sdplogo.png" alt="Logo" class="modal-logo">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> 
                            <form id="loginform" action="database/login.php" method="post"> <!-- put php here -->
                                <p>
                                Username:
                                </p>
                                <input type="text" id="username" name="username" required>
                                <p>
                                Password:
                                </p>
                                <input type="password" id="password" name="password" required>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" form="loginform" name="login">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <div class="modal fade" id="modal-feedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="images/sdplogo.png" alt="Logo" class="modal-logo">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Feedback</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="feedbackform" action="#" method="post"> <!-- put php here -->
                            <p>
                                Email Address(Optional):
                            </p>
                            <input type="email" id="emailad "name="emailad">
                            <p>
                                What did you notice about our website?/ Any ideas?:
                            </p>     
                            <textarea name="feedback" class="form-control" id="floatingTextarea2" style="height: 100px" required></textarea>
                        </form> 
                    </div>
                    <div class="modal-footer">
                        <button form="feedbackform" class="btn btn-primary" name="feedbackbtn">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="images/sdplogo.png" alt="Logo" class="modal-logo">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Report Anomaly</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="reportform" action="#" method="post"> <!-- put php here -->
                            <p>
                                What did you encounter?
                            </p>
                            <input type="text" id="what" name="what" >
                            <p>
                                Where did you encounter it?
                            </p>
                            <input type="text" id="location" name="location">
                            <p>
                                When did you encouter it?
                            </p>
                            <input type="text" id="time" name="time">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" form="reportform" name="report">Report</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
        <h1>
            Entry Edit
        </h1>

        <?php foreach($query as $q): ?>
            <form name="entryForm" action="#" class="entrysubmission-form" method="post" enctype="multipart/form-data"
            required>    
                <br>

                <label for="name" class="menu-form">Author Name*:</label> <br>
                <input type="text" class="textFields-form" name="name" value = "<?php echo $q['name']?>"required> <br>

                <label for="anomalylocation" class="menu-form">Anomaly Location (Current)*:</label> <br>
                <input type="text" class="textFields-form" name="location" value = "<?php echo $q['location']?>" required> <br>

                <label for="investigationtitle" class="menu-form">Investigation Name (Title)*:</label> <br>
                <input type="text" class="textFields-form" name="title" value="<?php echo $q['title']?>" required> <br>

                <label for="entryName" class="menu-form" >Entry Number (EN-001/EV-001/PL-001/OB-001)*:</label> <br>
                <input type="text" class="textFields-form" name="entryName"
                pattern="(EN|PL|OB|EV)-\d\d\d"
                title="Please use the format (EN-XXX/EV-XXX/PL-XXX/OB-XXX)"
                value = "<?php echo $q['entryName']?>"
                required> <br>

                <label for="report" class="menu-form">Investigation Report*:</label> <br>
                <textarea name="reporte" id="report" rows="10" class="textFields-form" name="report" 
                required><?php echo $q['report']?></textarea> <br>

                <label for="imgrep" class="menu-form">Photo (Leave empty if no change):</label>
                <input type="file" id="fileInput" class="form-control inImg-form" name="img" accept=".jpg, .jpeg, .png"> <br>   

                <div class="selectmenu" class="menu-form">
                    <select name="type" id="type" class="select-menu-form"  required > 
                        <option value="Object" <?php if($q['type'] == 'Object'): ?> selected="selected"<?php endif; ?>>Type: Object</option>
                        <option value="Entity" <?php if($q['type'] == 'Entity'): ?> selected="selected"<?php endif; ?>>Type: Entity</option>
                        <option value="Event" <?php if($q['type'] == 'Event'): ?> selected="selected"<?php endif; ?>>Type: Event</option>
                        <option value="Place" <?php if($q['type'] == 'Place'): ?> selected="selected"<?php endif; ?>>Type: Place</option>
                    </select>
                </div>

                <br>

                <div class="selectmenu" >
                    <select name="threat" id="threatLevel" class="select-menu-form" required> 
                        <option value="Vicinity" <?php if($q['threat'] == 'Vicinity'): ?> selected="selected"<?php endif; ?>>Influence Boundary: Vicinity</option>
                        <option value="Local" <?php if($q['threat'] == 'Local'): ?> selected="selected"<?php endif; ?>>Influence Boundary: Local</option>
                        <option value="Regional" <?php if($q['threat'] == 'Regional'): ?> selected="selected"<?php endif; ?>>Influence Boundary: Regional</option>
                        <option value="Continental" <?php if($q['threat'] == 'Continental'): ?> selected="selected"<?php endif; ?>>Influence Boundary: Continental</option>
                        <option value="Global" <?php if($q['threat'] == 'Global'): ?> selected="selected"<?php endif; ?>>Influence Boundary: Global</option>
                    </select>
                </div>

                <br>

                <div class="selectmenu">
                    <select name="status" id="status" class="select-menu-form" selected required> 
                        <option value="Unknown" <?php if($q['status'] == 'Unknown'): ?> selected="selected"<?php endif; ?>>Status: Unknown</option>
                        <option value="Secured" <?php if($q['status'] == 'Secured'): ?> selected="selected"<?php endif; ?>>Status: Secured</option>
                        <option value="Cooperative" <?php if($q['status'] == 'Cooperative'): ?> selected="selected"<?php endif; ?>>Status: Cooperative</option>
                        <option value="Monitored" <?php if($q['status'] == 'Monitored'): ?> selected="selected"<?php endif; ?>>Status: Monitored</option>
                        <option value="Terminated" <?php if($q['status'] == 'Terminated'): ?> selected="selected"<?php endif; ?>>Status: Terminated</option>
                    </select>
                </div>

                <br>

                <button class="btn btn-primary" name="entryEdit">
                    Submit
                </button>
            </form>
        <?php endforeach; ?>

    </div>
    </main>

    <footer>
        <div class="footer-top">
            <a href="recruitment.php" class="btn btn-info link" role="button">RECRUITMENT</a>
            <a href="#" class="btn btn-info link" role="button" data-bs-toggle="modal" data-bs-target="#modal-report">REPORT</a>
        </div>
 
        <div class="footer-bottom-left">
            <a href="history.php">History</a>
        </div>

        <div class="footer-bottom">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-feedback">Feedback</a>
            <a href="privacy.php">Privacy</a>
            <a href="termsAndAgreements.php">Terms and Agreements</a>
            <a href="contactUs.php">Contact</a>
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>
    <script src="script/entryValidation.js"> </script>
</body>
</html>