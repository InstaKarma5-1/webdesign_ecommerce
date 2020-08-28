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
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE bayconegg";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
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

// sql to create table
$sql = "CREATE TABLE user (
    userId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    passwd VARCHAR(50) NOT NULL,
    phone VARCHAR(12) NOT NULL
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table 'user' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

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
  echo "Table 'security_question' created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>