
@extends('admin.layout.index')
@section('content')
			
	
	@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
	
	<form action="admin/loaisanpham/sua/{{$loaisanpham->id_loai}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label >Tên Thể Loại: </label>
				<input class="form-control" name="tenloai"  value=" {{$loaisanpham-> ten_loai}}" 
				value="{{$loaisanpham -> ten_loai}}" />
			</div>
		
			</div>
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-info" >
						<i class="ace-icon fa fa-check bigger-110"></i> Sửa </button>
											&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>	Nhập lại </button>
				</div>
			</div>
	</form>				
																
@endsection