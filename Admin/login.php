<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
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
        .login-form{
            height: 400px;
            margin: auto;
            background-color: rgba(4, 91, 75, 0.538);
            color: white;
            justify-content: center;
        }
        .register-form{
            display: none;
        }
        footer{
            width: 100%; 
            background-color: rgb(4, 91, 75);
            color: white;
        }
        form a{
            color:rgb(98, 245, 237);
        }
        .msgbox{
            color: red;
            font-size: 15px;
            text-align: center;
        }
    </style>
    <script>
        setTimeout(() => {
            document.getElementById("msgbox").innerHTML="";
        }, 2000);
    </script>
</head>
<body> 
        <div class="main-content">
           <h1>Computer Service Management System</h1>
            <div class="form-container">
                <form action="lib/loginAdmin.php" class="addServiceFrom login-form">
                    <h2>Login Admin</h2>
                    <div class="msgbox" id="msgbox"><?=$_REQUEST['msg']?> </div>
                    <label for="">Registered Email or Contact Number</label>
                    <input type="text" name="uname" placeholder="Registered Email or Contact Number">
                    <label for="">Enter Password</label>
                    <input type="password" name="pass" placeholder="Password">
                    <input type="hidden" name="act" value="login">
                    <input type="submit" value="Login">
                    <p><a href="#">Forgot your password</a><br><a href="../index.php">Back Home</a></p>
                </form>
            </div>
           <footer> <p>@Copyright Computer Service Management System 2023</p></footer>
        </div>
</body>
</html>