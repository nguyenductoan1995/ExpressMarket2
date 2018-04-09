
@extends('admin.layout.index')
@section('content')
			
	<div class="container">
	@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
	<form action="admin/donhang/duyet/{{$donhang->id_dh}}" method="POST" >
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
			
			<div class="form-group">
			<label >Đơn Hàng Số:  {{$donhang -> id_dh}}</label></br>
			</div><div class="form-group">
			<label >Giá:
            {{number_format($donhang -> tong_tien)}} VNĐ</label></br>
            <label>SĐT Khách Hàng:
            {{$donhang ->sdt}}
         </label></br><label>Địa Chỉ Nhận Hàng: 
            {{$donhang -> adress}}</label></br>
          <label>Ngày Đặt:
            {{$donhang -> ngay_dat}}</label></br>
			<label >Tình trạng : </label>
			<label class="radio-inline">

				<input  name="status" value="0" 
				@if($donhang -> status == 0)
						{{"checked"}}
					@endif type="radio">Chưa Duyệt
			</label>
			<label class="radio-inline">
				<input name="status" value="1" 
				@if($donhang -> status == 1)
						{{"checked"}}
					@endif type="radio">Đã Duyệt
			</label></br>
			
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-info" >
						<i class="ace-icon fa fa-check bigger-110"></i> Duyệt </button>
											&nbsp; &nbsp; &nbsp;
				
			</div>
	</form>				
	</br></br>
						</div>										
@endsection