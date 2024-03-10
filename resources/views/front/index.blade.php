
<!DOCTYPE html>
<html lang="zxx">
<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kumo- Fashion eCommerce HTML Template</title>

        <!-- Custom CSS -->
        {{-- <link href="{{ asset('frontend/assets/css/plugins/animation.css') }}" rel="stylesheet"> --}}
        <link href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('frontend/assets/css/plugins/flaticon.css') }}" rel="stylesheet"> --}}
        <link href="{{ asset('frontend/assets/css/plugins/font-awesome.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('frontend/assets/css/plugins/iconfont.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('frontend/assets/css/plugins/ion.rangeSlider.min.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('frontend/assets/css/plugins/light-box.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('frontend/assets/css/plugins/line-icons.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('frontend/assets/css/plugins/slick-theme.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('frontend/assets/css/plugins/slick.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('frontend/assets/css/plugins/snackbar.min.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('frontend/assets/css/plugins/themify.css') }}" rel="stylesheet"> --}}
        <link href="{{ asset('frontend/assets/css/styles.css') }}" rel="stylesheet">

        {{-- My custome link --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>

    <body>

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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
						<!-- Single -->
                        @foreach ($books as $book)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                <div class="product_grid card b-0">
                                    <div class="card-body p-0">
                                        <div class="shop_thumb position-relative">
                                            <button class="card-img-top d-block overflow-hidden read-book" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('uploads/books/img/' . $book->img) }}" alt="..."></button>
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
		</div>

        <!-- Button trigger modal -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			 $(document).ready(function(){
				$('.read-book').click(function(){
					var bookId = $(this).closest('.book').data('book-id');

					$.ajax({
						type: 'POST',
						url: '{{ route('front.subscription.store') }}',

						data: {
							_token: '{{ csrf_token() }}',
							book_id: bookId
						},
						success: function(response) {
							if (response.subscribed) {

							} else {
								$('#exampleModal').modal('show');
							}
						}
					});
				});
			});
		</script>
	</body>

</html>
