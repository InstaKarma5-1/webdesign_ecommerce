<?php
    $email = $_POST["email"];
    $userPassword = $_POST["password"];
    $confirmpassword = $_POST["confirm-password"];
    $phone = $_POST["phone"];

    $servername = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "bayconegg";
    $valid = false;

    // Create connection
    $conn = new mysqli($servername, $username, $dbPassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $email = test_input($_POST["email"]);
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $emailErr = "Invalid email format";
    // }
    
    // $sql = "SELECT email FROM user WHERE email = $email";
    
    // if ($email == $conn->query($sql)) {
    //     echo "The email already exists.";
    //     return false;
    // }

    $sql="SELECT * FROM user WHERE email = '$email';";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) { 
        $row = mysqli_fetch_assoc($res);    
        if($email==$row['email']) 
        {
            echo "Email already exists";
            exit;
        }
    }
    else{
        echo "*$!?!* ok lahhh" . "<br>"; 
        $valid = true;
    }

    // After everything is validated
    if($valid == true){
        $sql = "INSERT INTO user (email, passwd, phone)
        VALUES ('$email', '$userPassword', '$phone')";
    
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    


    

    $conn->close();
?>