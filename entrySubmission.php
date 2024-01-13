<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="layouts.css">
    <link rel="stylesheet" href="modules.css">
    <title>Entry Submission</title>
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
                    <a href="aboutUs.html">About</a>
                    <a href="contactUs.html">Contact</a>
                    <a href="faq.html">FAQ</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main-entrysubmission">

        <div class="container">
        <h1>
            Entry Submission
        </h1>
        <form name="entryForm" action="database/entrySubmission.php" class="entrysubmission-form" method="post" enctype="multipart/form-data"
         required>    
            <br>

            <label for="name" class="menu-form">Name*:</label> <br>
            <input type="text" class="textFields-form" name="name" required> <br>

            <label for="anomalylocation" class="menu-form">Anomaly Location*:</label> <br>
            <input type="text" class="textFields-form" name="location" required> <br>

            <label for="investigationtitle" class="menu-form">Investigation Name (Title)*:</label> <br>
            <input type="text" class="textFields-form" name="title" required> <br>

            <label for="report" class="menu-form">Investigation Report*:</label> <br>
            <textarea name="report" id="report" rows="10" class="textFields-form" name="report" required></textarea> <br>

            <label for="imgrep" class="menu-form">Photo:</label>
            <input type="file" id="fileInput" class="inImg-form" name="img" accept=".jpg, .jpeg, .png"> <br>   

            <div class="selectmenu" class="menu-form">
                <select name="type" id="type" class="menu-form" required > 
                    <option value="Object">Type: Object</option>
                    <option value="Entity">Type: Entity</option>
                    <option value="Event">Type: Event</option>
                    <option value="Place">Type: Place</option>
                </select>
            </div>

            <br>

            <div class="selectmenu" >
                <select name="threat" id="threatLevel" class="menu-form" required> 
                    <option value="Vicinity">Threat Level: Vicinity</option>
                    <option value="Local">Threat Level: Local</option>
                    <option value="Regional">Threat Level: Regional</option>
                    <option value="Continental">Threat Level: Continental</option>
                    <option value="Global">Threat Level: Global</option>
                </select>
            </div>

            <br>

            <div class="selectmenu">
                <select name="status" id="status" class="menu-form" required> 
                    <option value="Unknown">Status: Unknown</option>
                    <option value="Secured">Status: Secured</option>
                    <option value="Cooperative">Status: Cooperative</option>
                    <option value="Terminated">Status: Terminated</option>
                </select>
            </div>

            <br>

            <button class="btn btn-primary">
                Submit
            </button>
        </form>

    </div>
    </main>

    <footer>
        <a href="">Feedback</a>
        <a href="termsAndAgreements.html">Terms and Agreements</a>
        <a href="privacy.html">Privacy</a>
    </footer>

    <script src="js/bootstrap.js"></script>
    <script src="script/entryValidation.js"> </script>
</body>
</html>