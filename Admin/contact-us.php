<?php
    include("includes/session_set.php");
    include("includes/dbconnect.php");
    $flag=0;
    $R=$_REQUEST;
    if(isset($_REQUEST['update'])){
        $sql="update pages set p_title='$R[P_Title]', p_description='$R[P_Desc]', email='$R[Email]', phone='$R[Mobile]' where p_id=2";
        $flag=mysqli_query($con,$sql) or die(mysqli_error($con));
    }
    $sql="select * from pages where p_id=2";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    $result=mysqli_fetch_assoc($result) or die(mysqli_error($con)); 

?>
<script>
    if(<?=$flag?>) alert("Page Updated Success!");
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
            <?php
                include("includes/side-nav.php");//Side menu or Navigation bar
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
                <h2>Contact Us</h2>
                <div class="sub-content">
                    <form action="#" class="contactUsForm">
                        <label for="">Page Title</label>
                        <input type="text" name="P_Title" value="<?=$result['p_title']?>">
                        <label for="">Page Description</label>
                        <textarea name="P_Desc" cols="30" rows="10"><?=$result['p_description']?></textarea>
                        <label for="">Email Address</label>
                        <input type="email" name="Email" value="<?=$result['email']?>">
                        <label for="">Mobile</label>
                        <input type="number" name="Mobile" value="<?=$result['phone']?>">
                        <input type="hidden" name="update">
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
