<?php
require './../model/login.php';
session_start();
$_SESSION['qwert']="9999";
if (isset($_POST['username'])) {
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];

  if (checkLogin($data)) {
  	 echo 'Successfully login!!';
     $result = getStatus($data);
     $_SESSION['username']=$_POST['username'];
     $_SESSION['status']=$result['status'];
  	 header('Location: ./homeController.php');
  }
  else{
  	 $_SESSION['qwert']="9998";
  	 header("Location: ./../views/login.php");
  }
}
