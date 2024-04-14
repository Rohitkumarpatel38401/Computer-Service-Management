<?php
    include("includes/session_set.php");
    include("includes\dbconnect.php");
    if(isset($_REQUEST['search'])){

    }
    else{
        $sql="select * from users";
        $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
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
                        <div class="topBar">
                            <h3>Customer List</h3>
                            <form action="" class="searchForm">
                                <input type="text" name="search"  placeholder="Search Services">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                        <table>
                            <tr>
                                <th><p>User Id</p></th>
                                <th><p>Customer Name</p></th>
                                <th><p>Mobile Number</p></th>
                                <th><p>Email</p></th>
                                <th><p>Registration Date</p></th>
                                <th><p>Action</p></th>
                            </tr>
                             <?php
                                while($row=mysqli_fetch_assoc($result)){
                             ?>
                            <tr>
                                <td><?=$row['u_id']?></td>
                                <td><?=$row['u_name']?></td>
                                <td><?=$row['u_phone']?></td>
                                <td><?=$row['u_email']?></td>
                                <td><?=$row['u_reg_date']?></td>
                                <td style="text-align: center;">
                                    <a href="gen-invoice.php?u_id=<?=$row['u_id']?>" style="font-size: 17px !important;">Generate Invoice</a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
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
