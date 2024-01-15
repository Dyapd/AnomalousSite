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
        About Us
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

    <main class="main-about">

        <!-- check if session is empty (not logged in)  -->
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

        <div class="container-top-main-about">
            <h1>
                About Us
            </h1>
            <img src="images/headerlogo-black.png" alt="placeholder icon">
            <br>
            <p>
            Secure Document Protect is an international organization made in August 6, 1960 in response to the rising presence of anomalies. 
            Our purpose is to secure anomalies to where they cannot harm other people, and to study them in order to combat these
             threats. We do our utmost best in achieving these objectives. With more than 100 facilities around the world, and with
              backing from numerous governments, we believe that we have the resources to protect the world.
            </p>
            <p>
                <br>
                Our headquarters is located in The Reunion Island. With regional Forward Operating Bases operating in the
                 regions of West Coast USA, East Coast USA, Brazillian Facility, Chilean Facility, Western Europe, Eastern 
                 Europe, North Africa, South Africa, Central Africa, Middle East, India, China, Eastern Siberia, Japan, Indonesia, 
                 Australia and Myanmar.
                <br>
                <br>
                SDP's government operates on a transparent and collaborative model, involving scientists, law enforcement, and military in anomaly research and containment efforts. The SDP employs cutting-edge technology and a highly trained task force to investigate and neutralize anomalies, ensuring that the general public remains safe from the unpredictable and often supernatural occurrences.

            </p>
        </div>
        
        <div class="container-bottom-main-about">
            <h1>
                Purpose of this Website
            </h1>
            <p>
                The SDP government emphasizes education and awareness, thus the creation of this website is to brief citizens and inform them about potential risks and dangers of anomalies, and ZPD’s ongoing efforts to protect them.  
                <br>
                <br>
                The organization's commitment to securing and eradicating anomalies is reflected in its emphasis on international cooperation, as SDP collaborates with other countries to share knowledge and resources in the global fight against anomalous threats. The ZPD’s success is attributed to its military strengths which are adaptability, constantly evolving its strategies to address new and emerging anomalies.

            </p>
        </div>

        <h2>
            Important Employees
        </h2>

        <div class="employeepart-about">
            <img src="images/vida.jpg" alt="picture of vida">
            <p>
                <b>Head of Research Department, Marc Andrei Vida</b>
                <br>
                <br>
                A brilliant and accomplished individual who serves as the president of the Research Department and is a 
                key asset within the SDP. With a remarkable intellect and a stellar academic background, Vida’s mind is 
                second to none. He leads the development of Nano-infusion body armor and spearheads the development of weapons. 
                He and his handpicked group of scientist's research captured anomalies to determine if they’d be useful for the 
                advancement of humanity. In his mind lies humanity's existence. 
            </p>
        </div>

            
        <div class="employeepart-about">
            
            <img src="images/allen.png" alt="picture of allen">
            <p>
                <b>Head of Administration, Allen Payad</b>
                <br>
                <br>
                The right-hand man of the Director, known for his exceptional organizational and administrative skills 
                it’s no wonder he got recruited by the Director to be the front leader of the SDP organization. Possessing 
                a keen eye for talent and a bright mind to multi-task the bureaucracy of the SDP. His strategic planning and
                 tactical organization ensure the SDP works like a well-oiled machine. 
            </p>
        </div>

        
        <div class="employeepart-about">
            <img src="images/alliyah.jpg" alt="picture of alliyah">
            <p>
                <b>Head of Design and Marketing, Alliyah Hernandez</b>
                <br>
                <br>
                Recruited by Allen to ease up the bureaucracy of the SDP, her talents exceed everyone’s expectations as she drew up 
                plans and reforms that make up the SDP organization as we know today. She got herself a promotion to be Head of Design 
                and Marketing, a position that was solely created just for her. Now with her the SDP enjoys a steady supply of manpower 
                without the headaches and chaos of the many branches and departments within the SDP all thanks to her. 
            </p>
        </div>

        
        <div class="employeepart-about">
            <img src="images/kenshin.jpg" alt="picture of kenshin">
            <p>
                <b>Head of Security, Kenshin Soriano.</b>
                <br>
                <br>
                The forefront of the security operations of the renowned SDP organization, brought up by the leader during its creation. 
                His background remains to all save for a few, his ability to instill discipline and strategic planning allows the soldiers
                 of the SDP to have the courage to take up arms against the unknown. With a military mind better than most, his 
                 quick-thinking and flexibility allows for a rapid deployment of guards and soldiers to safeguard the world from the 
                 anomalies.
                
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
    
    <script src="js/bootstrap.js"></script>
</body>
</html>