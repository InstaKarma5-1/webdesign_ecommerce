<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Create database
$sql = "CREATE DATABASE bayconegg";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully<br>";
} else {
  echo "Error creating database: " . $conn->error;
}

$dbname = "bayconegg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create user table
$sql = "CREATE TABLE user (
    userId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    passwd VARCHAR(50) NOT NULL,
    phone VARCHAR(12) NOT NULL,
    isAdmin BOOLEAN NOT NULL DEFAULT 0
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table 'user' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

//Insert admin into user table
$sql = "INSERT INTO user (email, passwd, phone, isAdmin)
        VALUES ('admin@bayconeggs.com', 'admin', '019-6969691', true)";

if ($conn->query($sql) === TRUE) {
  echo "Admin account created successfully<br>";
} else {
  echo "Error when creating admin account: " . $conn->error;
}

// Create security_question table
$sql = "CREATE TABLE security_question (
  userId INT(6) UNSIGNED AUTO_INCREMENT,
  question VARCHAR(255) NOT NULL,
  answer VARCHAR(255) NOT NULL,
  CONSTRAINT
  FOREIGN KEY (userId) REFERENCES user(userId)
  ON UPDATE CASCADE
  ON DELETE CASCADE
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table 'security_question' created successfully<br>";
} else {
  echo "Error creating table: " . $conn->error;
}

// Create games table
$sql = "CREATE TABLE games (
gameId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
gameName VARCHAR(255) NOT NULL,
gameDesc TEXT NOT NULL,
gamePic VARCHAR(255) NOT NULL,
gamePrice DOUBLE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
echo "Table 'games' created successfully<br>";
} else {
echo "Error creating table: " . $conn->error;
}

$conn->close();
?>