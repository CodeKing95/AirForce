<?php
include("loginserv.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirStar Login</title>
    <link rel="stylesheet" href="airstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="login">
        <form action="">
            <h1>AirStar Login</h1>
            
            <div class="input-box">
            <input type="text" placeholder="Username" id="crew" name="crew" required>
            
            </div>

            <div class="input-box">
            <input type="password" placeholder="Password" id="pass" name="pass" required>
           
            </div>

            
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
    
            <input type="submit" value="Login"  class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>
<span><?php echo $error; ?></span>
</body>
</html>