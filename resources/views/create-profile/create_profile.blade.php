<!DOCTYPE html>
<html>
<head>
	<title>zulik</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style type="text/css">
	.form-group{
		height: 25px;
	}
	.form-control{
		height: 25px
	}
</style>
</head>
<body>
<div class="container" style="padding-top: 100px">
	<div class="card class-border" style="border: none;">
		<div class="card-body" >
			<div class="row">
				<div class="col-md-3 text-center">
					<img src="{{ asset('image/camera.png') }}" style="width: 50%; cursor: pointer;" class="showUpload">
					<input type="file" name="" id="uploadAvatar" style="display: none;">
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<input type="text" name="" class="form-control" style="border: none;font-weight: bold; font-size: 25px" placeholder="Họ tên">
					</div>
					<div class="form-group row">
					    <label class="col-sm-2 col-form-label font-weight-bold">Ngày sinh</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control">
					    </div>
					</div>
					<div class="form-group row">
					    <label class="col-sm-2 col-form-label font-weight-bold">Giới tính</label>
					    <div class="col-sm-10">
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
					<div class="form-group row">
					    <label class="col-sm-2 col-form-label font-weight-bold">Điện thoại</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control">
					    </div>
					</div>
					<div class="form-group row">
					    <label class="col-sm-2 col-form-label font-weight-bold">Email</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control">
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
				</div>
			</div>
		</div>
	</div>
	<div class="card class-border" style="border: none;">
		<div class="card-body">
			<strong style="font-size: 20px">Mô tả bản thân</strong>
			<hr style="width: 100%; border: 1px solid black">
			<textarea class="form-control" rows="3"></textarea>
		</div>
	</div>
	@include('create-profile.volunteer')
	@include('create-profile.education')
	<div class="card class-border" style="border: none;">
		<div class="card-body">
			<strong style="font-size: 20px">Điểm mạnh của bản thân</strong>
			<hr style="border: 1px solid black">
			<textarea class="form-control" rows="3"></textarea>
		</div>
	</div>
	<div class="card class-border" style="border: none;">
		<div class="card-body">
			<strong style="font-size: 20px">Điểm yếu của bản thân</strong>
			<hr style="border: 1px solid black">
			<textarea class="form-control" rows="3"></textarea>
		</div>
	</div>
	@include('create-profile.skill')
	@include('create-profile.skillOther')
	@include('create-profile.activity')
</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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
	});
</script>
</html>