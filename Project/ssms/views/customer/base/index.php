<!DOCTYPE html>
<html>
<head>
	<title>Customer|Home</title>
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
	  <a class="navbar-brand" href="adminhome.php">SSMS</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <form class="form-inline my-2 my-lg-0">
		    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
		  </form>
	    </ul>
	    <ul class="navbar-nav mr-0  navbar-right">
            <li class="nav-item"><a class="nav-link" href="">My Cart</a></li>
            <li class="nav-item"><a class="nav-link" href="">Change Passowrd</a></li>
            <li class="nav-item"><a class="nav-link" href="">Logout</a></li>
        </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row row-content pt-3 pb-2">
			<div class="col-12">
				<h2 style="font-family: 'Comic Sans MS', cursive, sans-serif;">Popular Products</h2>
				<hr>
			</div>
		</div>
		<div class="row row-content pt-3 pb-2">
			<div class="col-6 col-sm-3">
				<div class="card">
			        <img class="card-img" src="./../images/products/01.jpg" alt="Vans">
			        <div class="card-img-overlay d-flex justify-content-end">
			          <a href="#" class="card-link text-danger like">
			            <i class="fas fa-heart"></i>
			          </a>
			        </div>
			        <div class="card-body">
			          <h5 class="card-title">Fresh Refined Sugar</h5>
			          <p class="card-text">
			          	৳70 
			          </p>
			          <div class="options d-flex flex-fill">
			             <select class="custom-select mr-1">
			                <option selected>Color</option>
			                <option value="1">Green</option>
			                <option value="2">Blue</option>
			                <option value="3">Red</option>
			            </select>
			            <select class="custom-select ml-1">
			                <option selected>Size</option>
			                <option value="1">41</option>
			                <option value="2">42</option>
			                <option value="3">43</option>
			            </select>
			          </div>
			          <div class="buy d-flex justify-content-between align-items-center">
			            <div class="price text-success"><h5 class="mt-4">$125</h5></div>
			             <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
			          </div>
			        </div>
			      </div>
			</div>
		</div>

		<div class="row row-content pb-2">
			<div class="col-12">
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Image</th>
				      <th scope="col">Product Name</th>
				      <th scope="col">Size</th>
				      <th scope="col">price</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td><img src="./../images/products/01.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Fresh Refined Sugar</td>
				      <td class="align-middle">1kg</td>
				      <td class="align-middle">৳70</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    <tr>
				      <td><img src="./../images/products/14.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Pran Mustard Oil</td>
				      <td class="align-middle">250ml</td>
				      <td class="align-middle">৳40</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    <tr>
				      <td><img src="./../images/products/03.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Taaza Black tea</td>
				      <td class="align-middle">400g</td>
				      <td class="align-middle">৳398</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    <tr>
				      <td><img src="./../images/products/04.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Dettol handwash</td>
				      <td class="align-middle">50ml</td>
				      <td class="align-middle">৳70</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    <tr>
				      <td><img src="./../images/products/05.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Harpic</td>
				      <td class="align-middle">500ml</td>
				      <td class="align-middle">৳165</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    <tr>
				      <td><img src="./../images/products/06.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Bombay Potato Crackers</td>
				      <td class="align-middle">1 pck</td>
				      <td class="align-middle">৳10</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    <tr>
				      <td><img src="./../images/products/07.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Oxy Facewash</td>
				      <td class="align-middle">200gm</td>
				      <td class="align-middle">৳170</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    <tr>
				      <td><img src="./../images/products/08.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Fresh chinigura Rice</td>
				      <td class="align-middle">1kg</td>
				      <td class="align-middle">৳110</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    <tr>
				      <td><img src="./../images/products/09.jpg" height="100px" width="100px"></td>
				      <td class="align-middle">Set Wet Facewash</td>
				      <td class="align-middle">200gm</td>
				      <td class="align-middle">৳190</td>
				      <td class="align-middle"><button class="btn btn-success">Buy</button></td>
				    </tr>
				    
				    
				  </tbody>
				</table>
			</div>
		</div>
	</div>



	<footer class="page-footer font-small pt-4">
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
	            <a href="github.com">Nibir</a><br>
	            <a href="github.com">Bijoy</a>
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