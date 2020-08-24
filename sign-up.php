<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    
</head>
<body>
    
    
    <p style="text-align: center; font-family: 'Abel', sans-serif; font-size: 25px; 
    "><strong>SIGN UP</strong></p>
   
   <br>

    <div id="form_box">
        <form action="sign-up.php" method="POST">
            
            <label for="EMAIL">EMAIL</label><br>
            <input class="input_field" name="email" type="email" placeholder="hellocannot@gsc.com" size="31" required>

            <br><br>

            <label for="PASSWORD">PASSWORD</label><br>
            <input class="input_field" name="password" type="password" size="31" required>
    
            <br><br>

            <label for="CONFIRM PASSWORD">CONFIRM PASSWORD</label><br>
            <input class="input_field" name="confirm-password" type="password" size="31" required>         
    
            <br><br>

            <label for="PHONE NUMBER">PHONE NUMBER</label><br>
            <input class="input_field" name="phone" type="tel" placeholder="012-3456789" size="31" pattern="[0-9]{3}-[0-9]{7,8}" required>
    
            <br><br>
            
    
            <p style="text-align: center;">
                <button id="RegisterBacon" type="submit" name="Register">
                    <img src="Icons/RegisterBacon.png" width="230" height="110" alt="submit" />
                </button>
            </p>
        </form>  
    </div>
        

    <?php

        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirm-password"];
        $phone = $_POST["phone"];

        echo $email;
        echo $password;
        echo $confirmpassword;
        echo $phone;

    ?>
</body>
</html>