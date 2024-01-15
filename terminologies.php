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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>
        Terminologies
    </title>
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

    <main class="main-terms">


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

        
        <h1>
            Terminologies
        </h1>
        <p> 
            Below are the important terms one must know to understand the information in this website.
        </p>

        <hr>

        <h2>
            Classification
        </h2>

        <p>
            Anomalies are a broad category. Ranging from still objects to entities that can think for themselves, still
            all anomalies have one thing in common and that they all have paranormal qualities. They are split into four categories.
            Do not be mistaken that anomalies are only categorized into one of these four, as the effects they exhibit are unpredictable.
            An object may sometimes behave as and entity, vice versa.
        </p>

        <h3>
            Types of Classification:
        </h3>
        
        <h4>
            Object
        </h4>
        <p>
            This type can be best described as things that do not have any life possessing anomalous effects. These typically are 
            handheld, and have properties that may alter the wielder's characteristics or exude effects from within it. 
        </p>

        <h4>
            Entity
        </h4>
        <p>
            Entities are anomalies that possesses life. These can range from sapient-like intelligences or animal-like intelligences. 
            It is highly recommended to evacuate the premises when one encounters an entity as they often do not want witnesses

        </p>

        <h4>
            Place
        </h4>
        <p>
            Places are like objects, but instead of the effect originating within something. It originates within the location itself.
            Some notable examples are Tucson, Mann Island and the North Pole.
            
        </p>

        <h4>
            Event
        </h4>
        <p>
            These are anomalous events that happen due to certain conditions. It is often unknown which conditions are needed in order
            for event anomalies to occur, as such when events are seen happening repeatedly at one place it is often mistaken for a 
            place anomaly. 
            
        </p>

        <hr>

        <h2>
            Threat Level
        </h2>

        <p>
            The effects of anomalies are often dangerous, as such they are categorized on the influence they have on a scale.
        </p>

        <h3>
            Threat Levels:
        </h3>

        <h4>
            Vicinity
        </h4>
        <p>
            These are anomalies that influences the vicinity of a person. Ranging from just the person itself to affecting a whole neighborhood.
        </p>

        <h4>
            Local
        </h4>
        <p>
            The area of influence is extended to a local area. From a a part of a city to affecting the entirety of it.
        </p>

        <h4>
            Regional
        </h4>
        <p>
            Anomalies that affect an entire region. For example, The Borealis Worm which roams the entirety of the nordic countries. 
        </p>

        <h4>
            Continental
        </h4>
        <p>
            Dangerous anomalies that affect an entire continent. At this scale, the case is usually a powerful entity or an object's power
            being unleashed.
        </p>

        <h4>
            Global
        </h4>
        <p>
            The Krudin Effect, Magnanimous Cloud, Hyposphere. These are the most common anomallies that affect the world.
            They are now a truth that is on the same level as mathematics. It is too late to even contain it. Humanity simply has to
            live with them.
        </p>

        <hr>
        

        <h2>
                General Terms
        </h2>

        <p>
                These are terms that are used commonly within the organization.
        </p>

        <h4>
                Duratin
        </h4>

        <p>
                A substance emitted by all known anomalies. Duratin appears in many different forms such as gases, or physical armor.
                The substance acts like radiation in that specifically made sensors can detect whether or not something leaves a trace.
                From the entities with high amount of Duratin in their systems, they exhibit stronger immunity to diseases than any known creature.
                Duratin acts like a repairing agent while also acting as an enhancement, in the form of external armor, or weapons.
                The SDP researchers, with the collaboration of multiple health research centers, found that Duratin is too volatile
                to completely harness, often resulting in mutations and casualties, however, we are continuing to research if it meant
                providing better health care for humans around the globe. (Submitted and summarized by Professor Vida, Head of Research Department.)
        </p>

        <h2>
                
        </h2>

        <p>
            
        </p>

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
</body>
</html>