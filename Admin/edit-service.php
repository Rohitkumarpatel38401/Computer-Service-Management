<?php
    include("includes/session_set.php");
    include("includes/dbconnect.php");
    $R=$_REQUEST;
    $flag=0;
    if(isset($R['opt'])){
        if(isset($_FILES['S_Img'])){
         $target_dir="images/";
         $target_file=$target_dir.basename($_FILES['S_Img']["name"]);
         move_uploaded_file($_FILES['S_Img']['tmp_name'], $target_file);
        $sql="update services set S_Name='$R[S_Name]', S_Description='$R[S_Desc]', S_Price='$R[S_Price]', S_Image='$target_file' where S_Id='$R[s_id]'";
        }
        else{
            $sql="update services set S_Name='$R[S_Name]', S_Description='$R[S_Desc]', S_Price='$R[S_Price]' where S_Id='$R[s_id]'";
        }
        $flag=mysqli_query($con,$sql) or die(mysqli_error($con));
    }
    if(isset($R['s_id'])){
        $sql="select * from services where S_Id='$R[s_id]'";
        $result=mysqli_query($con,$sql) or die(mysqli_error($con));
        $result=mysqli_fetch_assoc($result) or die(mysqli_error($con));
    }
?>
<script>
    if(<?=$flag?>){
        alert("Record Updated Successfully.");
        window.location.href="manage-services.php";
    }
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-service</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        
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
                <a href="profile.php"> <i class="fa-solid fa-user"></i> Profile</a>
                <a href="change-pass.php"> <i class="fa-solid fa-window-restore"></i> Change Password</a>
                <button onclick="window.location.href='lib/loginAdmin.php?act=logout'">Log out</button>
            </span>
            <section class="main-content">
                <h2>Edit Service</h2>
                <div class="sub-content">
                    <form action="#" class="addServiceFrom" enctype="multipart/form-data">
                        <label for="">Service Name</label>
                        <input type="text" name="S_Name" value="<?=$result['S_Name']?>">
                        <label for="">Service Description</label>
                        <textarea name="S_Desc" cols="30" rows="6" ><?=$result['S_Description']?></textarea>
                        <label for="">Image</label>
                        <input type="file" name="S_Img">
                        <label for="">Service Price</label>
                        <input type="number" name="S_Price" value="<?=$result['S_Price']?>">
                        <input type="hidden" name="s_id" value="<?=$result['S_Id']?>">
                        <input type="hidden" value="update" name="opt">
                        <input type="submit" value="Edit Now">

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
