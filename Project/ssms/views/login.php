<?php

session_start();
if (isset($_SESSION['status'])) {
  header('Location: /ssms/controller/homeController.php');
}
if (isset($_SESSION['qwert'])) {
  if($_SESSION['qwert']=="9999"){
    $userErr = $passErr = $loginErr ="";
    // echo "Session Recieved";
  }
  else if ($_SESSION['qwert']=="9998") {
    $_SESSION['qwert']="9999";
    $userErr = $passErr = "";
    $loginErr = "Username or Password incorrect";
  }

}
else{
  $_SESSION['qwert']="9999";
  $userErr = $passErr = $loginErr ="";
}
/*if(isset($_SESSION['username']) || isset($_SESSION['status'])){
	header("Location: ./views/logout.php");
	exit();
}

$userErr = $passErr = $loginErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $userErr = "Please enter Username";
  } 
  else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
        $userErr = "Invalid name entered";
    }
  }

  if (empty($_POST["password"])) {
    $passErr = "Please enter Password";
  }
  if($userErr == "" && $passErr == ""){

    header('Location: ./../controller/loginController.php');
    exit();

  } 
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>SSMS|LOGIN</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="./Styles/login.css">

</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first pt-2">
      <img src="./images/logo.png" id="icon" alt="User Icon" width="70px" height="70px" />&nbsp;<font id="brandName"><b>SSMS</b></font>
    </div>

    <!-- Login Form -->
    <form name="loginForm" method="POST" action="./../controller/loginController.php">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <p><font style="color: red;"><?php echo $userErr; ?></font></p>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <p><font style="color: red;"><?php echo $passErr; ?></font></p>
      <input type="submit" class="fadeIn fourth" value="Log In">
      <p><font style="color: red;"><?php echo $loginErr; ?></font></p>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  var my_form = document.forms.loginForm;

  my_form.onsubmit = function(){
    var f_name_val = my_form.username.value;
    var l_name_val = my_form.password.value;
    if(f_name_val == "" ) {
            
      alert("Username Must Be field Out");
      return false;            
    }
    else if (l_name_val == "") {
      alert("Password Must Be field Out");
      return false;
    }

        
  };
</script>
</body>
</html>