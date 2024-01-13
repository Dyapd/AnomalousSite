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
    <title>Contact Us</title>
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
                    <a href="aboutUs.html">About</a>
                    <a href="entryList.html">Entry List</a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-login">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main-contact">

        <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="#" alt="Logo">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action=""> <!-- put php here -->
                            <p>
                            Username:
                            </p>
                            <input type="text" id="username "name="username">
                            <p>
                            Password:
                            </p>
                            <input type="text" id="password "name="password">
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Login</button>
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
                        <form action=""> <!-- put php here -->
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
                        <button type="button" class="btn btn-primary">Report</button>
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
                        <form action=""> <!-- put php here -->
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
                        <button type="button" class="btn btn-primary">Report</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-container-contact">
            <h1>
                Contact Us
            </h1>
        </div>

        <div class="left-container-contact">
            
            <hr>
            
            <h2>
                Reach us at:
            </h2>
            <br>
            <br>
            <p>
                <img src="images/mailicon.png" alt="" class="logo-contact">
                emailaddress@address.com
            </p>
            <br>
            <p>
                <img src="images/phoneicon.png" alt="" class="logo-contact">
                0964-xxxx-xxx
            </p>
            <br>
            <hr>
        </div>

        <div class="right-container-contact">
            <hr>

            <h2>
                Emergency Hotline:
            </h2>
            <br>
            <br>
            <p>
                <img src="images/phoneicon.png" alt="" class="logo-contact">
                0964-xxxx-xxx
            </p>


        </div>


        <div class="bottomleft-container-contact">
            <h2>
                Social Media Links
            </h2>
            <div>
                <ul>
                    <li>
                        <a href="#">
                        <img src="images/fbicon.png" alt="fb logo " class="logo-contact">
                        facebookname
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/instagramicon.png" alt="instagram logo" class="logo-contact">
                        instagram
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/twittericon.png" alt="twitter logo " class="logo-contact">
                        twitter
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="bottomright-container-contact">
            <img src="#" alt="placeholderimage">
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

    <script src="js/bootstrap.js"></script>
</body>
</html>