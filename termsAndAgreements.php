<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="layouts.css">
    <link rel="stylesheet" href="modules.css">
    <title>Terms and Agreements</title>
</head>
<body>
    <header>
        <div class="logo-img">
            <a href="index.html">
                <img src="images/placeholdericon.png" alt="Logo" width="75px">
            </a>
        </div>
        <div class="search-container">
            <input class="searchBox" type="search" name="search" placeholder="Search...">
            <img class="search-icon" src="images/searchicon.png" alt="search">
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

    <main class="main-termsand">
        <div class="content1-top-termsand">
            <h1>
                Terms and Agreement
            </h1>
            <br>
            <p>
                Using SPD means agreeing to use it responsibly and legally. Respect our intellectual property,
                 check our Privacy Policy for how we handle your information, and understand that user-generated 
                 content may be used by us. The website is provided "as-is," without guarantees of accuracy, and
                  we are not liable for damages. 
            </p>
        </div>

     

        <div class="content2-top-termsand">
            <h3>
                Overview
            </h3>

            <p>
                Secure Protect Document (SPD) serves as a platform that offers valuable information. 
                Users are required to responsibly utilize the site and comply with our terms and conditions. 
                Our content is safeguarded by intellectual property rights, and we may use user-generated content.
                 The website is provided in its current state, and although we aim for accuracy, we cannot ensure it.
                  User privacy is our priority, and our Privacy Policy outlines the handling of personal information.
                   We appreciate your responsible use of Secure Protect Document (SPD)!
            </p>
        </div>
        <hr class="line-termsand">
        <div class="content3-top-termsand">
            <h3>
                1. Our Service
            </h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima sequi, dolorum id sapiente, saepe praesentium nulla maxime neque aliquam vero error. Nihil architecto maiores aspernatur et iste ad assumenda repudiandae!
            </p>
        </div>

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
</body>
</html>