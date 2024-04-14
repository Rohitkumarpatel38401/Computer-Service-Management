<?php
    include("includes/session_set.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B/W Dates Report</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        form{
            height: 300px !important;
        
        }
        form input[type="date"]{
            font-size: 17px;
        }
    </style>
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
                <a href="profile.html"> <i class="fa-solid fa-user"></i> Profile</a>
                <a href="change-pass.html"> <i class="fa-solid fa-window-restore"></i> Change Password</a>
                <button onclick="window.location.href='lib/loginAdmin.php?act=logout'">Log out</button>
            </span>
            <section class="main-content">
               <br>
                <h2>Between Dates Report</h2>
                <div class="sub-content">
                    <form action="bw-report-details.php" class="addServiceFrom" method="get">
                        <label for="">From Date</label>
                        <input type="date" name="fromDate">
                        <label for="">To Date</label>
                        <input type="date" name="toDate">
                        <input type="submit" value="Submit" > <!--After click to open bw-report-details.html -->
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
