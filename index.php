<?php 
    include_once 'header.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dudlaj.me</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<section class="index-login">
    <div class="wrapper">
   <!--    <div class="index-login-signup">
            <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <input type="text" name="email" placeholder="E-mail">
            <br>
            <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div> -->
        <div class="login-form">
            <form action="includes/login.inc.php" method="post">
            <div><h2>dudlaj.me</h2></div>
                 <div class="input-box">
                     <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="uid" placeholder="Username">
                 </div>
              <div class="input-box">
                     <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                     <input type="password" name="pwd" placeholder="Password">
                 </div>
                 <div class="remeber-forgot">
                    <label><input type="checkbox">Remember me</label>
                 <a href="#">Forgot Password</a>
                 </div>
            <br>
            <button type="submit" name="submit">Login</button>
            <div class="login-register">
                <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
            </div>
            </form>
        </div>
    </div>
</section>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>