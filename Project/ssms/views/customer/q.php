<?php   
 // session_start();
 require './../../controller/customerController.php';
include './../../controller/customerDataController.php';
include './../../model/customer.php';
require_once ('./../../model/db_connect.php');
$data= getFirstName();
$totalCartCount=$totalNotificationCount=0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST['productId'])) {
        
    }
    else{
        $totalCartCount= $totalCartCount+1;
    }
}  
$conn = db_conn();
$selectQuery = 'SELECT * FROM `tbl_product`';
try{
    $stmt = $conn->query($selectQuery);
}catch(PDOException $e){
    echo $e->getMessage();
}
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


 $connect = mysqli_connect("localhost", "root", "", "supershop");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 ?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Customer | Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="./../Styles/customer.css" rel="stylesheet"/>
        <style type="text/css">
            #loader {
                transition: all 0.3s ease-in-out;
                opacity: 1;
                visibility: visible;
                position: fixed;
                height: 100vh;
                width: 100%;
                background: #fff;
                z-index: 90000;
            }
            #loader.fadeOut {
                opacity: 0;
                visibility: hidden;
            }
            
            .spinner {
                width: 40px;
                height: 40px;
                position: absolute;
                top: calc(50% - 20px);
                left: calc(50% - 20px);
                background-color: #333;
                border-radius: 100%;
                -webkit-animation: sk-scaleout 1s infinite ease-in-out;
                animation: sk-scaleout 1s infinite ease-in-out;
            }
            @-webkit-keyframes sk-scaleout {
                0% {
                    -webkit-transform: scale(0);
                }
                100% {
                    -webkit-transform: scale(1);
                    opacity: 0;
                }
            }
            @keyframes sk-scaleout {
                0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                }
                100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    opacity: 0;
                }
            }
            .addToCartBtn{
                border: 1px solid #2A706E;
                border-radius: 4px;
                width: 100%;
                height: 33px;
                color: #2A706E;
                background-color: white;
            }
            .addToCartBtn:hover{
                width: 100%;
                border-color: #2A706E;
                color: white;
                background-color: #2A706E;
                box-shadow: 0 5px 5px 0 rgba(0,0,0,0.24), 0 5px 5px 0 rgba(0,0,0,0.19);
            }
            .card-image:hover{
                border: 1px solid #2A706E; 
                border-radius: 4px;

            }
            .addtoCartImage{
                transition: .5s ease;
                  opacity: 0;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  -ms-transform: translate(-50%, -50%);
                  text-align: center;
                  color: #2A706E;
            }
            .card-image:hover {
              opacity: 0.3;
              
            }

            .card-image:hover .addtoCartImage {
              opacity: 1;
            }
        </style>
        
    </head>

    <body class="app">
        <div id="loader">
            <div class="spinner"></div>
        </div>
        <script type="text/javascript">
            window.addEventListener("load", () => {
                const loader = document.getElementById("loader");
                setTimeout(() => {
                    loader.classList.add("fadeOut");
                }, 300);
            });
        </script>

        <div>
            <div class="sidebar">
                <div class="sidebar-inner">
                    <div class="sidebar-logo">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer peer-greed">
                                <a class="sidebar-link td-n" href="/ssms/views/customer/" class="td-n">
                                    <div class="peers ai-c fxw-nw">
                                        <div class="peer">
                                            <div class="logo" style="padding-top: 10px; padding-left: 12px;"><img src="./../images/logo.png"  alt="" width="40px" height="40px" /></div>
                                        </div>

                                        <div class="peer peer-greed"><h5 class="lh-1 mB-0 logo-text">SSMS</h5></div>
                                    </div>
                                </a>
                            </div>

                            <div class="peer">
                                <div class="mobile-toggle sidebar-toggle">
                                    <a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu scrollable pos-r">
                        <li class="nav-item mT-30 active">
                            <a class="sidebar-link" href="https://colorlib.com/polygon/adminator/index.html" default>
                                <span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span>

                                <span class="title">Home </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="email.html">
                                <span class="icon-holder"><i class="fa fa-fire" aria-hidden="true" style="color: #DD3613;"></i> </span>

                                <span class="title">Popular Offer </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="./category-food">
                                <span class="icon-holder"><!-- <i class="c-blue-500 ti-share"></i> --><img src="./../images/food.webp" width="20px" height="20px"> </span>

                                <span class="title">Foods </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="calendar.html">
                                <span class="icon-holder"><i class="fa fa-paw" aria-hidden="true"></i> </span>
                                <span class="title">Pet & Care </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="chat.html">
                                <span class="icon-holder"><img src="./../images/home-cleaning.webp" width="20px" height="20px"> </span>

                                <span class="title">Home & Cleaning </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="charts.html">
                                <span class="icon-holder"><i class="fa fa-pencil" aria-hidden="true"></i> </span>
                                <span class="title">Office & Stationary </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="charts.html">
                                <span class="icon-holder"><img src="./../images/WEB_Icons-22.svg" width="20px" height="20px"> </span>
                                <span class="title">Meats </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder"><img src="./../images/beauty-health.webp" width="20px" height="20px"> </span>

                                <span class="title">Beauty & Health </span>

                                <span class="arrow"><i class="ti-angle-right"></i> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="sidebar-link" href="basic-table.html">Health Care</a></li>
                                <li><a class="sidebar-link" href="datatable.html">Personal Care</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> </span>
                                <span class="title">Home Appliances </span>

                                <span class="arrow"><i class="ti-angle-right"></i> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="google-maps.html">Lights & Electronics</a></li>
                                <li><a href="vector-maps.html">Tools & Hardware</a></li>
                                <li><a href="vector-maps.html">Kitchen Aplliances</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="./category-food">
                                <span class="icon-holder"><!-- <i class="c-blue-500 ti-share"></i> --><img src="./../images/WEB_Icons-20.svg" width="20px" height="20px"> </span>

                                <span class="title">Beverages </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="page-container">
                <div class="header navbar">
                    <div class="header-container" style="background-color: #2A706E;">
                        <ul class="nav-left">
                            <li>
                                <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu" style="color: white;"></i></a>
                            </li>
                            
                            <li class=" pl-0" >
                                <input class=" border-light bg-light rounded-lg" width="400px" style="font-style: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif ; font-size: 90font-size:15px;height:40px;margin-top:12px;outline:none;padding:5px;min-width: 800px;" type="text" placeholder="Search" />
                            </li>
                            
                            
                        </ul>
                        <ul class="nav-right">
                            <li class="notifications dropdown">
                                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="fa fa-map-marker" aria-hidden="true" style="color:white;"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="pX-20 pY-15 bdB">
                                        <i class="fa fa-map-marker pR-10"></i>

                                        <span class="fsz-sm fw-600 c-grey-900">Delivery Location </span>
                                    </li>
                                    <li>
                                        <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer peer-greed">
                                                        <span>
                                                            <span class="fw-500">Full Details</span>

                                                            <span class="c-grey-600">
                                                                Area
                                                            </span>
                                                        </span>

                                                        <p class="m-0"><small class="fsz-xs">City</small></p>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </li>
                                    <li class="pX-20 pY-15 ta-c bdT">
                                        <span>
                                            <a href="" class="c-grey-600 cH-blue fsz-sm td-n" style="color: #2A706E;">Change Location</a>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        
                            <li class="notifications dropdown">
                                <?php
                                if($totalCartCount > 0)
                                {
                                    echo "<span class='counter bgc-red' id='cartCounter'>".$totalCartCount." </span>";
                                }
                                ?> 
                                
                                <a data-toggle="tab" href="#cart" style="color: white;text-decoration: none;">Cart <span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a>
                            </li>
                            <!-- <li class="notifications dropdown">
                                <?php
                                if($totalNotificationCount != "")
                                {
                                    echo "<span class='counter bgc-red' id='notificationsCounter'>".$totalNotificationCount." </span>";
                                }
                                ?> 
                                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="fa fa-bell" style="color: white;" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="pX-20 pY-15 bdB">
                                        <i class="ti-bell" style="color: #2A706E;"></i>
                                        <span class="fsz-sm fw-600 c-grey-900">Notifications </span>
                                    </li>
                                    <li>
                                        <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="" /></div>

                                                    <div class="peer peer-greed">
                                                        <div>
                                                            <div class="peers jc-sb fxw-nw mB-5">
                                                                <div class="peer">
                                                                    <p class="fw-500 mB-0">John Doe</p>
                                                                </div>

                                                                <div class="peer"><small class="fsz-xs">5 mins ago</small></div>
                                                            </div>

                                                            <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app... </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="" /></div>

                                                    <div class="peer peer-greed">
                                                        <div>
                                                            <div class="peers jc-sb fxw-nw mB-5">
                                                                <div class="peer">
                                                                    <p class="fw-500 mB-0">Moo Doe</p>
                                                                </div>

                                                                <div class="peer"><small class="fsz-xs">15 mins ago</small></div>
                                                            </div>

                                                            <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app... </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" /></div>

                                                    <div class="peer peer-greed">
                                                        <div>
                                                            <div class="peers jc-sb fxw-nw mB-5">
                                                                <div class="peer">
                                                                    <p class="fw-500 mB-0">Lee Doe</p>
                                                                </div>

                                                                <div class="peer"><small class="fsz-xs">25 mins ago</small></div>
                                                            </div>

                                                            <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app... </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pX-20 pY-15 ta-c bdT">
                                        <span>
                                            <a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a>
                                        </span>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                    <div class="peer mR-10"><!-- <img class="w-2r bdrs-50p" src="./../images/person.jpg" alt="" /> --><i class="fa fa-user-circle-o fa-2x" style="color:white;" aria-hidden="true"></i></div>

                                    <div class="peer">
                                        <span class="fsz-sm c-grey-900" > <font color="white"><?php echo $data['customername']; ?></font> </span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu fsz-sm">
                                    <li>
                                        <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                            <i class="ti-settings mR-10"></i>

                                            <span>Setting </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                            <i class="ti-user mR-10"></i>

                                            <span>Profile </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                            <i class="ti-email mR-10"></i>

                                            <span>Messages </span>
                                        </a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="/ssms/logout.php" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                            <i class="ti-power-off mR-10"></i>

                                            <span>Logout </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <main class="main-content">
                    <div id="mainContent">
                        <h1>Popular products</h1><hr>
                        <div class="row row-content" id="products">
                            <?php foreach($result as $row){?>
                            <div class="col-6 col-sm-2  pt-4 align-items-center">
                                <!-- <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>"> -->
                                    <div class="card border-0" id="productCard">
                                        <a href="#" style="text-decoration: none;">
                                            <div class="card-image">
                                                <img class="card-img-top img-fluid m-0 p-0"  src="./../images/products/<?php echo $row["image"]; ?>"  alt="Card image cap">
                                                <div class="card-image-text">
                                                    <p style="text-align: center; max-height: 25px; min-height: 25px; color: #2A706E;"><?php echo $row["product_name"]; ?></p>
                                                    <p style="text-align: center; max-height: 10px; min-height: 10px; font-size: 90%; color: #2A706E;"><?php echo $row['productunit'];?></p>
                                                    <p style="text-align: center;color: red; max-height: 10px; min-height: 10px; font-size: 100%;"><b>$ <?php echo $row["product_price"]; ?></b></p>
                                                </div>
                                                <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                                                 <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                                                 <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />
                                                
                                            </div>
                                        </a>
                                        <div class="card-body m-0 pt-1 pl-0 pr-0 pb-0">
                                            <input class="addToCartBtn add_to_cart" type="submit" name="add_to_cart" id="<?php echo $row["id"]; ?>" value="Add to cart">
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                            <?php } ?>
                             

                        </div>
                        <div id="cart">  
                          <div class="table-responsive" id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right">$ <?php echo $values["product_price"]; ?></td>  
                                         <td align="right">$ <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="center">  
                                              <form method="post" action="cart.php">  
                                                   <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>  
                    </div>
                    
                </main>
                <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                    <span>Copyright © 2020 Super Shop Management System</a>. All rights reserved. </span>

                    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->

                    <script>
                        window.dataLayer = window.dataLayer || [];
                        function gtag() {
                            dataLayer.push(arguments);
                        }
                        gtag("js", new Date());

                        gtag("config", "UA-23581568-13");
                    </script>
                </footer>
            </div>
        </div>
        <script type="text/javascript" src="./vendor.js"></script>
        <script type="text/javascript" src="./bundle.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                load_product();

                function load_product(){
                    $.ajax({
                        url: "loadProduct.php",
                        method: "POST",
                        success : function(data){
                            $('#myProducts').html(data);
                        }
                    });
                }
            });
        </script>
    </body>
</html>
<script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>
