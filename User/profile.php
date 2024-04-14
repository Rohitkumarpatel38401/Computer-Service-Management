<?php
    include("includes/session_set.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-profile</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .sub-content{
        height: 500px;
        width: 400px;
        margin:15px;
        padding:25px;
        background-color: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.09);
        border-radius: 5px;
    
    }
    .sub-content form{
        display: flex;
        flex-direction: column;
        gap:10px;
    }
    form input{
        margin-bottom: 10px;
        border:1px solid rgb(169, 164, 164);
        outline: none;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.09);
        padding:9px;
    }
    form input[type="submit"]{
        width: 120px;
        border: none;
        background-color: rgb(9, 9, 160);
        color:white;
    }
    form input[type="submit"]:hover{
        background-color: gray;
    }
    form input[type="submit"]:active{
        background-color: rgb(9, 9, 160);
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
                <h2>User Profile</h2>
                <div class="sub-content">
                    <form action="#">
                        <label for="">Full Name</label>
                        <input type="text" name="fullName">
                        <label for="">Email</label>
                        <input type="email" name="email">
                        <label for="">Contact Number</label>
                        <input type="number" name="phone">
                        <label for="">Registration Date</label>
                        <input type="text" disabled>
                        <input type="submit" value="Update">

                    </form>
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
