<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="card">
	<div class="card-body">
		<form id="form-education" url="{{ route('profile.education') }}">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
					    <label style="font-weight: bold;">Trường học <strong style="color: red">(*)</strong></label>
					    <input type="text" name="name" class="form-control name dateEducation" required>
					 </div>
				</div>
				<div class="col-6">
					<div class="form-group">
					   	<label style="font-weight: bold;">Chuyên ngành <strong style="color: red">(*)</strong></label>
					    <input type="text" name="specialized" class="form-control specialized">
					</div>
				</div>
			</div>
			<label style="font-weight: bold;">Thời gian <strong style="color: red">(*)</strong></label>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
					    <label>Băt đầu</label>
					    <input type="text" name="start_date" class="form-control start_date">
					 </div>
				</div>
				<div class="col-6">
					<div class="form-group">
					   	<label>Kết thúc</label>
					    <input type="text" name="end_date" class="form-control end_date">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<label style="font-weight: bold;">Mô tả chi tiết</label>
					<textarea class="form-control" rows="4" id="description"></textarea>
				</div>
			</div>
		</form>
	</div>
</div>