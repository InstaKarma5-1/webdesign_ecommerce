<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baycon & E.GG</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet"> 
    </head>

    <body>
        <?php 
            include "navbar.html";

            if (isset( $_SESSION["username"])) {
                // Grab user data from the database using the user_id
                // Let them access the "logged in only" pages
                echo $_SESSION["username"];
                echo '
                <script>
                    var signup = document.getElementById("sign-up");
                    var login = document.getElementById("login");
                ';
                echo "signup.textContent = 'WELCOME, " . $_SESSION['username'] . "';";
                echo '
                    signup.href = "#";
                    login.textContent = "LOGOUT";
                    login.href = "logout.php"; 
                    
                </script>
                ';
            }
        ?>

        <div class="search_bar">
            <input id="main_search" name="Search" type="text" placeholder="Searching for games?">
        </div>

        <div class="slideshow-container">
            <div class="images fade">
                <a href="#atri-game"><img class="image-links" src="images/index/atri-slideshow.png" style="width:100%;"></a>
            </div>

            <div class="images fade">
                <a href="#nekopara-game"><img class="image-links" src="images/index/nekopara-slideshow.png" style="width:100%;"></a>
            </div>

            <div class="images fade">
                <a href="#sao-game"><img class="image-links" src="images/index/sao-slideshow.png" style="width:100%;"></a>
            </div>
            <br>

            <div style="text-align: center;">
                <span class="bar" onclick="currentSlide(0)"></span>
                <span class="bar" onclick="currentSlide(1)"></span>
                <span class="bar" onclick="currentSlide(2)"></span>
            </div>

        </div>
        <br><br>
        
        <p id="title"><b>BEST SELLERS</b></p>
        <div class="catalogue" id="best-seller">
            <div class="game">
                <a href="#dead_by_daylight"><img class="image-links" src="images/index/dead-by-daylight_large.png" alt="Dead by Daylight"></a><br>
                <a href="#dead_by_daylight" class="links">Dead by Daylight</a>
            </div>
            <div class="game">
                <a href="#minecraft"><img class="image-links" src="images/index/minecraft_large.png" alt="Minecraft"></a><br>
                <a href="#minecraft" class="links">Minecraft</a>
            </div>
            <div class="game">
                <a href="#fall_guys"><img class="image-links" src="images/index/fall-guys_large.png" alt="Fall Guys"></a><br>
                <a href="#fall_guys" class="links">Fall Guys</a>
            </div>
        </div>

        <p id="title"><b>UPCOMING GAMES</b></p>
        <div class="catalogue" id="upcoming-games">
            <div class="game">
                <a href="#gtav_vatician_city"><img class="image-links" src="images/index/gtav-vatican-city_large.png" alt="GTA V: Vatician City"></a><br>
                <a href="#gtav_vatician_city" class="links">GTA V: Vatician City</a>
            </div>
            <div class="game">
                <a href="#half-life-3"><img class="image-links" src="images/index/half-life3_large.png" alt="Half-Life 3"></a><br>
                <a href="#half-life-3" class="links">Half-Life 3</a>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
                <a href="#kirby" class="links">Kirby</a>
            </div>
        </div>

        <?php include "footer.html"; ?>
                <a href="#gtav_vatician_city"><img class="image-links" src="images/index/gtav-vatican-city_large.png" alt="GTA V: Vatician City"></a><br>
                <a href="#gtav_vatician_city" class="links">GTA V: Vatician City</a>
            </div>
            <div class="game">
                <a href="#half-life-3"><img class="image-links" src="images/index/half-life3_large.png" alt="Half-Life 3"></a><br>
                <a href="#half-life-3" class="links">Half-Life 3</a>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
                <a href="#kirby" class="links">Kirby</a>
            </div>
        </div>

        <?php include "footer.html"; ?>
                <a href="#gtav_vatician_city"><img class="image-links" src="images/index/gtav-vatican-city_large.png" alt="GTA V: Vatician City"></a><br>
                <a href="#gtav_vatician_city" class="links">GTA V: Vatician City</a>
            </div>
            <div class="game">
                <a href="#half-life-3"><img class="image-links" src="images/index/half-life3_large.png" alt="Half-Life 3"></a><br>
                <a href="#half-life-3" class="links">Half-Life 3</a>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
            </div>
            <div class="game">
                <a href="#kirby"><img class="image-links" src="images/index/kirby_large.png" alt="Kirby"></a><br>
                <a href="#kirby" class="links">Kirby</a>
            </div>
        </div>

        <?php include "footer.html"; ?>
        <!--This script requires body to be loaded before it runs, or else it will not run correctly-->
        <script src="js/index.js"></script>
    </body>
</html>