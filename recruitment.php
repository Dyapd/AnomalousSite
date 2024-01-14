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
    <title>Document</title>
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

    <main class="main-recruitment">

                        
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


        <h1>
            ZPD Departments
        </h1>
        <p>
            The ZPD is made up of various departments all working together in a common goal. To secure, protect and document anomalies. There are four departments; Security, Investigation, Containment and Research
        </p>

        <div class="buttons-recruitment">
            <button class="btn-sec-rec" id="btn-sec-rec">Security</button>
            <button class="btn-inv-rec" id="btn-inv-rec">Investigation</button>
            <button class="btn-con-rec" id="btn-con-rec">Containment</button>
            <button class="btn-res-rec" id="btn-res-rec">Research</button>
        </div>


        <!-- sec rec class is for security! -->


        <div class="sec-rec" id="sec-rec">
            <!-- h1 for this -->
            <h1>
                Security Department
            </h1>

            <!-- p for text -->
            <p style="font-style: italic;">
                "Men, we are the first, last and often only line of defence Earth has against what is out there. You and that fine piece of issued  weaponry you hold in your hands is all that is keeping humanity alive.""
                <br>
                <br>
                - Commodore Kenshin's speech during the 1st Founding of the Security Department.
            </p>  

            <p>
                The Security Department is responsible for guarding and safe-keeping the anomalies within the Z.C.D base, 
                They are trained to be desensitized to death and trained to be immune to psychological and mental reactions. 
                They have no names are only to be counted in numbers but those who’ve prove themselves worthy will be given a 
                “name”. They’re given the world’s finest weapons and technology and they shall know no fear.
            </p>

            <!-- this is for the lines in page -->
            <hr class="line-recruitment">

            <!-- copypaste these 2 lines to put image in -->
            <!-- put image in image folder then put the path in src -->

            <div class="image-recruitment">
                <img src="images/guardsmanlogo.png" alt="logo of guardsmen">
                <img src="images/guardsmanpic.png" alt="picture of guardsmen">
            </div>

            <!-- h2 for subheadings -->
            <h2>
                Guardsmen
            </h2>

            <!-- p for text -->
            <!-- br for next line -->
            <p>
                Tasked with the basic operations within the Z.C.D, these guards form the military backbone and can 
                provide services ranging from facility security, to first aid and being the first responders when an anomaly is found. 
                <br>
                <br>

                When applying, Physical and Intellectual test will be provided as to assess the person’s capabilities to which company 
                he’ll be assigned. Different companies have different philosophies, training, and strengths which makes the guardsmen 
                useful for many situational events.
            </p>

            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>

            <hr class="line-recruitment">

            <h2>
                Shock Troops
            </h2>

            <p style="font-style: italic;">
                “There is no form of fear that envelop to us; there is no form of actions beyond our means; there is no enemy outside our reach. We are the blade that protects the world from the unknown.”
                <br>
                <br>
                -Mobile Hounds
            </p>

            <div class="image-recruitment">
                <img src="images/shocktroopslogo.png" alt="logo of shock troops">
                <img src="images/shocktroopspic.png" alt="picture of shock troops">
            </div>

            

            <p>
                The Elite Squad of the Z.C.D which are deployed when a dangerous hostile anomaly is found. 
                They’re given cutting-edge technology and nano type body armor that provides the most protection
                 without sacrificing too much mobility. Their weapons ranges from assault rifles to anti-tank guns.
                 <br>
                 <br>

                 Z.C.D Shock troops varied from regiments to regiments but one thing they all have in common is that 
                 they’re all dangerous and should you see one of them is to be at a place at the wrong time.
            </p>

            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>

            <hr class="line-recruitment">

            <h2>
                The Wielders
            </h2>


            <p style="font-style: italic;">
                "Some may question your right to wield anomalies that can destroy and bring ruin to society. Those who understand know that you and I have every right to wield them."
                <br>
                <br>
                “You have to fight fire with fire.” 
                <br>
                <br>

                -High Director of the Administration “Allen”.
            </p>

            <div class="image-recruitment">
                <img src="images/wielderslogo.png" alt="logo of wielders">
                <img src="images/wielderspic.png" alt="picture of wielders">
            </div>

            
            <p>
                Men with high responsibility on their shoulders as they wield incredible powers that can destroy the very
                 fabrics of reality itself. Only with proven loyalty and with high compatibility towards the anomaly that 
                 they hold can only they are permitted to wield these powers.
                 <br>
                 <br>
                 Should a wielder go rogue, it’ll result in a lvl 5 breach and all ZCD’s troops have an order to kill and destroy said Wielder.
            </p>


            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>

            </button>

            <hr class="line-recruitment">

        </div>

         <!-- inv rec class is for investigation! -->

        <div class="inv-rec" id="inv-rec">
            <h1>
                Investigation Department
            </h1>

            

            <p>
                The Investigation Department responsible for surveying, exploring and probing the unknown. 
                Responsible for scouting the world for anomalies and tracking them down with precision. They are 
                tasked with investigating the site for anomalies.
                <br>
                <br>
                In the back-end even the light cast a shadow. 
                In the Z.C.D corruption and whistleblowers still exist and There are those who watch them within the shadows.
            </p>



            <hr class="line-recruitment">

            <h2>
                Mobile Hounds
            </h2>

            <p style="font-style: italic;">
                “Fast, Efficient, and Precise.”
                <br>
                <br>
                -Mobile Hounds 
            </p>  

            <div class="image-recruitment">
                <img src="images/mobilehoundslogo.png" alt="logo of mobile hounds">
                <img src="images/mobilehoundspic.png" alt="picture of mobile hounds">
            </div>

            <p>
                The mobile hound are tasked with keeping an eye on anomalies, a combination of 
                Security and Investigation department creates soldiers that excels at tracking 
                down anomalies with the information they are provided by the Research Department. 
                They’re provided with lightweight weapons with silencers and with the same type of body armor
                of the Z.C.D Shock Troops.
                <br>
                <br>
                Though the mobile hounds may be shorter in numbers compared to Z.C.D Shock Troops, they’re exceptionally good at doing hunting and tracking down anomalies that their numbers are never a problem.
            </p>

            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>

            <hr class="line-recruitment">

            <h2>
                The Watchers
            </h2>

            <p style="font-style: italic;">
                "That which is unknown and unseen always commands the greatest fear."
                <br>
                <br>
                - The Watchers 
            </p> 

            <div class="image-recruitment">
                <img src="images/watcherslogo.png" alt="Unavailable">
            </div>

            <p>
                ZCD's most secretive and hidden branch that only people with utmost loyalty to the top directors. 
                They’re shrouded in mystery and the only thing we know about them is that they’re that ones that handle
                internal affairs within the Z.C.D
            </p>

            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>
            
            <hr class="line-recruitment">

            
        </div>

         <!-- con rec class is for containment! -->

        <div class="con-rec" id="con-rec">
            <h1>
                Containment Department
            </h1>

            <p>
                The Containment Department is responsible for capturing and transporting anomalies within different 
                Z.C.D bases, if they can’t transport it or the Anomaly is bound within a territory then infamous Mobile 
                Office Maker also known as M.O.M will be deployed. They have all kinds of transport to secure and bound 
                anomalies whenever by land, sea, or air nothing cannot be reach by the Containment Department.
            </p>

            <hr class="line-recruitment">

            <h2>
                Valkyries
            </h2>

            <p style="font-style: italic;">
                "Get our commission, Capture these f@cks, Get paid. In that order."
                <br>
                <br>
                -3rd Valkyrie Captain “Vida” talking to his valkyries.
            </p>  

            <div class="image-recruitment">
                <img src="images/valkyriespic.png" alt="picture of valkyries">
            </div>

            
            <br>

            <p>
                The Valkyries are a team of personnel that specializes in capturing, containing and transporting 
                anomaly/anomalies to ZCD bases. They used different kinds of vehicles ranging from their Armored Anomaly 
                Carrier (AAC), Government-issued warships and Helicopters with the newest technology.
            </p>

            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>


            <hr class="line-recruitment">

            <h2>
                Mobile Office Maker (M.O.M)
            </h2>

            <p style="font-style: italic;">
                “The Mobile Office Maker are designed to be a forward base, never stepping back against anomalies that threatens our world”
                <br>
                <br>
                -Director of Design and Technology, Alliyah “Cawl” Belisarius.
            </p>  

            <div class="image-recruitment">
                <img src="images/mompic.png" alt="picture of carrier">
            </div>

            <br>
            <br>

            

            <p>
                The Mobile Office Maker is for a rapid deployment of a temporary base that is used when situation arises 
                that an anomaly cannot be contained and is in need of surveillance. This is also used as an outpost or for 
                future ZCD’s base. This vehicles can transform into a small town-hall like sized building whereas bigger MOM 
                can be as big as a multi-building base.
                <br>
                <br>
                To join in this branch, is to secure the frontier and protect the world.
            </p>


            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>

            <hr class="line-recruitment">
        
        </div>

         <!-- res rec class is for research! -->

        <div class="res-rec" id="res-rec">
            <h1>
                Research Department
            </h1>
            

            <p>
                The Research Department responsible for creating the world’s weapon and shield to be used against the unknown, 
                threats that threatens humanity and reality itself. They’re the ones that experiment and learn about anomalies 
                to know if they/it should be exterminated or something that can help humanity achieve the next big step. 
                <br>
                <br>
                Their studies ranges the basic from the smallest anomaly to spiritual and paranormal threats to cosmic threats that
                 dwarfs the Earth. Only they hold the key on how to prevent our extinction.
            </p>

            <hr class="line-recruitment">
            <h2>
                Conventional Branch
            </h2>

            <p style="font-style: italic;">
                “Grounded in reality but infinite in potential”
                <br>
                <br>
                — Conventional Branch Head “Alpha”
            </p>  

            <div class="image-recruitment">
                <img src="images/conventionalpic.png" alt="picture of conventional branch">
            </div>

            

            <p>
                Conventional Branch are scientist that studies that are within the confines of “reality”. They create weapons 
                and study about anomalies. They predict scenarios and learn about anomalies on how to use them or exterminate
                them if deemed hostile or unneeded.
                <br>
                <br>
                Scientists even though they work behind, they have one of the most highest casualties with the most being experimental 
                failures and anomaly breaches.
            </p>

            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>

            </button>

            <hr class="line-recruitment">

            <h2>
                Paranormal Branch
            </h2>

            <p style="font-style: italic;">
                “When reality darkens and blurs, only us can see what’s behind the veil.”
                <br>
                <br>
                — Paranormal Branch Head “Ghost”
            </p>  

            <div class="image-recruitment">
                <img src="images/paranormalpic.png" alt="picture of paranormal branch">
            </div>

            <p>
                The Paranormal Branch deals with the existence of unconventional anomalies that defy the 
                laws of sciences. They study ways on how to deal paranormal anomalies to prevent its dangers 
                to humanity as a single one of them can result in a devastation of human life since they can’t
                 be dealt with conventional means.
            </p>

            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>

            <hr class="line-recruitment">

            <h2>
                Cosmic Branch
            </h2>

            <p style="font-style: italic;">
                "The Quest for Knowledge drives us to the stars, Cosmic threats and the unknown awaits us, 
                the secrets of the world waiting to be revealed.
                <br>
                <br>
                — Cosmic Branch Head “Omega”
            </p>  

            <div class="image-recruitment">
                <img src="images/cosmicpic.png" alt="picture of cosmic branch">
            </div>
            
            <p>
                This department primary mission is to comprehend, anticipate, and counteract cosmic 
                threats originating from beyond Earth's atmosphere. The division focuses on the identification of 
                potential celestial hazards, ranging from asteroid impacts and solar flares to extraterrestrial entities with 
                the potential to influence or endanger the planet.
            </p>

            <div class="button-con-rec">
                <a href="contactUs.php"><button class="btn-apply-rec">Inquire</button></a>
            </div>


            <hr class="line-recruitment">


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
    <script src="script/script-recruitment.js"> </script>
</body>
</html>