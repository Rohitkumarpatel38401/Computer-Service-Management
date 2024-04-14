<?php
    include("includes/dbconnect.php");
    $R=$_REQUEST;
    $flag=0;
    if(isset($R['act'])){
        $R['phone']=(string)$R['phone'];
        $sql="INSERT INTO `users` (`u_name`, `u_phone`,`u_email`, `u_pass`) VALUES ('$R[name]','$R[phone]', '$R[email]', '$R[pass]');";
        $flag=mysqli_query($con,$sql) or die(mysqli_error($con));
    }
?>
<script>
    if(<?=$flag?>) alert("Registration Successfully...!");
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            /* background-color: rgb(0, 0, 0); */
            background-image: url("images/backbround.jpg");
            background-size: cover;
        }
      
        .main-content{
            width: 100%;
            height: 100%;
        }
        h1{
            padding: 20px;
            background-color: rgb(4, 91, 75);
            color: white;
        }
        
        h2{
            text-align: center;
            font-size: 1.8em;
        }
        form input[type="submit"]{
            margin: 20px auto;
        }
      
        .register-form{
            height: 550px;
            margin: auto;
            gap:7px;
            background-color: rgba(4, 91, 75, 0.538);
            color:white;
        }
        footer{
            width: 100%; 
            background-color: rgb(4, 91, 75);
            color: white;
        }
        form div {
            text-align: center;
        }
        input[type="reset"]{
            margin-left: 20px;
            background-color: red;
        }
        form a{
            color:rgb(98, 245, 237);
        }
        .msgbox{
            color: red;
            font-size: 15px;
        }
    </style>
</head>
<body>
        
        <div class="main-content">
           <h1>Computer Service Management System</h1>
            <div class="form-container">
                <form action="#" class="addServiceFrom register-form">
                    <h2>Register User</h2>
                    <center>!! Welcome Back !!</center>
                    <!-- <div class="msgbox"> </div> -->
                    <label for="">Full Name</label>
                    <input type="text" name="name" placeholder="Full Name">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter Email">
                    <label for="">Contact Number</label>
                    <input type="number" name="phone" placeholder="Contact Number">
                    <label for="">Password</label>
                    <input type="password" name="pass" placeholder="Password">
                    <input type="hidden" name="act" value="register">
                    <div>
                        <input type="submit" value="Register" >
                        <input type="reset" value="Reset">
                    </div>
                    
                    <p>Already have an account ? <a href="login.php" >Login</a> <br><a href="../index.php">Back Home</a></p>
                </form>
            </div>
           <footer> <p>@Copyright Computer Service Management System 2023</p></footer>
        </div>
        

</body>
</html>