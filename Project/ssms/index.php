<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();

    // $_SESSION['id']=1;
    $_SESSION['qwert']="9999";
    header("Location: /ssms/controller/indexController.php");
	exit();
}
else{
	
}

?>