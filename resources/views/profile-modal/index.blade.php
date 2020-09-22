<!DOCTYPE html>
<html>
<head>
	<title>Tạo hướng dẫn viên</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
	.dz-button{
		display: none;
	}
</style>
<body style="background-color: #f0f0f0">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6">
			<div class="card class-border">
				<div class="image-cover" style="background-color: green; height: 200px; position: relative;">
					<button type="button" class="btn btn-dark showUpload" id="uploadCover" style="display: none; font-weight: bold; margin:10px">
					<i class="fa fa-camera" aria-hidden="true"></i>
						Cập nhật ảnh bìa
					</button>
				</div>
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4">
						<img src="{{ asset('image/camera.png') }}" style="cursor: pointer; position: absolute; top: -120px; width: 100%" class="showUpload rounded-circle" >
						<input type="file" name="" id="uploadAvatar" style="display: none;">
					</div>
					<div class="col-4"></div>
				</div>
				<input type="file" name="" id="uploadAvatar" style="display: none;">
			<div class="card-body" style="padding-top: 120px">
				<div class="row">
				    <label class="col-sm-3 col-form-label font-weight-bold">Họ tên</label>
				    <div class="col-sm-9 col-form-label">
				      <label class="font-italic">Chưa cập nhật</label>
				    </div>
				</div>
				<div class="row">
				    <label class="col-sm-3 col-form-label font-weight-bold">Năm sinh</label>
				    <div class="col-sm-9 col-form-label">
				      <label class="font-italic">Chưa cập nhật</label>
				    </div>
				</div>
				<div class="row">
				    <label class="col-sm-3 col-form-label font-weight-bold">Giới tính</label>
				    <div class="col-sm-9 col-form-label">
				      <label class="font-italic">Chưa cập nhật</label>
				    </div>
				</div>
				<div class="form-group row">
					<div class="col">
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalInformation">Cập nhật ngay</button>
					</div>
				</div>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong class="float-left" style="font-size: 23px">
					<i class="fa fa-book" aria-hidden="true"></i> Học vấn
				</strong>
				<div class="float-right">
					<button type="button" class="btn btn-success openModalEducation" style="background-color: transparent; color: green">Thêm mục</button>
				</div>
				<div class="form-group row" style="clear: both; padding-top: 10px">
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
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong style="font-size: 23px">
					</strong>
					<strong class="float-left" style="font-size: 23px">
					<i class="fa fa-certificate" aria-hidden="true"></i> 
					Chứng chỉ
				</strong>
				<div class="float-right">
					<button type="button" class="btn btn-success openModalCertification" style="background-color: transparent; color: green">Thêm mục</button>
				</div>
				<div class="form-group row" style="clear: both; padding-top: 10px">
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
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong class="float-left" style="font-size: 23px">
					<i class="fa fa-users" aria-hidden="true"></i>
					Hoạt động xã hội & Tình nguyện
				</strong>
				<div class="float-right">
					<button type="button" class="btn btn-success openModalVolunteer" style="background-color: transparent; color: green">Thêm mục</button>
				</div>
				<div class="form-group row" style="clear: both; padding-top: 10px">
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
				<small class="form-text text-muted">Tải lên hình ảnh về hoạt động của bạn</small>
				<form action="/file-upload" class="dropzone">
					<button type="button" class="btn btn-success uploadImageHistory">
						<i class="fa fa-upload" aria-hidden="true"></i>	
						Tải ảnh
					</button>
				  	<div class="fallback">
				    	<input name="file" type="file" multiple />
				  	</div>
				</form>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong class="float-left" style="font-size: 23px">
					<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
					Kĩ năng
				</strong>
				<div class="float-right">
					<button type="button" class="btn btn-success openModalSkill" style="background-color: transparent; color: green">Thêm mục</button>
				</div>
				<div class="form-group row" style="clear: both; padding-top: 10px">
				    <label class="col-sm-2 col-form-label">Ngôn ngữ</label>
				    <label class="col-sm-9 col-form-label">Tiếng việt, Tiếng Anh, Tiếng trung
				    </label>
				    <div class="col-1">
						<i class="fa fa-eye openModalSkill" aria-hidden="true" style="color: green; cursor: pointer;"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="card class-border" style="border: none;">
			<div class="card-body">
				<strong class="float-left" style="font-size: 23px">
					<i class="fa fa-history" aria-hidden="true"></i>
					Nhật ký hoạt động
				</strong>
				<div class="float-right">
					<button type="button" class="btn btn-success openModalHistory" style="background-color: transparent; color: green">Thêm mục</button>
				</div>
				<div class="form-group row" style="clear: both; padding-top: 10px">
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
				<small class="form-text text-muted">Tải lên hình ảnh về hoạt động của bạn</small>
				<form action="/file-upload" class="dropzone">
					<button type="button" class="btn btn-success uploadImageHistory">
						<i class="fa fa-upload" aria-hidden="true"></i>	
						Tải ảnh
					</button>
				  	<div class="fallback">
				    	<input name="file" type="file" multiple />
				  	</div>
				</form>
				<div class="row">
					

				</div>
			</div>
		</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3"></div>
	</div>
