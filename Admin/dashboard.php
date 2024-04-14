<?php
include("includes/session_set.php");
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
        *{box-sizing: border-box;}
        .sub-content{
            padding:25px;
            display: flex;
            justify-content: space-between;
            gap:50px;
        }
        .box{
            width: 30%;
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 5px;
            padding:5px 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.264);
            cursor: pointer;
        }
        .box:hover{
            background-color: rgba(247, 141, 141, 0.463);
        }
        .box img{
            height: 65px;
            border-radius: 50%;
        }
        .box label{
            font-size: 1.3em;
        }
        .box .text-content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap:15px;
            padding:15px;
            color: rgb(145, 6, 89);
        }
        .box .text-content i{
            color:red;
            padding-left: 10px;
        }
        .box .text-content .fa-arrow-up{
            color: rgb(47, 255, 92);
        }
       
        
    </style>
</head>
<body>
    <div class="container">    
        <!-- <div class="left-container"></div>         -->
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
            <?php
                include("includes/dbconnect.php");
                $sql="select count(u_id) from users";
                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                $t_user=$res['count(u_id)'];

                $sql="select count(S_Id) from services";
                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                $t_service=$res['count(S_Id)'];

                $sql="select count(invoice_id) from invoices";
                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                $t_invoice=$res['count(invoice_id)'];
            ?>
            <section class="main-content">
                <h2>Dashboard</h2>
                <div class="sub-content">
                    <div class="box box-1">
                        <img src="images/users-icon.png" >
                        <div class="text-content">
                            <label for="">Total User's</label>
                            <p><?=$t_user?> <i class="fa-solid fa-arrow-up"></i></p>
                        </div>
                    </div>
                    <div class="box box-2">
                        <img src="images/services.png" >
                        <div class="text-content">
                            <label for="">Total Services</label>
                            <p><?=$t_service?> <i class="fa-solid fa-arrow-down"></i></p>
                        </div>
                    </div>
                    <div class="box box-3">
                        <img src="images/invoice-icon.jpg" >
                        <div class="text-content">
                            <label for="">Total Invoices</label>
                            <p><?=$t_invoice?> <i class="fa-solid fa-arrow-up"></i></p>
                        </div>
                    </div>
                    
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
