<?php
session_start();
include("../includes/dbconnect.php");

if($_REQUEST['act']=="login"){
    user_login();
}
if($_REQUEST['act']=='logout'){
    user_logout();  
}
function user_login(){
    global $con;
    $R=$_REQUEST;
    $sql="select * from users where (u_email='$R[uname]' or u_phone='$R[uname]') and u_pass='$R[pass]' ";
    $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
    if(mysqli_num_rows($rs) ){
        $_SESSION['login_user']=$R['uname'];
        header("location:../dashboard.php?msg=Login Successfully!!");
    }else
        header("location:../login.php?msg=Plz Try Again!!");
    }

function user_logout(){
    if(isset($_SESSION['login_user'])){
        $_SESSION['login_user']="";
        session_destroy();
        header("location:../login.php?msg=User Logged Out!!");
    }
}
?>