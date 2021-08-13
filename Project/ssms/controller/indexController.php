<?php

session_start();
// $_SESSION['username'] != null && $_SESSION['status']!=null
if(isset($_SESSION['status']))
{
	header('Location: /ssms/controller/homeController.php');
}
else{
	header('Location:/ssms/views/login.php');
}