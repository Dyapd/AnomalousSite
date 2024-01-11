<?php
    include "database/functions.php";
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
        Entry Template
    </title>
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

    <main class="main-entry">

    
    <?php foreach($query as $q): ?>
        
        <div class="content-top-entrytem">
            <h1>Entry <?php echo $q['id']?> </h1>
        </div>

        <div class="content-left-entrytem">
            <h2>Name:</h2>
            <p> <?php echo $q['title']?> </p>

            <h2>Classification:</h2>
            <p> <?php echo $q['type']?> </p>

            <h2>Threat Level:</h2>
            <p> <?php echo $q['threat']?> </p>
        </div>

        <div class="content-right-entrytem">
            <img src="images/<?php echo $q['image']?>" alt="Image Unavailable" >
        </div>

        

        <div class="content-bottom-entrytem">
            <br>
            <br>
            

            <h4>
                Description:
            </h4>
            <p>
                <?php echo $q['report']?>
            </p>
            
            <div class="entry-line"> 

        </div>
            
        </div>

        <?php endforeach; ?>
    </main>

    <footer>
        <a href="">Feedback</a>
        <a href="termsAndAgreements.html">Terms and Agreements</a>
        <a href="privacy.html">Privacy</a>
    </footer>


    <script src="js/bootstrap.js"></script>
</body>
</html>