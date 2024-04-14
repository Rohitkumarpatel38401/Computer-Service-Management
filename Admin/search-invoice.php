<?php
    include("includes/session_set.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Invoice</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .addServiceFrom{
            height: 170px !important;
        }
        .sub-content{
            gap: 20px !important;
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
                <h2>Search Invoice</h2>
                <div class="sub-content">
                    <form action="#" class="addServiceFrom" style="height: 180px;">
                        <label for="">Search By Invoice Number</label>
                        <input type="text" name="Search">
                        <input type="submit" value="Search">
                    </form>
                        <?php
                             include("includes/dbconnect.php");
                             $R=$_REQUEST;
                             if(isset($R['Search'])){
                                 $sql="select * from invoices where invoice_id='$R[Search]'";
                                        $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                                 $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                                 
                                 $sql="select * from users where u_id='$res[user_id]'";
                                 $r=mysqli_query($con,$sql) or die(mysqli_error($con));
                                 $r=mysqli_fetch_assoc($r) or die(mysqli_error($con));
                        ?>
                    <div class="customer-list">
                        <div class="topBar">
                            <h4 style="font-size: 18px;">Results of <?=$res['invoice_id']?></h4>
                        </div>
                        
                        <table>
                            <tr>
                                <th><p>S.No.</p></th>
                                <th><p>Invoice Id</p></th>
                                <th><p>Customer Name</p></th>
                                <th><p>Invoice Date</p></th>
                                <th><p>Action</p></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>****<?=$res['invoice_id']?></td>
                                <td><?=$r['u_name']?></td>
                                <td><?=$res['invoice_date']?></td>
                                <td style="text-align: center;">
                                    <a href="view-invoice.php?invoice_id=<?=$res['invoice_id']?>" style="font-size: 17px !important;">View</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                        <?php } ?>
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
