<?php
    session_start();
    include 'database/modals.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="layouts.css">
    <link rel="stylesheet" href="modules.css">
    <title>Privacy Policy</title>
</head>
<body>
    <header>
        <div class="header-border">
            <div class="logo-img">
                <a href="index.php">
                    <img src="images/placeholdericon.png" alt="Logo" width="75px">
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

    <main class="main-privacy">


                        
    <?php if(empty($_SESSION)) : ?>
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
                                <input type="password" id="password" name="password">
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
                            <textarea name="feedback" class="form-control" id="floatingTextarea2" style="height: 100px" required></textarea>
                        </form> 
                    </div>
                    <div class="modal-footer">
                        <button form="feedbackform" class="btn btn-primary" name="">Submit</button>
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
                        <button class="btn btn-primary" form="reportform">Report</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content1-top-privacy">
            <h1>
                Privacy Policy
            </h1>
            <br>
            <p>
                1. We may collect personal information, such as your name, email address, and any other details voluntarily provided when you interact with our website. Additionally, we may gather non-personal information, including browser type, IP address, and usage patterns.
                <br>
                <br>
                2. We use the collected information for the following purposes:
                <br>
                <br>
                To provide and maintain Secure Protect Document.
                <br>
                <br>
                To improve our website based on your feedback.
                <br>
                <br>
                To send periodic emails related to your inquiries or other requests.
                <br>
                <br>
                3. We prioritize the security of your information and employ industry-standard measures to safeguard it. 
                However, no method of transmission over the internet or electronic storage is completely secure, so absolute 
                security cannot be guaranteed.
            </p>
            <br>
        </div>

        <hr class="line-privacy">

        <div class="content2-top-privacy">
            <br>
            <h3>
                Information Collection
            </h3>

            <p>
                Secure Protect Document gathers user-provided details voluntarily, 
                including personal information and feedback, and automatically collects 
                non-personal data like IP addresses. The use of cookies and tracking technologies 
                enhances user experience, while account and payment information is securely processed. Users implicitly consent 
                to this information collection by using Secure Protect Development. Additionally, we assure users that their data 
                is handled with the utmost care, and any changes to our information collection practices will be communicated promptly.
            </p>
            <br>
        </div>
        <hr class="line-privacy">
        <div class="content3-top-privacy">
            <br>
            <h3>
                Security
            </h3>

            <p>
                Secure Protect Document (SDP) serves as a platform that offers valuable information. Users are required 
                to responsibly utilize the site and comply with our terms and conditions. Our content is safeguarded by 
                intellectual property rights, and we may use user-generated content. The website is provided in its current state,
                 and although we aim for accuracy, we cannot ensure it. User privacy is our priority, and our Privacy Policy outlines 
                 the handling of personal information. We appreciate your responsible use of Secure Protect Document (SDP)!
            </p>
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
</body>
</html>