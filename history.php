<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="layouts.css">
    <link rel="stylesheet" href="modules.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>
        ZPD Home Page
    </title>
</head>
<body>
    <header>

        <div class="header-border">
            <div class="logo-img">
                <a href="index.html">
                    <img src="images/placeholdericon.png" alt="Logo" width="75px">
                </a>
            </div>
            <div class="search-container">
                <input class="searchBox" type="search" name="search" placeholder="Search...">
                <img class="search-icon" src="images/searchicon.png" alt="search">
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

    <main class="main-history">

        <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="#" alt="Logo">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"> 
                        <form id="loginform" action="database/login.php" method="post"> <!-- put php here -->
                            <p>
                            Username:
                            </p>
                            <input type="text" id="username" name="username">
                            <p>
                            Password:
                            </p>
                            <input type="text" id="password" name="password">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" form="loginform">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-feedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="#" alt="Logo">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Feedback</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="feedbackform" action="database/feedback.php" method="post"> <!-- put php here -->
                            <p>
                                Email Address(Optional):
                            </p>
                            <input type="text" id="emailad "name="emailad">
                            <p>
                                What did you notice about our website?/ Any ideas?:
                            </p>
                            <input type="text" id="feedback "name="feedback">
                        </form> 
                    </div>
                    <div class="modal-footer">
                        <button form="feedbackform" class="btn btn-primary">Report</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="#" alt="Logo">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Report Anomaly</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="reportform" action="database/report.php" method="post"> <!-- put php here -->
                            <p>
                                What did you encounter?
                            </p>
                            <input type="text" id="what" name="what">
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
                        <button class="btn btn-primary" form="reportform">Report</button>
                    </div>
                </div>
            </div>
        </div>
        
        
        <h1>
            History
        </h1>

        <div class="quote-history">
            <p>
                “Forget what hurt you in the past, but never forget what it taught you.” </br> – Hiro Mashima
            </p>
        </div>

        <hr>

        <h2>
            Placeholder
        </h2>

        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis eaque doloribus debitis sint ab, dolores aut eius. Vitae qui saepe ab! Facere, sunt quo est consequuntur odio eos alias doloremque!
        </p>

        <h3>
            Placeholder
        </h3>
        
        <h4>
            Placeholder
        </h4>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse saepe repudiandae delectus iure officia minus, ipsum, accusantium suscipit unde animi voluptates perspiciatis. Aperiam nam voluptas aliquid inventore ducimus! Maiores!
        </p>

       <hr>

        <h2>
            Placeholder
        </h2>

        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis eaque doloribus debitis sint ab, dolores aut eius. Vitae qui saepe ab! Facere, sunt quo est consequuntur odio eos alias doloremque!
        </p>

        <h3>
            Placeholder
        </h3>

        <h4>
            Placeholder
        </h4>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse saepe repudiandae delectus iure officia minus, ipsum, accusantium suscipit unde animi voluptates perspiciatis. Aperiam nam voluptas aliquid inventore ducimus! Maiores!
        </p>

        <hr>
   
        
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