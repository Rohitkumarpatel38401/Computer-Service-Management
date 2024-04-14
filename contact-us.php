<?php
        include("includes/dbconnect.php");
        $sql="select * from pages where p_name='contact'";
        $res=mysqli_query($con,$sql) or die(mysqli_error($con));
        $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .service-title{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 200px;
            margin: 20px 0;
            width: 100%;
            background-image: url("images/banner6.png");
            background-size: cover;
            color: rgba(34, 19, 19, 0.581);
            animation: slideRight 2s;
        }
        .service-title h2{
            text-align: left; 
        }
        section h2{
            font-size: 3em;    
        }
        .content-about section{
            min-height: 250px;
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;  
        }   
    </style>
</head>
<body>
    <div class="header">
        <?php
            include("includes/custom-header.php");
        ?>
    </div>
    <div class="content">
        <a href="" name="services"></a>
        <section class="service">
            <div class="service-title">
                <h2 >Contact Us</h2>
                <p name="services" class="service-label">There are following Information of Contact section available here.</p>
            </div>
        </section>
    </div>
    <div class="content-about">
        <section class="main-content">
            <h2><?=$res['p_title']?><hr></h2>
            <p>
                <i class="fa-solid fa-location-dot"></i> <?=$res['p_description']?> <br>
            </p>
            <p>
                <i class="fa-solid fa-square-phone"></i> +91 <?=$res['phone']?> <br>
                <i class="fa-solid fa-envelope"></i> <?=$res['email']?> 
            </p>
        </section>
    </div>
    <div class="footer">
         <?php
            include("includes/custom-footer.php");
        ?>
        <hr>
        <div class="Copyright-content">
            <p>@Copyright Computer Service Management System 2023.</p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>