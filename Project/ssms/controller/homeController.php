<?php
session_start();
if (isset($_SESSION['status'])) {
	// echo "string";
	if ($_SESSION['status']==0) {
		header('Location: /ssms/views/admin');
	}
	else if ($_SESSION['status']==1) {
		header('Location: /ssms/views/customer');
	}
	else{
		unset($_SESSION['username']);
		unset($_SESSION['status']);
		unset($_SESSION['qwert']);
		header('Location:/ssms/');
	}
}
else{
	// echo 'status problem';
	header('Location:/ssms/');
 }
