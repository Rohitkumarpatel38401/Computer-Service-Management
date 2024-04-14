<?php
    include("includes/session_set.php");
    include("includes/dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate invoice</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
       .topBar{
        flex-direction: column !important;
        align-items: start;
        gap: 15px;
        
       }
       .topBar table{
        color: rgb(255, 255, 255);
        background-color: rgb(14, 113, 113);
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
                <a href="profile.php"> <i class="fa-solid fa-user"></i> Profile</a>
                <a href="change-pass.php"> <i class="fa-solid fa-window-restore"></i> Change Password</a>
                <button onclick="window.location.href='lib/loginAdmin.php?act=logout'">Log out</button>
            </span>
            <section class="main-content">
                <!-- <h2>Manage Services</h2> -->
                <div class="sub-content">
                    <div class="gen-invoice">
                        <div class="topBar">
                        <?php
                            $sql="select * from users where u_id='$_REQUEST[u_id]'";
                            $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                            $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                        ?>

                            <h3>Customer Details</h3>
                            <table>
                                <tr>
                                    <th><p>Name</p></th>
                                    <td><?=$res['u_name']?></td>
                                    <th><p>Mobile Number</p></th>
                                    <td><?=$res['u_phone']?></td>
                                    <th><p>Email</p></th>
                                    <td><?=$res['u_email']?></td>
                                </tr>
                            </table>
                        </div>
                        <form action="includes/function.php" method="get">
                        <table>
                            <tr>
                                <th><p>Serial No.</p></th>
                                <th><p>Service Name</p></th>
                                <th><p>Action</p></th>
                            </tr>
                            <?php
                                $sql="select * from services";
                                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                                $count=0;
                                while($row=mysqli_fetch_assoc($res)){
                                    $count++;
                            ?>
                            <tr>
                                <td><?=$count?></td>
                                <td><?=$row['S_Name']?></td>
                                
                                <td style="text-align: center;">
                                    <input type="checkbox" name="service_id[]" value="<?=$row['S_Id']?>">
                                </td>
                            </tr>
                          <?php } ?>
                        </table>
                        <input type="hidden" name="u_id" value="<?=$_REQUEST['u_id']?>">
                        <input type="hidden" name="act" value="save_invoice">
                        <input type="submit" value="Submit" style="margin:20px;">
                    </form>
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
