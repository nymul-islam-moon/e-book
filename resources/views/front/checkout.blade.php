
<!DOCTYPE html>
<html lang="zxx">
<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kumo- Fashion eCommerce HTML Template</title>

		<!-- Custom CSS -->
		<link href="{{ asset('frontend') }}/assets/css/plugins/animation.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/flaticon.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/font-awesome.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/iconfont.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/ion.rangeSlider.min.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/light-box.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/line-icons.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/slick-theme.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/slick.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/snackbar.min.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/plugins/themify.css" rel="stylesheet">
		<link href="{{ asset('frontend') }}/assets/css/styles.css" rel="stylesheet">

    </head>

    <body>

		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
			<div class="py-2 br-bottom">
				<div class="container">
					<div class="row">

						<div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 hide-ipad">
							<div class="top_second"><p class="medium text-muted m-0 p-0"><i class="lni lni-phone fs-sm"></i></i> Hotline <a href="#" class="medium text-dark text-underline">0(800) 123-456</a></p></div>
						</div>

						<!-- Right Menu -->
						<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
							<!-- Choose Language -->
							<div class="language-selector-wrapper dropdown js-dropdown float-right mr-3">
								<a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="Language" aria-label="Language dropdown">
									<span class="hidden-xl-down medium text-muted">Language:</span>
									<span class="iso_code medium text-muted">English</span>
									<i class="fa fa-angle-down medium text-muted"></i>
								</a>
								<ul class="dropdown-menu popup-content link">
									<li class="current"><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="assets/img/1.jpg" alt="en" width="16" height="11" /><span>English</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="assets/img/2.jpg" alt="fr" width="16" height="11" /><span>Français</span></a></li>
								</ul>
							</div>

							<div class="currency-selector dropdown js-dropdown float-right mr-3">
								<a href="javascript:void(0);" class="text-muted medium"><i class="lni lni-user mr-1"></i>Sign In / Register</a>
							</div>
						</div>

					</div>
				</div>
			</div>

        	<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

			<!-- ======================= Top Breadcrubms ======================== -->

			<!-- ======================= Top Breadcrubms ======================== -->

			<!-- ======================= Product Detail ======================== -->
			<section class="middle">
				<div class="container">

					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="text-center d-block mb-5">
								<h2>Checkout</h2>
							</div>
						</div>
					</div>

					<div class="row justify-content-between">
						<div class="col-12 col-lg-12 col-md-12">
							<form>
								<h5 class="mb-4 ft-medium">Billing Details</h5>
								<div class="row mb-2">

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group">
											<label class="text-dark">Full Name *</label>
											<input type="text" class="form-control" placeholder="First Name" />
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="text-dark">Email *</label>
											<input type="email" class="form-control" placeholder="Email" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="text-dark">Company</label>
											<input type="text" class="form-control" placeholder="Company Name (optional)" />
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="text-dark">Mobile Number *</label>
											<input type="text" class="form-control" placeholder="Mobile Number" />
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="text-dark">Address *</label>
											<input type="text" class="form-control" placeholder="Address" />
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="text-dark">Country *</label>
											<select class="custom-select">
											  <option value="">-- Select Country --</option>
											  <option value="1" selected="">Bangladesh</option>
											  <option value="2">United State</option>
											  <option value="3">United Kingdom</option>
											  <option value="4">China</option>
											  <option value="5">Pakistan</option>
											</select>
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="text-dark">City / Town *</label>
											<input type="text" class="form-control" placeholder="City / Town" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="text-dark">ZIP / Postcode *</label>
											<input type="text" class="form-control" placeholder="Zip / Postcode" />
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="text-dark">Additional Information</label>
											<textarea class="form-control ht-50"></textarea>
										</div>
									</div>

								</div>

							</form>
						</div>
					</div>

				</div>
			</section>
			<!-- ======================= Product Detail End ======================== -->

			<!-- ============================= Customer Features =============================== -->
			<section class="px-0 py-3 br-top">
				<div class="container">
					<div class="row">

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shopping-basket theme-cl"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Free Shipping</h5>
									<span class="text-muted">Capped at $10 per order</span>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="far fa-credit-card theme-cl"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Secure Payments</h5>
									<span class="text-muted">Up to 6 months installments</span>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shield-alt theme-cl"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">15-Days Returns</h5>
									<span class="text-muted">Shop with fully confidence</span>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-headphones-alt theme-cl"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">24x7 Fully Support</h5>
									<span class="text-muted">Get friendly support</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- ======================= Customer Features ======================== -->

			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-middle">
					<div class="container">
						<div class="row">

							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" />

									<div class="address mt-3">
										3298 Grant Street Longview, TX<br>United Kingdom 75601
									</div>
									<div class="address mt-3">
										1-202-555-0106<br>help@shopper.com
									</div>
									<div class="address mt-3">
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Supports</h4>
									<ul class="footer-menu">
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">About Page</a></li>
										<li><a href="#">Size Guide</a></li>
										<li><a href="#">FAQ's Page</a></li>
										<li><a href="#">Privacy</a></li>
									</ul>
								</div>
							</div>

							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Shop</h4>
									<ul class="footer-menu">
										<li><a href="#">Men's Shopping</a></li>
										<li><a href="#">Women's Shopping</a></li>
										<li><a href="#">Kids's Shopping</a></li>
										<li><a href="#">Furniture</a></li>
										<li><a href="#">Discounts</a></li>
									</ul>
								</div>
							</div>

							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Company</h4>
									<ul class="footer-menu">
										<li><a href="#">About</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Affiliate</a></li>
										<li><a href="#">Login</a></li>
									</ul>
								</div>
							</div>

							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Subscribe</h4>
									<p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
									<div class="foot-news-last">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Email Address">
											<div class="input-group-append">
												<button type="button" class="input-group-text b-0 text-light"><i class="lni lni-arrow-right"></i></button>
											</div>
										</div>
									</div>
									<div class="address mt-3">
										<h5 class="fs-sm text-light">Secure Payments</h5>
										<div class="scr_payment"><img src="assets/img/card.png" class="img-fluid" alt="" /></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2021 Kumo. Designd By <a href="https://themezhub.com/">ThemezHub</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->

			<!-- Wishlist -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
						<button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
					</div>
					<div class="right-ch-sideBar">

						<div class="cart_select_items py-2">
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

						</div>

						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">View Whishlist</button>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Cart -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
						<button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
					</div>
					<div class="right-ch-sideBar">

						<div class="cart_select_items py-2">
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

						</div>

						<div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
							<h6 class="mb-0">Subtotal</h6>
							<h3 class="mb-0 ft-medium">$1023</h3>
						</div>

						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">View Cart</button>
							</div>
						</div>

					</div>
				</div>
			</div>

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/ion.rangeSlider.min.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/slick.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/slider-bg.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/lightbox.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/smoothproducts.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/snackbar.min.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/jQuery.style.switcher.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->



		<script>
			function openCart() {
				document.getElementById("Cart").style.display = "block";
			}
			function closeCart() {
				document.getElementById("Cart").style.display = "none";
			}
		</script>

		<script>
			function openSearch() {
				document.getElementById("Search").style.display = "block";
			}
			function closeSearch() {
				document.getElementById("Search").style.display = "none";
			}
		</script>

	</body>

