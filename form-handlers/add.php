<?php 
    session_start();

    $servername = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "bayconegg";

    // Create connection
    $conn = new mysqli($servername, $username, $dbPassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SESSION["email"] != "admin@bayconeggs.com" ) {
        echo '
        <script>
            alert("You do not have access to this page! ⊂(⊙д⊙)つ");
            window.location = "index.php";
        </script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baycon & E.GG</title>
</head> 

<body>
    <h1>Add Game</h1>

    <?php

        if(isset($_POST['update']) && $_POST['update']==1) {
            $gameNameUpdate = $_POST['game-name'];
            $gameDescUpdate = $_POST['game-desc'];
            $gamePicUpdate = $_POST['game-pic'];
            $gamePrice_RMUpdate = $_POST['game-price'];
            echo "Name: " . $gameNameUpdate . "<br>";
            echo "Description: " . $gameDescUpdate . "<br>";
            echo "Picture: " . $gamePicUpdate . "<br>";
            echo "Price : " . $gamePrice_RMUpdate . "<br>";
        
            $sql="INSERT INTO games (gameName, gameDesc, gamePic, gamePrice_RM)
            VALUES ('$gameNameUpdate','$gameDescUpdate','$gamePicUpdate','$gamePrice_RMUpdate');";
            if (mysqli_query($conn, $sql)) {
                echo '
                <script>
                    alert("You have added the data successfully. \( ﾟヮﾟ)/");
                    window.location = "../admin.php";
                </script>
                ';
            } else {
                echo '  
                <script>
                    alert("Error when adding data. ┏༼ ◉ ╭╮ ◉༽┓ \n The error was: "'. $conn->error . '");
                    window.location = "../admin.php";
                </script>
                ';
            }
        }
        else { ?>
        <table>
            <form method="POST" action="">
                <tr>
                    <td><label for="game-name">Game Name</label></td>
                    <td> : <input id="game-name" type="text" name="game-name" required placeholder="Insert Game Name"></td>
                </tr>
                <tr>
                    <td><label for="game-desc">Game Description</label></td>
                    <td> : <textarea id="game-desc" name="game-desc" required cols="50" rows="10" placeholder="Insert Description Here"></textarea></td>
                </tr>
                <tr>
                    <td><label for="game-pic">Game Picture</label></td>
                    <td> : <input id="game-pic" type="text" name="game-pic" required placeholder="Remember to upload pictures to images/products"></td>
                </tr>
                <tr>
                    <td><label for="game-price">Game Price</label></td>
                    <td> : <input id="game-price" type="text" name="game-price" required placeholder="Insert Game Price 🤑"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>&nbsp&nbsp<input type="submit" value="Add"></td>
                </tr>
                <input type="hidden" name="update" value="1" />
            </form>
        </table>
    <?php };?>
</body>
</html>