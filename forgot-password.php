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

            <form action="validate-email.php" method="post" id="email-form">
                <label for="email">Please enter your email:</label><br>
                <input id="email" class="input_field" name="email" type="email" size="31" required>
                <input type="submit">
            </form>
        </div>

        <!-- 
            User input email
            Check if email valid
            Pass to validateEmail.php
            If valid, we return questions in string, no redirect, else error
            User answer question
            Pass to validateAnswer.php
            If valid print password in string, no redirect, else error

            https://stackoverflow.com/questions/16127142/modify-html-attribute-with-php/16139844
        -->
        
        <?php include "footer.html"; ?>
    </body>
</html>
