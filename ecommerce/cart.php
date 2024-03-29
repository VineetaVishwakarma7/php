<?php
include_once('header.php');
?>
<section id="center" class="center_o pt-4 pb-4 bg-light">
  <div class="container-xl">
    <div class="row center_o1 text-center">
	 <div class="col-md-12">
	   <h1>SHOPPING CART</h1>
	   <h6 class="d-inline-block  font_14 col_yell bg-white"><a class="col_light" href="#">Home</a> <span class="me-2 ms-2">/</span> Shopping Cart</h6>
	 </div>
	</div>
  </div>
</section>

<section id="cart_page" class="cart pt-4 pb-4">
 <div class="container-xl">
   <div class="cart_2 row">
	 <div class="col-md-6">
	  <h5>MY CART</h5>
	 </div>
	 <div class="col-md-6">
      <h5 class="text-end text-uppercase"><a href="#">Continue Shopping</a></h5>
	 </div>
	</div>
	<div class="cart_3 row mt-3">
	 <div class="col-md-8">
	  <div class="cart_3l">
	   <h6>PRODUCT</h6>
	  </div>
	  <div class="cart_3l1 mt-3 row ms-0 me-0">
	   <div class="col-md-3 ps-0 col-3">
	    <div class="cart_3l1i">
		 <a href="#"><img src="img/12.jpeg" alt="abc" class="w-100"></a>		</div>
	   </div>
	   <div class="col-md-9 col-9">
	    <div class="cart_3l1i1">
		 <h6 class="fw-bold"><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></h6>
		 <h6 class="fw-normal font_12 mt-3">RED / XS</h6>
		 <h6 class="font_12 mt-3">Vendor</h6>
		 <h5 class="col_yell mt-3">$175.00</h5>
		 <h6 class="font_12 mt-3 mb-3">Quantity</h6>
		</div>
		<div class="cart_3l1i2">
         <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
		 <h6><a class="button_1" href="#">REMOVE</a></h6>
         <h6><a class="button" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="cart_3l1 mt-3 row ms-0 me-0">
	   <div class="col-md-3 ps-0 col-3">
	    <div class="cart_3l1i">
		 <a href="#"><img src="img/21.jpeg" alt="abc" class="w-100"></a>		</div>
	   </div>
	   <div class="col-md-9 col-9">
	    <div class="cart_3l1i1">
		 <h6 class="fw-bold"><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></h6>
		 <h6 class="fw-normal font_12 mt-3">RED / XS</h6>
		 <h6 class="font_12 mt-3">Vendor</h6>
		 <h5 class="col_yell mt-3">$175.00</h5>
		 <h6 class="font_12 mt-3 mb-3">Quantity</h6>
		</div>
		<div class="cart_3l1i2">
         <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
		 <h6><a class="button_1" href="#">REMOVE</a></h6>
         <h6><a class="button" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="cart_3l1 mt-3 row ms-0 me-0 pb-0 border-0">
	   <div class="col-md-3 ps-0 col-3">
	    <div class="cart_3l1i">
		 <a href="#"><img src="img/13.jpeg" alt="abc" class="w-100"></a>		</div>
	   </div>
	   <div class="col-md-9 col-9">
	    <div class="cart_3l1i1">
		 <h6 class="fw-bold"><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></h6>
		 <h6 class="fw-normal font_12 mt-3">RED / XS</h6>
		 <h6 class="font_12 mt-3">Vendor</h6>
		 <h5 class="col_yell mt-3">$175.00</h5>
		 <h6 class="font_12 mt-3 mb-3">Quantity</h6>
		</div>
		<div class="cart_3l1i2">
         <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
		 <h6><a class="button_1" href="#">REMOVE</a></h6>
         <h6><a class="button" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="cart_3r">
	   <h6 class="head_1">SUBTOTAL</h6>
	   <h5 class="text-center col_yell mt-3">$1,347.00</h5>
	   <hr>
	   <h6 class="font_13">Additional comments</h6>
	   <textarea class="form-control"></textarea>
	   <h6 class="text-center mt-3"><a class="button" href="checkout.php">PROCEED TO CHECKOUT</a></h6><br>
	   <h5>GET SHIPPING ESTIMATES</h5>
	   <hr>
	  </div>
	  <div class="cart_3r1">
	    <h6 class="font_13">Country</h6>
	   <select class="form-select" id="subject" name="subject">
		<option>America</option>
		<option>India</option>
		<option>England</option>
		<option>Africa</option>
		</select><br>
		<h6 class="font_13">State</h6>
	   <select class="form-select" id="subject_1" name="subject">
		<option>Delhi</option>
		<option>Uttar Pradesh</option>
		<option>Punjab</option>
		<option>Madhya Pradesh</option>
		</select><br>
	  <h6 class="font_13">Postal/Zip Code</h6>
	   <input class="form-control" type="text">
	   <h6 class="text-center mt-3"><a class="button" href="#">CALCULATE SHIPPING</a></h6>
	   </div>
	 </div>
	</div>
 </div>	 
</section>

<?php
include_once('footer.php');
?>