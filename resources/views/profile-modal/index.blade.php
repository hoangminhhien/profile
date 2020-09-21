<!DOCTYPE html>
<html>
<head>
	<title>Tạo hướng dẫn viên</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<style type="text/css">
	.container{
		padding-top: 30px
	}
	.name-school{
		font-size: 20px
	}
	.class-border{
		margin: 20px 0
	}
</style>
<body style="background-color: #f0f0f0">
	<div class="container">
		<div class="card class-border">
			<div class="card-body" >
				<div class="row">
					<div class="col-md-3 text-center">
						<img src="{{ asset('image/camera.png') }}" style="width: 50%; cursor: pointer;" class="showUpload rounded-circle">
						<input type="file" name="" id="uploadAvatar" style="display: none;">
					</div>
					<div class="col-md-9">
						<div class="form-group">
							<input type="text" name="" class="form-control" style="border: none;font-weight: bold; font-size: 25px" placeholder="Họ tên">
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group row">
								    <label class="col-sm-4 col-form-label font-weight-bold">Ngày sinh</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control">
								    </div>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group row">
								    <label class="col-sm-4 col-form-label font-weight-bold">Giới tính</label>
								    <div class="col-sm-8">
								      	<label class="radio-inline">
									      <input type="radio" name="optradio">   Nam
									    </label>
									    <label class="radio-inline">
									      <input type="radio" name="optradio">   Nữ
									    </label>
									    <label class="radio-inline">
									      <input type="radio" name="optradio">   Giới tính khác
									    </label>
								    </div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group row">
								    <label class="col-sm-4 col-form-label font-weight-bold">Điện thoại</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control">
								    </div>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group row">
								    <label class="col-sm-4 col-form-label font-weight-bold">Email</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control">
								    </div>
								</div>
							</div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-2 col-form-label font-weight-bold">Địa chỉ</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-2 col-form-label font-weight-bold">Link tới fb cá nhân</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control">
						    </div>
						</div>
						<div class="form-group row">
							<div class="col">
								<button type="button" class="btn btn-success">Cập nhật ngay</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong style="font-size: 23px">Mô tả bản thân</strong>
				<hr style="width: 100%; border: 1px solid black">
				<textarea class="form-control" rows="3"></textarea>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong style="font-size: 23px">
					<i class="fa fa-book" aria-hidden="true"></i> Học vấn</strong>
					<div class="form-group row">
						<div class="col-2"></div>
						<div class="col-9">
							<div class="name-school font-weight-bold">Đại học kinh doanh và công nghệ Hà Nội</div>
							<div class="font-italic">Công nghệ thông tin</div>
							<div>8/2015 - 5/2019</div>
							<p class="description-education">HUBT</p>
						</div>
						<div class="col-1">
							<i class="fa fa-eye openModalEducation" aria-hidden="true" style="color: green; cursor: pointer;"></i>
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<button type="button" class="btn btn-success openModalEducation" style="background-color: transparent; color: green">Thêm mục</button>
						</div>
					</div>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong style="font-size: 23px">
					<i class="fa fa-certificate" aria-hidden="true"></i> Chứng chỉ</strong>
					<div class="form-group row">
						<div class="col-2"></div>
						<div class="col-9">
							<strong class="name-school font-weight-bold">Chứng nhận loại xuất sắc</strong>
							<div class="font-italic"><small>tại</small> Viện Đại học Harvard</div>
							<div>8/2015 - 5/2019</div>
							<p class="description-certification">Viện Đại học Harvard (tiếng Anh: Harvard University), còn gọi là Đại học Harvard, là một viện đại học nghiên cứu tư thục, thành viên của Liên đoàn Ivy nằm ở Cambridge, Massachusetts, Hoa Kỳ</p>
						</div>
						<div class="col-1">
							<i class="fa fa-eye openModalCertification" aria-hidden="true" style="color: green; cursor: pointer;"></i>
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<button type="button" class="btn btn-success openModalCertification" style="background-color: transparent; color: green">Thêm mục</button>
						</div>
					</div>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong style="font-size: 23px">
					<i class="fa fa-users" aria-hidden="true"></i> Hoạt động xã hội & Tình nguyện</strong>
					<div class="form-group row">
						<div class="col-2"></div>
						<div class="col-9">
							<strong class="name-school font-weight-bold">CLB Tình nguyện Hải Âu</strong> (<small class="font-italic">Thành viên</small>)
							<div>8/2015 - 5/2019</div>
							<p class="description-volunteer">Mục đích hoạt động của CLB là giúp đỡ những hoàn cảnh khó khăn trong cuộc sống: các cụ già neo đơn, trẻ em mồ côi, gia đình khó khăn,…; hướng tới các hoạt động có ích cho cộng đồng, xã hội; cũng như tạo cơ hội cho học viên Topica tham gia các hoạt động ý nghĩa, từ đó mở rộng mối quan hệ với cộng đồng, đoàn kết, cởi mở và sống có ích hơn. Theo chị Phạm Thị Hồng Nhung, học viên lớp U1, chủ nhiệm CLB: “Tinh thần hoạt động của CLB là mọi hoạt động đều xuất phát từ chữ "Tâm", vì đây là CLB Tình nguyện nên mọi việc đều là do các thành viên tự nguyện làm”.</p>
						</div>
						<div class="col-1">
							<i class="fa fa-eye openModalVolunteer" aria-hidden="true" style="color: green; cursor: pointer;"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-4">
								<img src="https://media.gettyimages.com/photos/woman-lifts-her-arms-in-victory-mount-everest-national-park-picture-id507910624?s=612x612" width="100%">
							</div>
							<div class="col-4">
								<img src="https://media.gettyimages.com/photos/woman-lifts-her-arms-in-victory-mount-everest-national-park-picture-id507910624?s=612x612" width="100%">
							</div>
							<div class="col-4">
								<img src="https://media.gettyimages.com/photos/woman-lifts-her-arms-in-victory-mount-everest-national-park-picture-id507910624?s=612x612" width="100%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<button type="button" class="btn btn-success openModalVolunteer" style="background-color: transparent; color: green">Thêm mục</button>
						</div>
					</div>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong style="font-size: 23px">
					<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> Kĩ năng
				</strong>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Ngôn ngữ</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" rows="3"></textarea>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Tổ chức hoạt động</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" rows="3"></textarea>
				    </div>
				  </div>
				<div class="row">
					<div class="col text-center">
						<button type="button" class="btn btn-success openModalSkill" style="background-color: transparent; color: green">Thêm mục</button>
					</div>
				</div>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong style="font-size: 23px">
					<i class="fa fa-history" aria-hidden="true"></i> Nhật ký hoạt động</strong>
					<div class="form-group row">
						<div class="col-2"></div>
						<div class="col-9">
							<div class="name-school font-italic">14 tháng 7,2020
							</div> 
							<small class="font-italic">tại</small>
							<strong>Du lịch Việt (Công ty Cổ phần Du lịch Việt)</strong>
							<p class="description-history">Chương trình team building và tổ chức Gala dinner cho đoàn khách ngân hàng MSB với 200 khách đã thành công tốt đẹp</p>
						</div>
						<div class="col-1">
							<i class="fa fa-eye openModalHistory" aria-hidden="true" style="color: green; cursor: pointer;"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-4">
								<img src="https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2019_01_04/image003.jpg" width="100%">
							</div>
							<div class="col-4">
								<img src="https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2019_01_04/image003.jpg" width="100%">
							</div>
							<div class="col-4">
								<img src="https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2019_01_04/image003.jpg" width="100%">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<button type="button" class="btn btn-success openModalHistory" style="background-color: transparent; color: green">Thêm mục</button>
						</div>
					</div>
			</div>
		</div>
	</div>
