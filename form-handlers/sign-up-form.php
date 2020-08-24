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
    if (mysqli_num_rows($res) > 0) { // Warning: mysqli_num_rows() expects parameter 1 to be mysqli_result, bool given in line 34
        // output data of each row
        $row = mysqli_fetch_assoc($res);    //fetch a result row as associative array
        if($email==$row['email']) // change it to just else
        {
            echo "Email already exists";
        }
        else{
            echo "*$!?!* ok lahhh"; // don't put it here
            $valid = true;
        }
    }

    //https://codewithawa.com/posts/check-if-user-already-exists-without-submitting-form

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