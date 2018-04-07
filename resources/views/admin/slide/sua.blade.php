
@extends('admin.layout.index')
@section('content')
			
	
	@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
	
	<form action="admin/slide/sua/{{$sld->id_slide}}" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label >Đường dẫn: </label>
				<input class="form-control" name="link"  placeholder=" {{$sld-> link}}" 
				value="{{$sld-> link}}" />
			</div>
            <div class="form-group">
			<label >Ảnh</label>
			<img widh="100px" height="100px" src="source/img/products/{{$sld -> image}}" />
			<input type="file" name="{{$sld -> image}}"/>
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