@include('profile-modal.modal')
</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function(){
		$('.showUpload').click(function(){
			$( "#uploadAvatar" ).click();
		})
		$('.class-border').hover(
           function () {
              $(this).css({"border": "2px solid green"})
           },
           function () {
              $(this).css({"border": "none"})
           }
        );
        $('.dateEducation').daterangepicker({
	      	autoUpdateInput: false,
	      	locale: {
	          	cancelLabel: 'Clear'
	      	}
	  	});
	  	$('.dateEducation').on('apply.daterangepicker', function(ev, picker) {
	      	$(this).val(picker.startDate.format('DD/MM/YYYY') + '-' + picker.endDate.format('DD/MM/YYYY'));
	  	});
	  	$('.dateEducation').on('cancel.daterangepicker', function(ev, picker) {
	      	$(this).val('');
	  	});
	  	$('body').delegate('.showImageActivity', 'click', function (){
	  		console.log(2222)
	  	})
	  	$('.openModalEducation').click(function(){
	  		$('.modal-title').html('Học vấn')
	  		$('#modalProfile').modal('show')
	  		$('#modalProfile').on('shown.bs.modal', function(){
				$(this).find('iframe').attr('src','/education')
				$('body').delegate('.submit-form', 'click', function (){
				  	let iFrame = $('#iframe').contents()
				  	let name = iFrame.find('.name').val()
				  	let specialized = iFrame.find('.specialized').val()
				  	let start_date = iFrame.find('.start_date').val()
				  	let end_date = iFrame.find('.end_date').val()
				  	let description = iFrame.find('#description').val()
				  	console.log(iFrame.find('#form-education').attr('url'))
				  	console.log(name, specialized, start_date, end_date, description)
			  	})
			})
	  	})
	  	$('.openModalCertification').click(function(){
	  		$('.modal-title').html('Chứng chỉ')
	  		$('#modalProfile').modal('show')
	  		$('#modalProfile').on('shown.bs.modal',function(){
			  $(this).find('iframe').attr('src','/certification')
			  $('body').delegate('.submit-form', 'click', function (){
			  		console.log($('#iframe').contents().find('.card #form-education .aaaaa').val())
			  	})
			})
	  	})
	  	$('.openModalVolunteer').click(function(){
	  		$('.modal-title').html('Hoạt động xã hội')
	  		$('#modalProfile').modal('show')
	  		$('#modalProfile').on('shown.bs.modal',function(){
			  $(this).find('iframe').attr('src','/volunteer')
			  $('body').delegate('.submit-form', 'click', function (){
			  		console.log($('#iframe').contents().find('.card #form-education .aaaaa').val())
			  	})
			})
	  	})
	  	$('.openModalSkill').click(function(){
	  		$('.modal-title').html('Kĩ năng')
	  		$('#modalProfile').modal('show')
	  		$('#modalProfile').on('shown.bs.modal',function(){
			  $(this).find('iframe').attr('src','/skill')
			  $('body').delegate('.submit-form', 'click', function (){
			  		console.log($('#iframe').contents().find('.card #form-education .aaaaa').val())
			  	})
			})
	  	})
	  	$('.openModalHistory').click(function(){
	  		$('.modal-title').html('Nhật ký hoạt động')
	  		$('#modalProfile').modal('show')
	  		$('#modalProfile').on('shown.bs.modal',function(){
			  $(this).find('iframe').attr('src','/history')
			  $('body').delegate('.submit-form', 'click', function (){
			  		console.log($('#iframe').contents().find('.card #form-education .aaaaa').val())
			  	})
			})
	  	})
	});
</script>