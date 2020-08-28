function validateEmail(){
    alert("
    <?php
                $email = $_POST["email"];
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

                $sql="SELECT * FROM user WHERE email = '$email';";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) { 
                    $row = mysqli_fetch_assoc($res);    
                    if($email==$row['email']) 
                    {
                        echo '
                        <script src="js/forgot-password.js"></script>
                        ';
                    }
                }
                else{
                    echo '
                    <script type="text/javascript">
                        alert("Invalid email!");
                    </script>
                    ';
                }
            ?>
    ");
}

function revealHidden(){
    var email = document.getElementById("email").value;
    var hidden = document.getElementsByClassName("hidden");
    
    //Reveal hidden
    hidden.className.replace("hidden" , "");

}

function hideHidden(){
    var email = document.getElementById("email").value;
    var hidden = document.getElementsByClassName("hidden");
    
    //To hide hidden 
    hidden.className += "hidden";
}

revealHidden();

var form = document.getElementById("email-form");
function handleForm(event) { event.preventDefault(); } 
form.addEventListener('submit', handleForm);


https://www.w3schools.com/php/php_ajax_database.asp
