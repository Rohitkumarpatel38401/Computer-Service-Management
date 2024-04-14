<?php
//To Manage session of login user
session_start();
if(!isset($_SESSION['login_user'])){
	header("location:login.php?msg=Plz first Login to cantinue");
}
?>