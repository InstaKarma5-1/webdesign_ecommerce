<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baycon & E.GG</title>
        <link rel="stylesheet" type="text/css" href="css/forgot-password.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
    </head>

    <body>
        <?php include "navbar.html"; ?>
        
        <div id="form_box">

            <form action="forgot-password.php" method="post" id="email-form">
                <label for="email">Please enter your email:</label><br>
                <input id="email" class="input_field" name="email" type="email" size="31" required>
                <input type="submit">
            </form>

            <p class="hidden" id="sec-question"></p>
            <label for="sec-answer" class="hidden">ANSWER</label><br>
            <textarea class="text_area hidden" id="sec-answer" name="sec-answer" 
            placeholder="Please input the answer to your question" cols="30" rows="5" required></textarea>

            <p style="text-align: center; margin: 0px;" class="hidden"><a id="reset-link" href="#">Reset Password</a></p>
        </div>

        <!-- 1. Enter email, check if email exists
             2. Change Password, Confirm Change Password
             3. UPDATE passwd in SQL-->
        
        <?php include "footer.html"; ?>
    </body>
</html>