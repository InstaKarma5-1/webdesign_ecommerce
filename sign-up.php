<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <script src="js/sign-up.js"></script>

</head>
<body>
    <p style="text-align: center; font-family: 'Abel', sans-serif; font-size: 25px; text-shadow: 0px 0px 10px #29A19C;
    "><strong>SIGN UP</strong></p>
   
   <br>

    <div id="form_box">
        <form action="form-handlers/sign-up-form.php" method="post">
            
            <label for="email">EMAIL</label><br>
            <input class="input_field" id="email" name="email" type="email" placeholder="hellocannot@gsc.com" size="30" onblur="validate()" required>
            
            <p id="emailValidation">Enter proper email woi diu lei nyasing</p>

            <br><br>

            <label for="password">PASSWORD</label><br>
            <input class="input_field" id="password" name="password" type="password" size="30" onblur="validate()" required>
    
            <br><br>

            <label for="confirm-password">CONFIRM PASSWORD</label><br>
            <input class="input_field" id="confirm-password" name="confirm-password" type="password" size="30" onblur="validate()" required>         
    
            <p id="passwordValidation">Password do not match! diu lei nyasing</p>

            <br><br>

            <label for="phone">PHONE NUMBER</label><br>
            <input class="input_field" id="phone" name="phone" type="tel" placeholder="012-3456789" size="30" pattern="01[0-9]-[0-9]{7,8}" onblur="validate()" required>
    
            <br><br>
            
            <p style="text-align: center;">
                <button id="RegisterBacon" type="submit" name="Register" disabled>
                    <img src="Icons/RegisterBacon.png" width="230" height="110" alt="submit" />
                </button>
            </p>
        </form>  
    </div>
        

    
</body>
</html>