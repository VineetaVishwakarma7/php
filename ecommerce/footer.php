
<section id="subs" class="pt-5 pb-5 bg_blue">
 <div class="container-xl">
  <div class="row subs_1">
    <div class="col-md-6">
	 <div class="subs_1l">
	  <span class="d-inline-block col_yell font_50 float-start me-3"><i class="fa fa-envelope-o"></i></span>
	  <h4 class="text-white">Newsletter & Get Updates</h4>
	  <p class="mb-0 text-light">Sign up for our newsletter to get up-to-date from us</p>
	 </div>
	</div>
	<div class="col-md-6">
	 <div class="subs_1r">
	   <div class="input-group p-2">
				<input type="text" class="form-control border-0 bg-transparent" placeholder="Enter Your Email">
				<span class="input-group-btn">
					<button class="btn btn-primary bg_yell border-0 fs-6" type="button">
						SUBSCRIBE </button>
				</span>
		</div>
	 </div>
	</div>
  </div>
 </div>
</section>

<section id="footer" class="pt-4 pb-4 bg_light">
 <div class="container-xl">
  <div class="row footer_1">
     <div class="col-md-4">
	  <div class="footer_1i">
	    <h3><a class="col_dark" href="index.php"><i class="fa fa-shopping-basket col_yell"></i> Eco Mart</a></h3>
		<p class="mt-3">Namkand sodales vel online best prices Amazon Check out ethnic wear, formal wear western wear Blood Pressure Rate Monito.</p>
		<ul class="social-network social-circle mb-0 mt-3">
					<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-skype"></i></a></li>
					<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
	  </div>
	 </div>
	 <div class="col-md-2">
	  <div class="footer_1i">
	    <h5 class="fs-6 mb-4">CUSTOMER SERVICE</h5>
		<div class="row">
			<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Help Center</a></h6>
			<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Returns</a></h6>
			<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Product Recalls</a></h6>
			<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Accessibility</a></h6>
			<h6 class="font_14 fw-normal mb-0 col-md-12 col-6"><a href="#">Contact Us</a></h6>
		</div>
	  </div>
	 </div>
	 <div class="col-md-2">
	  <div class="footer_1i">
	    <h5 class="fs-6 mb-4">QUICK LINKS</h5>
		<div class="row">
			<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Return Policy</a></h6>
			<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Terms Of Use</a></h6>
			<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Security</a></h6>
			<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Privacy</a></h6>
			<h6 class="font_14 fw-normal mb-0 col-md-12 col-6"><a href="#">Store Pickup</a></h6>
		</div>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="footer_1i">
	    <h5 class="fs-6 mb-4">CONTACT US</h5>
	    <div class="footer_1i1 row">
		  <div class="col-lg-1 col-md-2 col-1">
		   <span class="col_yell fs-5"><i class="fa fa-map-marker"></i></span>
		  </div>
		  <div class="col-md-10 col-lg-11 col-11">
		   <p class="mb-0">Ahemdabad Gujarat</p>
		  </div>
		</div>
		<div class="footer_1i1 row mt-3">
		  <div class="col-lg-1 col-md-2 col-1">
		   <span class="col_yell fs-5"><i class="fa fa-headphones"></i></span>
		  </div>
		  <div class="col-md-10 col-lg-11 col-11">
		   <p class="mb-0">+(000) 345 67 89</p>
		  </div>
		</div>
		<div class="footer_1i1 row mt-3">
		  <div class="col-lg-1 col-md-2 col-1">
		   <span class="col_yell fs-5"><i class="fa fa-envelope"></i></span>
		  </div>
		  <div class="col-md-10 col-lg-11 col-11">
		   <p class="mb-0">info@gmail.com</p>
		  </div>
		</div>
		<div class="footer_1i1 row mt-3">
		  <div class="col-lg-1 col-md-2 col-1">
		   <span class="col_yell fs-5"><i class="fa fa-phone"></i></span>
		  </div>
		  <div class="col-md-10 col-lg-11 col-11">
		   <p class="mb-0">+(000) 345 67 89</p>
		  </div>
		</div>
	  </div>
	 </div>
  </div>
 </div>
</section>

<section id="footer_b" class="bg_blue">
 <div class="container-xl">
  <div class="row footer_b1 text-center">
   <div class="col-md-12">
     <p class="mb-0 text-light">© 2024 Your Website Name. All Rights Reserved | Design by Vishwakarma Vinni</a></p>
   </div>   
  </div>
 </div>
</section>

<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>

</body>

</html>
