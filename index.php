<?php
include('db.php');

session_start();

if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    
    header("Location: https://cloud.google.com/");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background: url('Images/cloud1.jpg') no-repeat center center fixed; background-size: cover;">
    <h2 style="color: white; background-color:rgba(0,0,0,0.6); font-weight: bold; font-size: 35px;">Login to enter the world of Google cloud here  <i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;</h2>
    <br>
    <div class="container">
        <form action="login.php" method="POST" class="form">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" style="background-color: #ed28cf">Login</button>
            <div class="signup-link">
                Not registered yet? <a href="signup.php"><span style="color: #ed28cf">Click here to sign up</span></a>
            </div>
        </form>
    </div>
</body>
</html>

