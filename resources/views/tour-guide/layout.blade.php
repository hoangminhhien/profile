<!DOCTYPE html>
<html>
<head>
	<title>hdv</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
	#main{
		margin-top: 15px
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
</style>
@yield('css')
<body>
<div class="container-fluid">
	<div id="header">
		<div class="backgroup-header" style="background-image: url(https://divui.com/blog/wp-content/uploads/2018/10/111111.jpg); height: 400px; width: initial;">
			
		</div>
		<div style="background-color: #2b63ab">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-11">
				<div style="color: white; font-size: 30px; padding-top: 20px">Tìm kiếm hướng dẫn viên đi Hạ Long</div>
			</div>
		</div>
		</div>
		<div style="background-color: #66a2ee">
			<div class="row skill">
				<div class="col-1"></div>
				<div class="col-11">
					<div class="row">
						<div class="col-2">
							<label class="key-search">Kĩ năng</label>
						</div>
						<div class="col-3">
							<button type="button" class="btn btn-light add-search"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</button>
						</div>
						<div class="col-3">
							<button type="button" class="btn btn-primary">Tìm kiếm</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row language">
				<div class="col-1"></div>
				<div class="col-11">
					<div class="row">
						<div class="col-2">
							<label class="key-search">Ngoại ngữ</label>
						</div>
						<div class="col-3">
							<button type="button" class="btn btn-light add-search"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="main">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<div class="row">
					<div class="col-3">
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
								<a href="#" style="color: rgb(16, 105, 121); font-weight: bold;">Hướng dẫn viên yêu thích</a>
								<a href="#" style="color: rgb(16, 105, 121); font-weight: bold;">Khách sạn yêu thích</a>
							</div>
						</div>
					</div>
					<div class="col-6">
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
					<div class="col-3">
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
			<div class="col-1"></div>
		</div>
	</div>

</div>
</body>
</html>