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
        ZPD Home Page
    </title>
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

    

    <main class="main-home">

        

<!-- check if session is empty (not logged in)  -->
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
                        <form id="feedbackform" action="#" method="post"> <!-- put php here -->
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
                        <button form="feedbackform" class="btn btn-primary" name="feedback">Submit</button>
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

        <h1 class="warning-home">
            WARNING! BEWARE!: Most Dangerous Anomaly 
        </h1>
        <hr class="main-line">

        <!-- REMOVE LATER! -->
        <?php if(isset($_SESSION['loggedon'])) : ?>
            <h1>PlaceHolder TEST TEXT</h1>
        <?php endif ?>  

        <div class="content-top-center-home">
            <div class="home-top-container">
                <img src="images/placeholder-img-home.png" alt="Image Unavalaible" class="home-main-img">
                <div class="home-top-box">
                    <h3>
                        Name:
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste aliquid non ipsum illum dolorem sequi aliquam, accusantium voluptate a cupiditate. Officiis est laboriosam reiciendis, ipsam perspiciatis harum nisi quas eaque.  
                    </p>

                    <h3>
                        <br>Active Locations:
                    </h3>
                    <p>
                        * Celebes 
                        <br>* Tidores
                    </p>
                </div>
            </div>
        </div>

        <div class="content-left-home">
            <div class="content-left-top-home">
               
                <a href="#">Active Threats</a>
                

                <div id="pics-active-home" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#pics-active-home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#pics-active-home" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#pics-active-home" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <a href=""><img src="images/samplean.jpg" class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>The Moving City</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href=""><img src="..." class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>The Moving City</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href=""><img src="..." class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>The Moving City</h5>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#pics-active-home" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#pics-active-home" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="content-left-bottom-home">
                <a href="#">Recently Encountered Threats</a>

                <div id="pics-recent-home" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#pics-recent-home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#pics-recent-home" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#pics-recent-home" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <a href=""><img src="images/samplean2.jpg" class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Borealis Worm</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href=""><img src="..." class="d-block w-100" alt="..."></a>
                      </div>
                      <div class="carousel-item">
                        <a href=""><img src="..." class="d-block w-100" alt="..."></a>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#pics-recent-home" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#pics-recent-home" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>

        <div class="content-right-home">
            <h1>
                Announcements:
            </h1>
           <hr>

           <div class="content-right-news-home">
           <h4>
            The basic guide to anomalies
           </h4>
           <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae qui magnam libero saepe cum temporibus unde voluptate cumque adipisci debitis inventore ipsa quasi iusto, provident harum dolorum! Obcaecati, ipsum.
           </p>
            </div>
           
           <br>

           <hr>
           <div class="content-right-news-home">
            <h4>
             New bases in South Africa
 
            </h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet consequuntur assumenda natus quasi omnis praesentium accusantium aliquam ex hic aut neque adipisci, quos debitis? Quam eaque voluptatem modi accusantium?
            </p>
            </div>
           <br>
           
           <hr>
            </ul>
        </div>

        <div class="content-bottom-home">
            <h4>
                Guide to ZPD
            </h4>
            
            <br>

            <p>
                With the rise of anomalies in the 1950’s. The world then has since faced numerous dangers. From the attempted invasion of the alternate world ‘Earth Bet’ to the various city ending calamities that roam our world today.
            </p>

            <br>

            <p>
                This website was made by the SPD International to act as an information site for the public. So that you know which threats inhabit your area, recognize which anomalies to avoid and as another hub for information regarding anomalies. 
            </p>

            <br>

            <p>
                To learn more about the terminologies used by our organization, please click Learn More.    
            </p>


            <a href="terminologies.php">Learn More</a>
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
    <script src=""></script>
</body>

</html>