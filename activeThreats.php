<?php
    session_start();
    include 'database/modals.php';

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
        <title>
        SDP Home Page
        </title>
    </head>

<body>
    <header>
        <div class="header-border">
            <div class="logo-img">
                <a href="index.php">
                    <img src="images/sdplogo.png" alt="Logo" width="75px">
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

    <main class="main-active">

    </main>

    <footer>
        <div class="footer-top">
            <a href="recruitment.html" class="btn btn-info link" role="button">RECRUITMENT</a>
            <a href="#" class="btn btn-info link" role="button" data-bs-toggle="modal" data-bs-target="#modal-report">REPORT</a>
        </div>
 
        <div class="footer-bottom-left">
            <a href="history.html">History</a>
        </div>

        <div class="footer-bottom">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-feedback">Feedback</a>
            <a href="privacy.html">Privacy</a>
            <a href="termsAndAgreements.html">Terms and Agreements</a>
            <a href="contactUs.html">Contact</a>
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>
    
</body>
</html>