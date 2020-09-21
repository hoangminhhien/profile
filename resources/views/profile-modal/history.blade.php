<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="card">
	<div class="card-body">
		<form id="form-education" url="{{ route('profile.education') }}">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
					    <label style="font-weight: bold;">Đơn vị tổ chức <strong style="color: red">(*)</strong></label>
					    <input type="text" name="name" class="form-control name" required>
					 </div>
				</div>
				<div class="col-6">
					<div class="form-group">
					   	<label style="font-weight: bold;">Ngày diễn ra<strong style="color: red">(*)</strong></label>
					    <input type="text" name="specialized" class="form-control specialized">
					</div>
				</div>
			</div>
			<label style="font-weight: bold;">Địa chỉ diễn ra sự kiện <strong style="color: red">(*)</strong></label>
			<div class="form-group row">
				<input type="text" name="start_date" class="form-control start_date">
			</div>
			<div class="form-group row">
				<div class="col">
					<label style="font-weight: bold;">Mô tả về sự kiện</label>
					<textarea class="form-control" rows="4" id="description"></textarea>
				</div>
			</div>
			<small class="form-text text-muted">Tải lên hình ảnh về hoạt động của bạn</small>
			<div class="row">
				<div class="col">
					<button type="button" class="btn btn-success text-success" style="background-color: transparent">Tải ảnh</button>
				</div>
			</div>
		</form>
	</div>
</div>