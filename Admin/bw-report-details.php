<?php
    include("includes/session_set.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B/w reports details</title>
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
                <div class="sub-content">
                    <div class="customer-list">
                        <h3>Between Dates Reports</h3>
                        <div class="topBar">
                            <h4 style="font-size: 17px;">Reports From <?=$_REQUEST['fromDate']?> to <?=$_REQUEST['toDate']?></h4>
                            <form action="" class="searchForm">
                                <input type="text" name="search"  placeholder="Search Services">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                        <table>
                            <tr>
                                <th><p>S.No.</p></th>
                                <th><p>Invoice Id</p></th>
                                <th><p>Customer Name</p></th>
                                <th><p>Invoice Date</p></th>
                                <th><p>Action</p></th>
                            </tr>
                            <?php
                                include("includes/dbconnect.php");
                                $R=$_REQUEST;
                                $sql="select * from invoices where invoice_date between '$R[fromDate]' and '$R[toDate]'";
                                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                                $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                                print_r($res);
                            ?>
                            <tr>
                                <td>1</td>
                                <td>8989897782</td>
                                <td>Sumit Kumar</td>
                                <td>12/12/2023</td>
                                <td style="text-align: center;">
                                    <a href="view-invoice.php" style="font-size: 17px !important;">View</a>
                                </td>
                            </tr>
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
