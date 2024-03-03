
<!DOCTYPE html>
<html lang="zxx">
<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kumo- Fashion eCommerce HTML Template</title>

        <!-- Custom CSS -->
        <link href="{{ asset('frontend/assets/css/plugins/animation.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/iconfont.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/ion.rangeSlider.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/light-box.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/snackbar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/plugins/themify.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/styles.css') }}" rel="stylesheet">

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
			<!-- Top Header -->
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

			<div class="headd-sty header">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							{{-- <div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
								<div class="headd-sty-left d-flex align-items-center">
									<div class="headd-sty-01">
										<a class="nav-brand py-0" href="#">
											<img src="assets/img/logo.png" class="logo" alt="" />
										</a>
									</div>
									<div class="headd-sty-02 ml-3">
										<form class="bg-white rounded-md border-bold">
											<div class="input-group">
												<input type="text" class="form-control custom-height b-0" placeholder="Search for products..." />
												<div class="input-group-append">
													<div class="input-group-text"><button class="btn bg-white text-danger custom-height rounded px-3" type="button"><i class="fas fa-search"></i></button></div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="headd-sty-last">
									<ul class="nav-menu nav-menu-social align-to-right align-items-center d-flex">
										<li>
											<div class="call d-flex align-items-center text-left">
												<i class="lni lni-phone fs-xl"></i>
												<span class="text-muted small ml-3">Call Us Now:<strong class="d-block text-dark fs-md">0(800) 123-456</strong></span>
											</div>
										</li>
										<li>
											<a href="#" onclick="openWishlist()">
												<i class="far fa-heart fs-lg"></i><span class="dn-counter bg-success">2</span>
											</a>
										</li>
										<li>
											<a href="#" onclick="openCart()">
												<div class="d-flex align-items-center justify-content-between">
													<i class="fas fa-shopping-basket fs-lg"></i><span class="dn-counter theme-bg">3</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="mobile_nav">
									<ul>
										<li>
										<a href="#" onclick="openSearch()">
											<i class="lni lni-search-alt"></i>
										</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#login">
											<i class="lni lni-user"></i>
										</a>
									</li>
									<li>
										<a href="#" onclick="openWishlist()">
											<i class="lni lni-heart"></i><span class="dn-counter">2</span>
										</a>
									</li>
									<li>
										<a href="#" onclick="openCart()">
											<i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
										</a>
									</li>
									</ul>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>

            <!-- Start Navigation -->
			{{-- <div class="headerd header-dark head-style-2">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<div class="nav-toggle"></div>
							<div class="nav-menus-wrapper">
								<ul class="nav-menu">
									<li><a href="#" class="pl-0">Home</a></li>
									<li><a href="#">Shop</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div> --}}
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

			<!-- ======================= Category & Slider ======================== -->

			<!-- ======================= Category & Slider ======================== -->

			<!-- ======================= Product List ======================== -->
			<section class="middle">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Books</h2>
								<h3 class="ft-bold pt-3">Books</h3>
							</div>
						</div>
					</div>

					<div class="row align-items-center rows-products">
						<!-- Single -->
                        @foreach ($books as $book)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                <div class="product_grid card b-0">
                                    <div class="card-body p-0">
                                        <div class="shop_thumb position-relative">
                                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('uploads/books/img/' . $book->img) }}" alt="..."></a>
                                        </div>
                                    </div>
                                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                        <div class="" style="text-align: center">
                                            <div>
                                                {{-- <div class="elso_titl"><span class="small">{{ $book->books_category }}</span></div> --}}
                                                <h1 class=""><a href="#"></a>{{ $book->name }}</h1>
                                                {{-- <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

					</div>

					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

						</div>
					</div>

				</div>
			</section>
			<!-- ======================= Product List ======================== -->

			<!-- ======================= Brand Start ============================ -->
			<section class="py-3 br-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="smart-brand">

								<div class="single-brnads">
									<img src="assets/img/shop-logo-1.png" class="img-fluid" alt="" />
								</div>

								<div class="single-brnads">
									<img src="assets/img/shop-logo-2.png" class="img-fluid" alt="" />
								</div>

								<div class="single-brnads">
									<img src="assets/img/shop-logo-3.png" class="img-fluid" alt="" />
								</div>

								<div class="single-brnads">
									<img src="assets/img/shop-logo-4.png" class="img-fluid" alt="" />
								</div>

								<div class="single-brnads">
									<img src="assets/img/shop-logo-5.png" class="img-fluid" alt="" />
								</div>

								<div class="single-brnads">
									<img src="assets/img/shop-logo-6.png" class="img-fluid" alt="" />
								</div>

								<div class="single-brnads">
									<img src="assets/img/shop-logo-1.png" class="img-fluid" alt="" />
								</div>

								<div class="single-brnads">
									<img src="assets/img/shop-logo-2.png" class="img-fluid" alt="" />
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>

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
		<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/ion.rangeSlider.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/slider-bg.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/smoothproducts.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/snackbar.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/jQuery.style.switcher.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

		<script>
			function openWishlist() {
				document.getElementById("Wishlist").style.display = "block";
			}
			function closeWishlist() {
				document.getElementById("Wishlist").style.display = "none";
			}
		</script>

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
