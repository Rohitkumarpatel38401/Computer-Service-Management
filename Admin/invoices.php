<?php
    include("includes/session_set.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoices</title>
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
       table td a{
        font-size: 16px !important;
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
                            <h3>Generated Invoice</h3>
                        </div>
                        <table>
                            <tr>
                                <th><p>Serial No.</p></th>
                                <th><p>Invoice Id</p></th>
                                <th><p>Customer Name</p></th>
                                <th><p>Invoice Date</p></th>
                                <th><p>Action</p></th>
                            </tr>
                            <?php
                                include("includes/dbconnect.php");
                                $sql="select * from invoices";
                                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                                $count=0;
                                if(mysqli_num_rows($res)){
                                while($row=mysqli_fetch_assoc($res)){
                                    $count++;
                                    $sql="select u_name from users where u_id='$row[user_id]'";
                                    $r=mysqli_query($con,$sql) or die(mysqli_error($con));
                                    $r=mysqli_fetch_assoc($r) or die(mysqli_error($con));
                            ?>
                            <tr>
                                <td><?=$count?></td>
                                <td>7652****<?=$row['invoice_id']?></td>
                                <td><?=$r['u_name']?></td>
                                <td><?=$row['invoice_date']?></td>
                                <td style="text-align: center;">
                                    <a href="view-invoice.php?invoice_id=<?=$row['invoice_id']?>">View</a>
                                </td>
                            </tr>
                           <?php }}else{ ?>
                           <tr>
                                    <td colspan="5">No have any Invoice</td>
                           </tr>
                           <?php } ?>
                        </table>
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
