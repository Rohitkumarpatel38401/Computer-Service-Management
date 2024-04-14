<?php
    include("includes/session_set.php");
    include("includes/dbconnect.php");
    $R=$_REQUEST;
    $flag=0;

    if(isset($_FILES['S_Img'])){    
        $target_dir="images/";
        $target_file=$target_dir.basename($_FILES['S_Img']["name"]);
        move_uploaded_file($_FILES['S_Img']['tmp_name'], $target_file);
        $sql="INSERT INTO `services` (`S_Name`, `S_Description`,`S_Image`, `S_Price`) VALUES ('$R[S_Name]', '$R[S_Desc]','$target_file', '$R[S_Price]');";
        $flag=mysqli_query($con,$sql) or die(mysqli_error($con));
         
       }
    //-----------------------------------------------------------    
    
    if(isset($R['S_Name'])){
        


       
    }
?>
<script>
    if(<?=$flag?>)
        alert("Service Add Successfully!!");
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
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
                <h2>Add Service</h2>
                <div class="sub-content">
                    <form action="#" class="addServiceFrom" method="post" enctype="multipart/form-data">
                        <label for="">Service Name</label>
                        <input type="text" name="S_Name" required>
                        <label for="">Service Description</label>
                        <textarea name="S_Desc" cols="30" rows="6" required></textarea>
                        <label for="">Image</label>
                        <input type="file" name="S_Img" required>
                        <label for="">Service Price</label>
                        <input type="number" name="S_Price" required>
                        <input type="submit" value="Add">

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
