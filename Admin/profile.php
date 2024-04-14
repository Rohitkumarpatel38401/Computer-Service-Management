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
  
</head>
<body>
    <div class="container">
        <?php
            include("includes/side-nav.php");
        ?>
        <div class="right-container">
            <header>
                <?php
                    include("includes/header.php");
                ?>
            </header>
            <span id="menu" class="menu">
                <a href="profile.php"> <i class="fa-solid fa-user"></i> Profile</a>
                <a href="change-pass.php"> <i class="fa-solid fa-window-restore"></i> Change Password</a>
                <button onclick="window.location.href='lib/loginAdmin.php?act=logout'">Log out</button>
            </span>
            <section class="main-content">
                <h2>User Profile</h2>
                <div class="sub-content">
                    <form action="#" class="profileForm">
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
