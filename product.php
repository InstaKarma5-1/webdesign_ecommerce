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

	$_SESSION["gameId"] = $_GET["gameId"];
	$gameId = $_SESSION["gameId"];
	
	if (empty($gameId)) {
		echo'
		<script>
			alert("The product is not found.");
			window.location = "index.php";
		</script>
		';
	}

	//Getting game information
	//Game Name
	$sql="SELECT gameName, gameDesc, gamePic, gamePrice_RM FROM games WHERE gameId = $gameId;";
	$res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($res);
	$gameName = $row['gameName'];
	$gameDesc = $row['gameDesc'];
	$gamePic = $row['gamePic'];
	$gamePrice_RM = $row['gamePrice_RM'];

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/product.css">
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
		<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
		<script src="js/product.js"></script>
	</head>
	<body>

		<?php include "navbar.php"; ?>

		<div class="p_info_top">
			<div class="p_info_pic">
				<img src ="<?php echo $gamePic; ?>" style="width:65%; height:auto;" alt="logo">
			</div>
			<div class="p_info_top_content">
				<h1><?php echo $gameName; ?></h1>
				<p><?php echo $gameDesc; ?></p>
				
				<div class="p_info_price">
					<h3>TOTAL PRICE:</h3>
					<h2>RM <?php echo $gamePrice_RM; ?></h2>
				</div>
				<img src="icons/addToCartC.png" onclick="addToCart()" style="width:18%; height:auto;">
			</div>
		</div>
		
		<div class="divider"></div>
		
		<div class="p_info_bottom">
			<div class="p_info_bottom_content">
				<h2>YOU MIGHT ALSO LIKE: </h2>
			</div>
			<br>
			<div class="row">
				<div class="column">
					<img src ="images/products/dead-by-daylight.png" style="width:50%; height:auto;" alt="logo">
					<h2>Dead by Daylight</h2>
				</div>
				
				<div class="column">
					<img src ="images/products/minecraft.png" style="width:50%; height:auto;" alt="logo">
					<h2>Minecraft</h2>
				</div>
				
				<div class="column">
					<img src ="images/products/fall-guys.png" style="width:50%; height:auto;" alt="logo">
					<h2>Fall Guys</h2>
				</div>
			</div>
		</div>

		<br>
		
		<?php include "footer.php"; ?>

	</body>
</html>

<?php

$conn->close();

?>