<div class="col-6 col-sm-2  pt-4 align-items-center">
                                <div class="card border-0" id="productCard">
                                    <div class="card-image">
                                        <img class="card-img-top img-fluid m-0 p-0"  src="./../images/products/03.jpg"  alt="Card image cap">
                                        <div class="card-image-text">
                                            <p style="text-align: center; max-height: 25px; min-height: 25px;">productName</p>
                                            <p style="text-align: center; max-height: 10px; min-height: 10px; font-size: 90%;">productunit</p>
                                            <p style="text-align: center;color: red; max-height: 10px; min-height: 10px; font-size: 100%;"><b>productprice</b></p>
                                        </div>
                                        <input type="hidden" name="quantity" id="quantity1" class="form-control" value="1" />
                                        <input type="hidden" name="hidden_name" id="name1" value="1" />
                                        <input type="hidden" name="hidden_price" id="price1" value="1" />
                                    </div>
                                    <div class="card-body m-0 p-0">
                                        <input class="btn addToCartBtn" type="submit" name="add_to_cart" id="1" value="Add to cart">
                                    </div>
                                </div>
                            </div>





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