</html>


{{--

বরদি বলল জানিস তো মেজো আমি নিজের ঘরে থাকবো। ছেলেগুলো দেখাশোনা করা ঠিক হচ্ছে না। মেজদি কোন কিছু কথা না ভেবে বল ঠিক আছে। আমি আর ছোট উপরে থাকবো তুমি আর ওই দাদা গুলো নিচে থাকবে। তাই হল যথারীতি বড়দি সব জিনিসপত্র ছেলেগুলো নিজের ঘরে নিয়ে চলে এলো এবং গুছিয়ে নিল ঘরটা।

আর একটা কথা বলি আমাদের ঘরে একটাই বাথরুম ঘর সেটা নিচেতে। আমরা যখন বাথরুম করি তখন উপর থেকে আছি। তারপর বাথরুম করে চলে যায়।
তখনো সবাই মিলে একসঙ্গে ভাত খাচ্ছিলাম বড় দিদি একটা কথা বলল।
মহাদেব আজকে আমাকে প্রথম খাবে তারপর একে একে সবাইকে খাওয়াবো। জিজ্ঞাসা করল তোকে খাবে মানে।
ও সরি, মানে মহাদেব আগে জমিতে কাজ করবে।
আমি বললাম কাজ করবে মানে আজকে তো কোন কাজ নেই। কাল সকাল ছাড়া।
বড় দিদি বললো ও কালকেরে কাজের কথা বলছিলাম। মহাদেব বলল
আমি যে কাজটা করবো মন কান দিয়ে করবো।
ঠিক আছে দেখা যাক কে কত ভালো কাজ করতে পারে কতক্ষণ ধরে রাখতে পারে।
বলল আমি আজকে ছেড়ে দিলাম কিন্তু আমার জন্য ওইটা কিন্তু রেডি।
। বড় দিদি বলল ওই নিয়ে চিন্তা করতে হবে না।

তারপর ছেলেগুলো যে যার খেয়ে দেয়ে ঘরে চলে গেল।।
বড় দিদি মেজদিকে বললো।, জানিস তো অজয় বলে যে ছেলে টা মনে হয় তোকে খুব পছন্দ করে।।
মেজ দিদি একটু মুচকি হাসি দিয়ে বলল। এসব কথা বাদ দাও তো দিদি পরে ওইসব ভেবে দেখবো।।
বড় দিদি বলল সব কিছু পাবি ঘরের ভিতর থেকে। কেউ কিছু জানতে পারবে না। তুই তো জানিস আমার বিয়ে হচ্ছে না আর ওই ব্যাপারটা তো বুঝিস। কলেজে যাস ব্যাপারটা তো বুঝবি।

আমি কিছু না বুঝে বললাম কি বুঝবি কি কষ্ট তোমাদের এইতো ঠিকই আছি আমরা।
মেজ দিদি বলল ছোট তুই বড়দের মধ্যে কোন কথা বলিস না। আর একটা বছর যাk বুঝতে পারবি আমাদের কষ্টটা কি।।
আমি ভাত খেয়ে উঠে যাচ্ছি এমন সময় বড়দি মেজদিকে বলল। তোর কষ্ট আমি দূর করতে পারি তুমি যদি চাস।
বললো আমি অবশ্যই চাই দিদি আমি অবশ্যই চাই।
আমার কি করতে হবে তুমি বলো। তাহলে আজ রাতে বলে চুপ করে গেল। আমিও কোন কিছু কথার গুরুত্ব না দিয়ে আমার ঘরে চলে এলাম।।
তারপর শুয়ে শুয়ে ভাবতে থাকলাম, ছেলেগুলো আসার পর থেকে। বড় দিদির আচার-আচরণ অনেক পরিবর্তন হয়েছে।। একটা মেয়ে হয়ে কতগুলো ছেলেদের ঘরে কি করে শুয়ে থাকে।
শুয়ে থাকতেই পারে। ওরা দিদির সমবয়সী, আমাদের বাড়ির কাজের লোক। জীবের সাথে কথা বলতে পারে। এতে খারাপ কিছু নেই। এসব ভাবতে ভাবতে ঘুমিয়ে পড়লাম।।

রাত বারোটার দিকে ঘুম ভেঙে গেল। ভাবলাম সু সু করে আসি।
তাই আমি সু সু করতে নিচে গেলাম। নিচে যেতে ওই দাদা গুলোর ঘরের ভিতর থেকে একটা, চাপা গোঙ্গানি শব্দ আছে। আমি ভাবলাম এই দাদা গুলো কি কাউকে মারছে। তারপর আমি ভয়ে ভয়ে আস্তে আস্তে ঘরের পিছনের দিকে গেলাম কি হচ্ছে দেখার জন্য। কিন্তু কিছু দেখতে পাচ্ছি না কিন্তু ঘরের ভিতর থেকে কিছু একটা ধস্তাধস্তির শব্দ পাচ্ছিলাম।
এর মধ্যে একটা ছেলে বলল, পুরো মাখন মালটা। ওহ কি দারুন হাত দিতে। তারপর একটা মেয়ের গলা পেলাম চাপা স্বরে। বলছে আমার লাগছে আসতে আমার লাগছে। আমার বুক তখন ধরা ধরাস করে উঠলো। ছেলেগুলো কাকে মারছে এই ঘরের ভিতরে।
তারপর স্পষ্ট বলা শুনতে পেলাম বড়দির। বলছে আমি আর পারছি না, আমি আর পারছি না।
আমার বুক তখন কেঁপে উঠল পায়ের তলা থেকে যেন মাঠে চলে যাচ্ছে।
গা হাত পা টকটক করে কাঁপছে।
এই ছেলেগুলো কি তাহলে বর দিকে ধরে মারছে।
? মনে মনে খুব রাগ হচ্ছে মনে মনে ভাবছিলাম এক্ষুনি পাড়ায় লোকজন ডেকে নিয়ে আসি।।
তারপর মনে হল তুমি যেন কেউ একটা দাদাএকটা দরজা খুলল।
আমি তো মেরে দেখতে লাগলাম কে বের হয়েছে,
যা দেখলাম তা দেখে আমার চোখে চরক গাছ হয়ে গেল।
দেখলাম যে মহাদেব বলে যে দাদাটা, সে সম্পূর্ণ ল্যাংটো হয়ে বাথরুমে দিকে যাচ্ছে।
আমি বুঝতে পারছি না কি হচ্ছে ঘরের ভিতরে। দিদি
বা কেন ছেলেগুলোর ঘরে কি করছে।।

আমি ঘরের ভিতরে কি হচ্ছে ভালো করে দেখার জন্য একটা ফুটো খুঁজছিলাম। কিন্তু ফুটো খুঁজে পাচ্ছিলাম না। তারপর হঠাৎ মনে পড়ল। বাবা-মা সেক্স করা দেখার জন্য আমি জানালাতে একটা ছোট ফুটো করে রেখে দিয়েছিলাম। সেটা চুন গ্রাম নিয়ে আটকে রাখতাম, যাতে কেউ না বুঝতে পারে, আমি তখন জানালা কাছে গিয়ে চুরির নামটা ধরে টান দিতে খুলে গেল। তারপর ফুটো তে চোখ দিতে, আমি তো পুরো অবাক হয়ে গেলাম এ কি দৃশ্য দেখছি আমি।
দেখতে পেলাম দিদি সম্পূর্ণ ল্যাংটো হয়ে শুয়ে আছে।
বিশ্বজিৎ বলে ছেলেটা দিদির দুটো পা ফাঁক করে দিদির গুদ্ চুষসে।। তারপর ঘরে ঢুকবো মহাদেব।
অজয়ের কানে কানে কি একটা বলল মহাদেব।
তারপর বেরিয়ে গেল অজয়।
মহাদেব দরজাটা দিয়ে বলে উঠলো।
রাজি হয়ে গেছে।
আমি তখন ভাবলাম কে রাজি হয়ে গেছে বা কি রাজি হয়ে গেছে কিছুই বুঝলাম না। কথাটার মধ্যে।
তারপর দিদি বলে উঠলো, ওকে একটু ধীরে সাস্তে ।দিও।
অজয় বললো একবার যখন ঢুকবে গুদের ভিতর ।তখন ।মুখ থেকে আরো দাও আরো দাও করবে ।
মহাদেব বললো বিশ্বজিৎ তুই সর।বলে মহাদেব ওর এক হাত বাড়া মানে দশ ইঞ্চি হবে। ।
বাড়া টা তে হাত দিতে দিতে বললো কি রে ঢোকাবো।তোর গুদ রেডি তো ।বড় দিদি যা বললো আমি নিজের কান কে ও বিশ্বাস করতে পারলাম না।
বড় দিদি বললো। ওই বাড়া গুদে নেয়ার জন্য কখন থেকে শুয়ে আছি।।
মহাদেব বললো নে তাহলে ।
বলেই বাড়া টা তে থুতু দিয়ে গুদে মুখে সেট করে বললো ।রেডি তো
দিদি বললো দাও ঢুকিয়ে।

আমি দেখতে পেলাম দিদির গুদে বাল ভর্তি আমার গুদে মত।গুদ ভিজে গেছে গুদেরর জলে।
আমার মনে তখন ঝর উটলো।আমার একটা আঙ্গুল আমার গুদে ঘষা দিতে থাকলাম।
মহাদেব আস্তে করে চাপ দিতেই ,দিদির মুখ থেকে আস্তে ও মহাদেব ও আ ও ও আঃ উঃ শব্দ বের হলো।এদিকে ভোলা দিদির মুখে ওর নিজের বাড়া ঢুকিয়ে দিয়ে বললো নে ম্যাগী চোষ আমার পাগলা বাড়া।
মহাদেব বললো ।দেবে কি জোরে একটা ধাক্কা।দিদি বললো না না।আস্তে আস্তে চাপ দাও।এই ঘোড়ার মত বাড়া এক বাড়ে দিলে আমার গুদে পর্দা ফেটে যাবে।
মহাদেব বললো থাক আছে।বলে একটু জোরে চাপ দিতেই পর পর করে অর্ধেক বাড়া দিদির গুদে ঢুকে গেলো।
আর দিদি বলতে লাগলো আস্তে মহাদেব আস্তে চোদ আমার গুদ ফেটে যাচ্ছে। ওঃ আঃ উঃ আঃ মা গো মরে গেলাম।
বিশ্বজিৎ দিদিকে দিদির দুটো বড় বড় মাইদুটো নিয়ে জোরে জোরে টিপছে।
ঘরের ভিতর যেনো দুই দলের কুস্তি হচ্ছে।এক দল আমার দিদি অন্য দল আমাদের বাড়ির কাজের দাদা রা ।
মহাদেব দিদির চোখে চোখ রেখে দিল একটা রাম ঠাপ পর পর করে দশ ইঞ্চি বাড়া টা দিদির গুদে ভিতর হারিয়ে গেলো।
মহাদেব ওর বাড়া টা দিদির গুদে ঢুকিয়ে দিতেই মহাদেব মুখে থেকে ,, , ও কি আরাম কি শান্তি পুরো মাখন তোর গুদ টা।
এদিকে দিদির মুখ থেকে করে বাবা গো মরে গেলাম ।বের কর বের কর আমি আর পারছি না সহ্য করতে।
ওঃ আঃ উঃ আঃ আঃ আঃ আমি আর পারছি না।খুব কষ্ট হচ্ছে মহাদেব।
Pls বের কর।
তার পর মহাদেব কিছুক্ষন চুপ করে রইলো।গুদে ভিতর বাড়া ঢুকিয়ে।

এদিকে আমার বুকে ভয় জমতে শুরু করলো দিদিকে কি মেরে ফেলবে। দিদি যে ভাবে ওঃ আঃ আঃ আঃ পারছিনা বলছে।
প্রায় পাঁচ মিনিট পর মহাদেব দাদা আস্তে আস্তে কোমরটা উপরের নিচে করতে থাকে। আর ওইদিকে ভোলা দুহাতে যদি দুটো মায় সুন্দর করে টিপতে থাকল। আর বিশ্বজিৎ দিদির মুখে বাড়াটা ঢুকিয়ে আস্তে আস্তে ঠাপ দিচ্ছে।
এইসব দৃশ্য দেখে আমি আমি কিছু বুঝতে পারছি না এরা কি করছে।
তারপর দিদি জোরে বলে উঠলো। জোরে জোরে কর।

মহাদেব বলছে দাড়াও একটু ওয়েট করো ধীরে ধীরে আস্তে আস্তে গুদের ক্ষিদেটা বাড়ায়। তারপরে আস্তে আস্তে ঠাপ দিতে থাকলো দিদির গুদে।
এইভাবে কিছুক্ষণ থাকার পর। রবি কোথা থেকে এলো এসেই মহাদেবকে বলল তুই সর আমি ঢুকাবো গুদে। বলতে মহাদেব সরে গেল।
রবি ঢুকিয়ে দিয়েই জোরে জোরে ঠাপ মারতে শুরু করল।।
মুখ থেকে ওঃ ওঃ ওঃ আঃ ইস আঃ আঃ উঃ আঃ আঃ আঃ আঃ আঃ উঃ উঃ উঃ আঃ উম উম ওঃ ইস ওঃ উঃ আঃ এ ও শব্দ বের হতে থাকলো।
আমি তখন ভাবছি আজকে থেকে চোদা খাচ্ছে না অনেকদিন আগে থেকে চোদা খাছ্ছে।
এদিকে আমার শরীর ও ঝড় বইতে শুরু করলো আমার গুদের ভিতর আঙুল ঢুকে গেল। গুদের ভিতর জল কাটছে আমার।
তারপর দিদি বলতে শুরু করল জোরে জোরে চোদো আমার আমি আর পারছি না জোরে জোরে ঠাপ দে জোরে জোরে ঠাপ দে ও কি আরাম। আমার গুদের জ্বালা মিটিয়ে দিয়ে। তোমার গুদের খিদে মিটিয়ে দে
দিদির মুখে এই কথা শুনে আমি নিজেকে বিশ্বাস করতে পারছি না যে আমার দিদি কি বলছে এসব।
তারপর ভোলা উঠে পড়ল।
কেন বিশ্বজিৎ এর কালো বাঁড়া নিয়ে।
বিশ্বজিৎ দিদিকে দেখে বলল কিরে মাগি ঢোকাবো তোর গুদে আমার বাঁড়া।
দিদি বলল হ্যাঁ রে খানকির ছেলে গুদটা ফাঁক করে বসে আছি রে তোর বাঁড়া গুদে নেওয়ার জন্য।।
দিয়ে ঢুকিয়ে দে আমার গুদে আমার গুদের খিদে পেয়েছে।।
তারপর বিশ্বজিৎ বাড়াটা একটু কচলে নিয়ে। গুদের মুখে সেট করে। এক ধাক্কায় পুরো অর্ধে ঢুকিয়ে দিল।

মুখ থেকে সঙ্গে সঙ্গে বলে উঠলো ওঃ ওহ আঃ ইস ওঃ। ও পুরো ঢুকিয়ে দেয় বিশ্বজিৎ পুরো ঢুকে দে গুদের ভিতরে তোর বাঁড়াটা। বিশ্বজিৎ শুরু করল ঠাপ।
বিশ্বজিত, দিদির মুখের দিকে তাকিয়ে বলছে। কিরে ম্যাগী। গুদে নাকি অনেক খিদে সব সব খিদে মিটিয়ে দেব মাগী।
ভুলেই জোরে জোরে ঠাপ দিতে থাকলো। সে ঠাপের সীমা নেই।
এক পর্যায়ে দিদির মুখ থেকে ওহ কি আরাম ওহ কি আরাম তোরা সারা জীবন আমাকে চুঁদে যাবি বিয়ে,আমি বিয়ে করবো না তোরা সারা জীবন আমাকে চুদবি। উফ কি ভালো লাগছে ও জোরে জোরে চোদ আমার ওহ কি ভালো লাগছে।
ও ওঃ আঃ ইস আঃ আঃ আঃ উঃ উঃ আঃ উঃ উঃ ই আঃ ইস আঃ ইস আঃ উঃ উঃ আঃ আঃ করে
জোরে জোরে কর যত কাজ চোর আছে কর আমার।

আমি আর পারছি না আমি আর পারছিনা ও আমার আমার জল আসবে আমার গুদে থেকে জল বেরোবে আমার গুদে থেকে জল বের হবে।
বলতে বলতে দিদি শরীরটা বাঁকিয়ে দিয়ে মোচড় দিয়ে উঠলো।। আর বলতে থাকোল ওহ কি আরাম। বলে দিদি চুপচাপ হয়ে গেল।
আমার গুদে তখন বান ডেকেছে গুদ থেকে বয়ে আসছে পা নিজে পর্যন্ত গুদের জল। এক পর্যায়ে নিজেও বিশ্বাস করতে পারছি না যে আমার গুদে এত জল আসছে কি করে।
এদিকে আমার দুটো আঙুল গুদের ভিতর ঢুকছে আর বার হচ্ছে। খুব আরাম লাগছে নিজেকে খুব মনে মনে হচ্ছে একটা বাঁড়া আমার গুদে ঢুকলে উফ কি যে আরাম হতো বলে বোঝাতে পারবো না।
দিদির এই দৃশ্য দেখে সবাই হা হা হা করে হেসে ফেলল।
মহাদেব তখন বলল আমার বাড়া এবার গুদে ঢুকবে গুদের জল বের করে তারপর ছাড়বো।।
দিদি বলল এসো দেরি করো না আমার গুদের খিদে আরো যেন বেরিয়ে যাচ্ছে।
আমি তখনই বুঝতে পারলাম যে আমাদেরই আরো আগে থেকে গুদে বাড়া নিচ্ছে। কিন্তু বুঝতে পারেনি কিন্তু একটা বাঁড়া নেয় মেয়ে রা জানি, কিন্তু একসঙ্গে চারটে পাঁচটা বাড়া। ভাবতেই গা যেন ছমছম করে উঠলো।
আমার এদিকে নিজেকে গর্ববোধ নিজেকে মনে হলো।
কারণ যে দেখতে হবে না এটা কার দিদি। এটা আমার দিদি একটা বাঁড়া কেন পাঁচটা বাড়া গুদে নিতে পারবে এটাই হচ্ছে আমার দিদি।। এসব ভাবতে ভাবতে আমার নিজেকে যেন আরো উত্তেজিত হয়ে উঠল শরীরটা।
তারপর হঠাৎ দেখলাম মেজদি দি কে অজয় কোলে করে নিয়ে এসেছে দিদির ঘরে।
, অজয়ের কোল থেকে নেমে দিদি মাথা নিচু করে দাঁড়িয়ে রইল।

    --}}
