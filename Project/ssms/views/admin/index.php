<?php
require './../../controller/adminController.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin|Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./../Styles/admin.css">
</head>
<body>
	<div class="container" id="headerContainer">
			<div class="row row-content align-items-center">
				<div class="col-2 pr-0 mr-0">
					<img src="./../images/logo.png" width="100px" height="100px">
				</div>
				<div class="col-10 my-auto serif pl-0 ml-0 ">
					<p style="font-size: 170%" id="brandName"><b>Super Shop Management System </b></p>
				</div>
			</div>
		</div>
	<nav class="navbar navbar-expand-lg navbar-dark" id="myNav">
	  <a class="navbar-brand" href="adminhome.php">Admin</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Products
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Add Product</a>
	          <a class="dropdown-item" href="#">Product List</a>
	          <a class="dropdown-item" href="#">Modify Product</a>
	          <a class="dropdown-item" href="#">Sale Portal</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Employees
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Add Employee</a>
	          <a class="dropdown-item" href="#">Employee List</a>
	          <a class="dropdown-item" href="#">Salary portal</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Members
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Add Member</a>
	          <a class="dropdown-item" href="#">Member List</a>
	          <a class="dropdown-item" href="#">Modify Membership</a>
	        </div>
	      </li>
	      <li class="nav-item"><a class="nav-link" href="">Sales</a></li>
	    </ul>
	    <ul class="navbar-nav mr-0  navbar-right">
            <li class="nav-item"><a class="nav-link" href="">Change Passowrd</a></li>
            <li class="nav-item"><a class="nav-link" href="/ssms/logout.php">Logout</a></li>
        </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row row-content">
			<div class="col-12" style="text-align: center;padding-top: 100px">
				<p style="font-size: 300%;font-family: 'Comic Sans MS', cursive, sans-serif;" id="brandName"><b>Welcome to <br>Admin Panel</b></p>
			</div>
		</div>
	</div>
	<footer class="page-footer font-small fixed-bottom pt-4">
	  <div class="container-fluid text-center text-md-left">
	    <div class="row">
	      <div class="col-md-6 mt-md-0 mt-3">
	        <h5 class="text-uppercase">About us</h5>
	        <p>This is a webtech project titled 'Super shop'<br>Fall Semester 2020-21</p>
	      </div>
	      <hr class="clearfix w-100 d-md-none pb-3">
	      <div class="col-md-3 mb-md-0 mb-3">
	        <h5 class="text-uppercase">Address</h5>
	        <p>Kuratoli, Dhaka.</p>
	      </div>
	      <div class="col-md-3 mb-md-0 mb-3">
	        <h5 class="text-uppercase">Github-Link</h5>
	        <ul class="list-unstyled">
	          <li>
	            <a href="github.com">Nibir</a>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </div>
	  <div class="footer-copyright text-center py-3">© 2020 Copyright:
	    <a href="https://mdbootstrap.com/">Group 6</a>
	  </div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>