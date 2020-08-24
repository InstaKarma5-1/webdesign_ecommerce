function validate(){

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;
    const emailRegex = RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

    if(!email.match(emailRegex)){
        document.getElementById("emailValidation").style.display = "block";
        document.getElementById("RegisterBacon").disabled = true;
    } 
    else if(!password.match(confirmPassword)){
        document.getElementById("passwordValidation").style.display = "block";
        document.getElementById("RegisterBacon").disabled = true;
    }
    else{
        document.getElementById("RegisterBacon").disabled = false;
        document.getElementById("passwordValidation").style.display = "none";
        document.getElementById("emailValidation").style.display = "none";
    }

}