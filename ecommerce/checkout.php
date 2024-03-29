<?php
include_once('header.php');
?>

<section id="center" class="center_o pt-4 pb-4 bg-light">
  <div class="container-xl">
    <div class="row center_o1 text-center">
	 <div class="col-md-12">
	   <h1>CHECKOUT</h1>
	   <h6 class="d-inline-block  font_14 col_yell bg-white"><a class="col_light" href="#">Home</a> <span class="me-2 ms-2">/</span> Checkout</h6>
	 </div>
	</div>
  </div>
</section>

<section id="checkout">
 <div class="container-xl">
  <div class="checkout_1 row">
    <div class="col-md-8">
	  <div class="checkout_1l">
	   <h5>Make Your Checkout Here</h5>
	   <p>Please register in order to checkout more quickly</p>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">First Name <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">Last Name <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">Email Address <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">Phone Number <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">Country <span>*</span></h6>
		<select class="form-select">
				 <option>India</option>
				 <option>Paksitan</option>
				 <option>Russia</option>
				 <option>England</option>
				 <option>Nepal</option>
			 </select>
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">State / Divition <span>*</span></h6>
		<select class="form-select">
				 <option>UP</option>
				 <option>MP</option>
				 <option>Bihar</option>
				 <option>Delhi</option>
				 <option>Jharkhand</option>
			 </select>
	   </div>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">Address Line 1 <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">Address Line 2 <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">Postal Code <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_13 fw-bold">Company <span>*</span></h6>
		<select class="form-select">
				 <option>Microsoft</option>
				 <option>Xaiomi</option>
				 <option>Apple</option>
				 <option>Samsung</option>
				 <option>Motorola</option>
			 </select>
	   </div>
	  </div>
	  <div class="checkout_1l">
	   <div class="form-check">
        <input type="checkbox" class="form-check-input" id="customCheck1">
        <label class="form-check-label" for="customCheck1"><a href="#">Create an account?</a></label>
    </div>
	  </div>
	</div>
	 <div class="col-md-4">
       <div class="checkout_1r">
	     <h5>CART TOTALS</h5>
	     <hr class="line">
		<h6 class="fw-bold font_13">Sub Total <span class="pull-right">$230.00</span></h6>
		<h6 class="fw-bold mt-3 font_13">(+) Shipping <span class="pull-right">$20.00</span></h6>
		<hr> 
		<h6 class="fw-bold font_13">Total <span class="pull-right">$250.00</span></h6><br>
		 <h5>PAYMENTS</h5>
	     <hr class="line">
		 <div class="form-check mt-3">
        <input type="radio" class="form-check-input" id="customCheck1">
        <label class="form-check-label" for="customCheck1">Check Payments</label>
    </div>
		 <div class="form-check mt-2">
        <input type="radio" class="form-check-input" id="customCheck1">
        <label class="form-check-label" for="customCheck1">Cash On Delivery</label>
    </div>
		 <div class="form-check mt-2">
        <input type="radio" class="form-check-input" id="customCheck1">
        <label class="form-check-label" for="customCheck1">PayPal</label>
    </div>
		 <h6 class="mt-3"><a class="button" href="#">PROCEED TO CHECKOUT</a></h6>
	   </div>
	  </div>
   </div>
 </div>
</section>
<?php
include_once('footer.php');
?>