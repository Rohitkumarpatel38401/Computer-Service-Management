<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSMS services</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .service-title{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 200px;
            margin-top: 20px;
            width: 100%;
            background-image: url("images/banner6.png");
            background-size: cover;
            color: rgba(0, 0, 0, 0.581);
            animation: slideRight 2s;
        }
        .service-title h2{
            text-align: left;
        }
        .service-price{
            color:rgb(241, 87, 87);
            font-size: 16px;
            margin-top: 10px;
            padding: 10px ;
            text-align: center;
            background-color: rgb(109, 244, 235)
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
                <h2 >Our Services</h2>
                <p name="services" class="service-label">There are following service are available here.</p> 
            </div>
          
            <div class="service-content">
            <?php
                include("includes/dbconnect.php");
                $sql="select * from services";
                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                while($row=mysqli_fetch_assoc($res)){
            ?>
                <div class="service-item">
                    <div class="img-container">
                        <img src="Admin/<?=$row['S_Image']?>" alt="" height="100%" width="100%">
                    </div>
                    <h3><?=$row['S_Name']?></h3>
                    <p><?=$row['S_Description']?></p>
                    <h5 class="service-price">Price : <?=$row['S_Price']?></h5>
                </div>
            <?php } ?>          
            </div>
        </section>
    </div>
    
    <div class="footer">
        <?php
            include("includes/custom-footer.php");
        ?>            
        </footer>
        <hr>
        <div class="Copyright-content">
            <p>@Copyright Computer Service Management System 2023.</p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>