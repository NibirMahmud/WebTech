<?php

session_start();
if ($_SESSION['status']=="1") {
	
}
else{
	echo "Wrong attampt";
	header('Location: /ssms/');
}