<?php
    include("includes/session_set.php");
    include("includes/dbconnect.php");
    $flag=0;
    if($_REQUEST['s_id']){
       if($_REQUEST['opt']=='delete'){
        $sql="delete from services where S_Id='$_REQUEST[s_id]'";
           $flag=mysqli_query($con,$sql) or die(mysqli_error($con));
       }
    }
?>
<script>
    if(<?=$flag?>)
        alert("Record Deleted Successfully!!");
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Services</title>
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
                <!-- <h2>Manage Services</h2> -->
                <div class="sub-content">
                    <div class="manage-serivce">
                        <div class="topBar">
                            <h3>Manage Services</h3>
                            <form action="" class="searchForm">
                                <input type="text" name="search"  placeholder="Search Services">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                        <table>
                            <tr>
                                <th><p>S.No.</p></th>
                                <th><p>Service Name</p></th>
                                <th><p>Image</p></th>
                                <th><p>Price</p></th>
                                <th><p>Creation Date</p></th>
                                <th><p>Action</p></th>
                            </tr>

                            <?php
                              
                                $sql="select * from services";
                                $result=mysqli_query($con,$sql) or die(mysqli_error($con));
                                // print_r($result);
                                
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            
                            <tr>
                                <td><?=$row['S_Id']?></td>
                                <td><?=$row['S_Name']?></td>
                                <td><img src="<?=$row['S_Image']?>" alt="" width="50px" ></td>
                                <td><?=$row['S_Price']?></td>
                                <td><?=$row['S_Date']?></td>
                                <td style="text-align: center;">
                                    <a href="?s_id=<?=$row['S_Id']?>&opt=delete" style="color: red;"><i class="fa-solid fa-trash-can"></i></a>
                                    <a href="edit-service.php?s_id=<?=$row['S_Id']?>" style="color: green;"><i class="fa-solid fa-pen-to-square"></i></a>
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
