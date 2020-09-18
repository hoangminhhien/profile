@extends('tour-guide.layout')
@section('css')
	<style type="text/css">
		.items{
			margin: 10px 0
		}
	</style>
@endsection
@section('content')
    <div class="list-hdv">
    	@for($i = 0; $i<= 5; $i++)
    	<div class="card items">
    		<div class="card-body">
    			<div class="row">
    				<div class="col-2">
    					<img src="{{ asset('image/avatar-hdv.png') }}" width="100%" class="rounded-circle">
    				</div>
    				<div class="col-10">
    					<div class="font-weight-bold" style="font-size: 20px">Ngô Văn Long</div>
    					<small style="font-style: italic;">05 tháng 9, 2020</small> tại <b>Hạ Long</b><br>
    					<small style="font-style: italic;">đơn vị tổ chức </small><b>PYS Travel (Công ty TNHH Du lịch PYS)</b>
    				</div>
    			</div>
    			<p>Chương trình team building và tổ chức Gala dinner cho đoàn khách ngân hàng MSB với 200 khách đã thành công tốt đẹp</p>
    			<div class="row">
    				<div class="col-4">
    					<img src="{{ asset('image/avatar-hdv.png') }}" width="100%">
    				</div>
    				<div class="col-4">
    					<img src="{{ asset('image/avatar-hdv.png') }}" width="100%">
    				</div>
    				<div class="col-4">
    					<img src="{{ asset('image/avatar-hdv.png') }}" width="100%">
    				</div>
    			</div>
    		</div>
    	</div>
    	@endfor
	</div>
@endsection
