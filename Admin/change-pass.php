<?php
    include("includes/session_set.php");
    include("includes/dbconnect.php");
    $flag=0;
    $R=$_REQUEST;
    if(isset($R['old_pass'])){
        $sql="select * from admin where u_name='$_SESSION[login_user]'";
        $res=mysqli_query($con,$sql) or die(mysqli_error($con));
        $res=mysqli_fetch_assoc($res);
        if($R['old_pass']==$res['pass']){
            $sql="update admin set pass='$R[new_pass]', c_pass='$R[new_pass]' where u_name='$_SESSION[login_user]'";
            $flag=mysqli_query($con,$sql) or die(mysqli_error($con));
        }
        else{
    ?>
        <script>
            alert("Incorrect Old Password!");
        </script>
    <?php
            }
        }
    ?>

   <script>
       if(<?=$flag?>) alert("Password Updated Successfully!!")
   </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
                <h2>Change Password</h2>
                <div class="sub-content">


                    <form action="#" class="changePassForm">
                        
                        <label for="">Old Password</label>
                        <input type="text" name="old_pass">
                        <label for="">New Password</label>
                        <input type="password" name="new_pass">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirm_pass">
                    
                        <input type="submit" value="Change">

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
