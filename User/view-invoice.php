<?php
    include("includes/session_set.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view-Invoice</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        table a{
            font-size: 16px !important;
        }
        .topBar{
        flex-direction: column !important;
        align-items: start;
        gap: 15px;
        
       }
       .topBar table{
        color: rgb(255, 255, 255);
        background-color: rgb(14, 113, 113);
       }
       h4{
        font-size: 1.2em !important;
        color: #1a155c;
       }
      

      
    </style>
</head>
<body>
    <div class="container">
        <div class="left-container" id="left_container">
            <?php
                include("includes/user-side-nav.php");
            ?>
        </div>
        <div class="right-container" id="right_container">
            <header id="header">
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
                <div class="sub-content" >
                    <h2 style="position:static;">Invoice Details</h2>
                    <div class="gen-invoice">
                        
                            <div class="topBar">
                                
                                <h3 >Invoice No : <?=$_REQUEST['invoice_id']?></h3>
                                <h4>Customer Detail</h4>
                                <table>
                            <?php
                                include("includes/dbconnect.php") ;
                                $sql="select * from invoices where invoice_id='$_REQUEST[invoice_id]'";
                                $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                                $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                                $sql="select * from users where u_id='$res[user_id]'";
                                $u_detail=mysqli_query($con,$sql) or die(mysqli_error($con));
                                $u_detail=mysqli_fetch_assoc($u_detail) or die(mysqli_error("$con"));

                            ?>
                                <tr>
                                    <th><p>Name</p></th>
                                    <td><?=$u_detail['u_name']?></td>
                                    <th><p>Mobile Number</p></th>
                                    <td><?=$u_detail['u_phone']?></td>
                                    <th><p>Email</p></th>
                                    <td><?=$u_detail['u_email']?></td>
                                </tr>
                            </table>
                        </div>
                        <table>
                            <tr>
                                <td colspan="3"  style="font-weight: bold;  font-size: 18px;">Service Detail</td>
                            </tr>
                            <tr>
                                <th><p>Serial No.</p></th>
                                <th><p>Service Name</p></th>
                                <th><p>Cost</p></th>
                            </tr>
                            <?php
                                $service=explode(',',$res['service_ids']);
                                $count=0;
                                $t_amt=0;
                                for($i=0;$i<sizeof($service);$i++){
                                    $count++;
                                    $sql="select S_Name,S_Price from services where s_id='$service[$i]'";
                                    $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                                    $res=mysqli_fetch_assoc($res) or die(mysqli_error($con));
                                    $t_amt=$t_amt+ (int)$res['S_Price'];
                               
                            ?>
                            <tr>
                                <td><?=$count?></td>
                                <td><?=$res['S_Name']?></td>
                                <td><?=$res['S_Price']?></td>
                            </tr>
                            <?php } ?>
                            <tr style="font-weight: bold;">
                                <td colspan="2" style="text-align: center;">Total Amount </td>
                                <td><?=$t_amt?></td>
                            </tr>
                        </table>
                        <a href="" class="printBtn" id="printBtn" onclick="printPage()"><i class="fa-solid fa-print" style="font-size:1.7em"></i></a>
                    </div>
                </div>
            </section>
            <footer id='footer'>
                <p>@Copyright Computer Service Management System 2024</p>
            </footer>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<script>
function printPage(){
        let header=document.getElementById("header");
        let left_container=document.getElementById("left_container");
        let footer=document.getElementById("footer");
        let right_container=document.getElementById("right_container");
        header.style.display="none";
        left_container.style.display="none";
        right_container.style.width="100%";
        right_container.style.overflow="hidden";
        footer.style.display="none";
        printBtn.style.display="none";
        window.print();
}

</script>