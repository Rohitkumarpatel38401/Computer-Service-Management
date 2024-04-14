<?php
    include("includes/session_set.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        table a{
            font-size: 16px !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-container">
           <?php
                include("includes/user-side-nav.php");
           ?>
        </div>
        <div class="right-container">
            <header>
                <?php
                    include("includes/user-header.php");
                ?>
            </header>
            <span id="menu" class="menu">
                <a href="profile.php"> <i class="fa-solid fa-user"></i> Profile</a>
                <a href="change-pass.php"> <i class="fa-solid fa-window-restore"></i> Change Password</a>
                <button onclick="window.location.href='lib/loginUser.php?act=logout'">Log out</button>
            </span>
            <section class="main-content">
                <div class="sub-content">
                    <div class="gen-invoice">
                        <div class="topBar">
                            <h3>View Invoice</h3>
                            <form action="" class="searchForm">
                                <input type="text" name="search"  placeholder="Search Services">
                                <input type="submit" value="Search">
                            </form>
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
                                $sql="select * from users where u_email='$_SESSION[login_user]' or u_phone='$_SESSION[login_user]'";
                                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                                $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                                $u_id=$res['u_id'];
                                $u_name=$res['u_name'];
                                $sql="select * from invoices where user_id='$u_id'";
                                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                                $count=0;
                                while($row=mysqli_fetch_assoc($res)){
                                    $count++;                             
                            ?>
                            <tr>
                                <td><?=$count?></td>
                                <td>7652****<?=$row['invoice_id']?></td>
                                <td><?=$u_name?></td>
                                <td><?=$row['invoice_date']?></td>
                                <td style="text-align: center;">
                                    <a href="view-invoice.php?invoice_id=<?=$row['invoice_id']?>">View</a>
                                </td>
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
