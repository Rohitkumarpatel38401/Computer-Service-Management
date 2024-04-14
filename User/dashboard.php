<?php
    include("includes/session_set.php");
    include("includes/dbconnect.php");
    $sql="select u_name from users where u_email='$_SESSION[login_user]' or u_phone='$_SESSION[login_user]'";
    $res=mysqli_query($con,$sql) or die(mysqli_error($con));
    $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .sub-content h2{
            color:white; 
            margin: 0 20px;
            padding: 20px 10px;
            background-color: rgb(19, 15, 238); 
            text-align: center;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.178);            
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-container">
           <?php
                include("includes/user-side-nav.php");
           ?>
        </div>
        <div class="right-container">
            <header>
                <?php
                    include("includes/user-header.php");
                ?>
            </header>
            <span id="menu" class="menu">
                <a href="profile.php"> <i class="fa-solid fa-user"></i> Profile</a>
                <a href="change-pass.php"> <i class="fa-solid fa-window-restore"></i> Change Password</a>
                <button onclick="window.location.href='lib/loginUser.php?act=logout'">Log out</button>
            </span>
            <section class="main-content">
                <h2>Dashboard</h2>
                <div class="sub-content">
                   <h2>
                    <marquee behavior="alternate" scrollamount="20" direction="left">Hello Welcome !! <?=$res['u_name']?> !!</marquee>
                </h2>
                </div>
            </section>
            <footer>
                <p>@Copyright Computer Service Management System 2024</p>
            </footer>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
