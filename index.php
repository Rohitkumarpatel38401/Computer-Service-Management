<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSMS</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <?php
            include("includes/custom-header.php");
        ?>
    </div>
    <div class="content">
        <section class="main-section">
            
            <div class="content-left">
                <p class="section-label">Hello!! Welcome Customer's</p>
                <h1 class="section-title">Computer Service Management System</h1>
                <p class="section-decription">

                    Computer sales and service Management system is used instead of manual operation in the computer sales / service shop. It mainly helps the user to store and maintain the records of customer
                </p>
                <div class="button-group">
                    <a href="#start" class="start-button">Start Now</a>
                    <a href="services.php" class="service-button">View Services</a>
                </div>
            </div>
            
            <div class="content-right">
                <div class="image-container">
                    <img src="images/banner.jpeg" alt="" height="100%" width="100%">
                </div>
            </div>

        </section>

    </div>
    <div class="content">
        <a href="" name="services"></a>
        <section class="service">
            <div class="service-title">
                <h2 >Our Services</h2>
                <p name="services" class="service-label">There are following service are available here.</p>
                <hr>
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
                </div>
            <?php } ?>   
            </div>
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