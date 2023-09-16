<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login by admin</title>
    <link rel = "stylesheet" href="login_style.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>

        <form action = "#" method="POST" autocomplete = "off">
            <div class="form">
                <input type = "text" name = "username" class = "textfiled" placeholder="Username">
                <input type = "password" name = "password" class = "textfiled" placeholder="Password">

                <div class="forgetpass">
                    <a href="#" class="link" onclick="message()"> Forgot Password?</a> 
                </div>
                <input type="submit" name = "login" value="Login" class = "btn">
                <div class="signup">New Member?  <a href="#" class="link">SignUp here</a></div>
            </div>
        </form>
    </div>

    <script>
        function message(){
            alert('Server down.Try again later!');
        }
    </script>
</body>
</html>

<?php
    include("connection.php");

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        $query = "Select * from login_passwords WHERE Email='$username' && Password = '$pwd'";
        $data= mysqli_query($conn,$query);

        $total= mysqli_num_rows($data);

        
        if($total ==1){
           // header('location : display.php');
           $_SESSION['user_name']=$username;
           ?><meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php"/><?php
        
        }
        else{
            echo"Login failed";
        }
    }
?>