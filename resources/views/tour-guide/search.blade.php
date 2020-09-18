@extends('tour-guide.layout')
@section('content')
    <div class="list-hdv">
	@for ($i = 0; $i <= 5; $i++)
        <div class="card item-hdv">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<img src="{{ asset('image/avatar-hdv.png') }}" width="100%">
					</div>
					<div class="col-8">
						<div class="pull-left" style="font-weight: bold; font-size: 25px;">Ngô Văn Long 
							<small>Hà Nội</small>
						</div>
						<div class="pull-right">
							<button type="button" class="btn btn-warning" style="background-color: orange; color: white; border-radius: 10px; font-size: 12px">Đặt lịch</button>
						</div>
						<div style="font-weight: bold; font-size: 20px; clear: both;">
						Hướng dẫn viên nội địa
						</div>
						<div style="font-weight: bold; font-size: 20px">Review
						</div>
						<div>
							<i class="fa fa-language" aria-hidden="true"></i> Tiếng anh, Tiếng việt
						</div>
						<div>
							<i class="fa fa-sitemap" aria-hidden="true"></i> Tổ chức Gala Dinner, Tổ chức team building, Kiến thức văn hoá
						</div>
						<div>
							<i class="fa fa-history" aria-hidden="true"></i> 
							<small style="font-style: italic;">Hợp tác gần nhất với
							</small>
							<strong>Viẹt Tourist (Công ty TNHH Du lịch Việt)</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
    @endfor
</div>
@endsection
