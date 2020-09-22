<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Trang chủ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
            <style type="text/css">
				.key-search{
					color: white;
				    font-weight: bold;
				    font-size: 20px;
				}
				.skill, .language{
					padding: 10px 0
				}
				.add-search{
					border-radius: 20px
				}
				.item-hdv, .list-offer{
					margin: 10px 0
				}
				#menu ul{
					list-style-type: none;
				}
				#menu ul li{
					padding: 10px 0;
				}
				#menu ul li a{
					font-size: 18px;
					color: #2b63ab;
					text-decoration: none;
				}
				.col-lg-3, .col-lg-6{
					padding: 5px
				}
				.card-body{
					padding: 10px
				}
			</style>
			@yield('css')
   </head>
   <body style="background-color: #e9ebee">
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">
                <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <h1>Tìm hướng dẫn viên!</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form mb-30">
                                    	<div class="row">
                                    		<div class="col-xl-4">
                                    			<input type="text" placeholder="Từ ngày">
                                    		</div>
                                    		<div class="col-xl-4">
                                    			<input type="text" placeholder="đến ngày">
                                    		</div>
                                    		<div class="col-xl-4">
                                    			<input type="text" placeholder="đi đâu">
                                    		</div>
                                    	</div>
                                    </div>
                                    <div class="select-form mb-30">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Loại tour</option>
                                                <option value="">Nội địa</option>
                                                <option value="">Inbound</option>
                                                <option value="">Outbound</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form mb-30">
                                        <a href="#">Tìm kiếm</a>
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="card">
							<div class="card-body">
								<div id="menu">
									 <ul>
										<li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin rao của tôi</a></li>
										<li><a href="#"> <i class="fa fa-bookmark" aria-hidden="true"></i> Đã lưu</a></li>
										<li><a href="#"> <i class="fa fa-envelope" aria-hidden="true"></i> Hộp thư đến</a></li>
										<li><a href="#"> <i class="fa fa-envelope" aria-hidden="true"></i> Thư viện báo giá</a></li>
										<li><a href="#"><i class="fa fa-building" aria-hidden="true"></i> Công ty của tôi</a></li>
									 </ul>
								</div>
								<hr>
								<div>
									<a href="#" style="color: rgb(16, 105, 121); font-weight: bold;">Hướng dẫn viên yêu thích</a>
								</div>
								<div>
									<a href="#" style="color: rgb(16, 105, 121); font-weight: bold;">Khách sạn yêu thích</a>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="card">
							<div class="card-body">
								<label>Kết quả tìm kiếm</label>
							</div>
						</div>
						@yield('content')
						<div class="text-center">
					    	<button type="button" class="btn btn-primary" style="border-radius: 30px">
					    		Xem thêm kết quả
					    	</button>
					    </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog_right_sidebar">
                        <div class="card">
							<div class="card-body">
								<div class="font-weight-bold text-center">
									Hướng dẫn viên nổi bật
								</div>
								<hr>
								@for ($i = 0; $i <= 5; $i++)
									<div class="row list-offer">
										<div class="col-4">
											<img src="{{ asset('image/avatar-hdv.png') }}" width="100%" class="rounded-circle">
										</div>
										<div class="col-8">
											<small style="font-weight: bold;">Nguyễn Hoàng Lan 
											</small>
											<small>Hà Nội</small>
										</div>
									</div>
								@endfor
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('assets/js/contact.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        
    </body>
</html>