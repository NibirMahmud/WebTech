<?php

session_start();
if ($_SESSION['status']=="0") {
	
}
else{
	echo "Wrong attampt";
	header('Location: /ssms/');
}