@include('profile-modal.modal')
@include('profile-modal.modal-profile')
</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/dropzone.min.js') }}"></script>
<script type="text/javascript">
	$( document ).ready(function(){
		$('.uploadImageHistory').click(function(){
			$('.dz-button').click()
		})
		// upload image
		if ($('#DropzoneElementId').length) {
		  $("div#DropzoneElementId").dropzone({ url: "/file/post" });
		  // other code here
		}
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
        $(document).on('mouseenter', '.image-cover', function () {
	        $(this).find(":button").show();
	    }).on('mouseleave', '.image-cover', function () {
	        $(this).find(":button").hide();
	    });
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
	  		$.ajax({
			    url: '/education',
			    type: 'get',
			    success: function(response){ 
	  			$('.modal-title').html('Học vấn')
			      // Add response in Modal body
			      $('#content-modal').html(response);

			      // Display Modal
			      $('#modalProfile').modal('show'); 
			    }
			});
	  // 		$('#modalProfile').modal('show')
	  // 		$('#modalProfile').on('shown.bs.modal', function(e){
	  // 			var link = $(e.relatedTarget);
   //  			$(this).find("#content-modal").load(link.attr("/education"));
			// 	$(this).find('iframe').attr('src','/education')
			// 	$('body').delegate('.submit-form', 'click', function (){
			// 	  	let iFrame = $('#iframe').contents()
			// 	  	let name = iFrame.find('.name').val()
			// 	  	let specialized = iFrame.find('.specialized').val()
			// 	  	let start_date = iFrame.find('.start_date').val()
			// 	  	let end_date = iFrame.find('.end_date').val()
			// 	  	let description = iFrame.find('#description').val()
			// 	  	console.log(iFrame.find('#form-education').attr('url'))
			// 	  	console.log(name, specialized, start_date, end_date, description)
			//   	})
			// })
	  	})
	  	$('.openModalCertification').click(function(){
	  		$.ajax({
			    url: '/certification',
			    type: 'get',
			    success: function(response){ 
	  			$('.modal-title').html('Chứng chỉ')
			      // Add response in Modal body
			      $('#content-modal').html(response);
			      // Display Modal
			      $('#modalProfile').modal('show'); 
			    }
			});
	  	})
	  	$('.openModalVolunteer').click(function(){
	  		$.ajax({
			    url: '/volunteer',
			    type: 'get',
			    success: function(response){ 
	  			$('.modal-title').html('Hoạt động xã hội')
			      // Add response in Modal body
			      $('#content-modal').html(response);
			      // Display Modal
			      $('#modalProfile').modal('show'); 
			    }
			});
	  	})
	  	$('.openModalSkill').click(function(){
	  		$.ajax({
			    url: '/skill',
			    type: 'get',
			    success: function(response){ 
	  			$('.modal-title').html('Kĩ năng')
			      // Add response in Modal body
			      $('#content-modal').html(response);
			      // Display Modal
			      $('#modalProfile').modal('show'); 
			    }
			});
	  	})
	  	$('.openModalHistory').click(function(){
	  		$.ajax({
			    url: '/history',
			    type: 'get',
			    success: function(response){ 
	  			$('.modal-title').html('Nhật ký hoạt động')
			      // Add response in Modal body
			      $('#content-modal').html(response);
			      // Display Modal
			      $('#modalProfile').modal('show'); 
			    }
			});
	  	})
	});
</script>