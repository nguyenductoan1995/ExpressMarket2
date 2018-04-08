
@extends('admin.layout.index')
@section('content')
			
	<div class="container">
	@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
	<form action="admin/sanpham/sua/{{$sanpham->id_sp}}" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label >Tên Thể Loại</label>
				<select class="form-control" name ="idloai">
					<option value="0">Chọn loại sản phẩm</option>
					@foreach($loaisanpham as $lsp)
					<option 
					@if($sanpham -> id_loai == $lsp -> id_loai)
						{{"selected"}}
					@endif
					value="{{$lsp-> id_loai}}"> {{$lsp-> ten_loai}}</option>
					@endforeach
				</select>
			</div>
		
			<div class="form-group">
			<label >Tên sản phẩm:</label>
			<input class="form-control" name="ten_sp"  value="{{$sanpham -> ten_sp}}" />
			</div><div class="form-group">
			<label >Giá:</label>
			<input class="form-control" type="number" name="gia"  value="{{$sanpham->gia}}" />
			</div><div class="form-group">
			<label >Ảnh</label>
			<img widh="100px" height="100px" src="source/img/products/{{$sanpham -> url_hinh}}" />
			<input type="file" name="urlanh"/>
			</div><div class="form-group">
			<label >Mô Tả</label>
			<textarea name="mota" id="demo" class ="form-controle ckeditor" row="3" >{{$sanpham->mo_ta}}</textarea>
			</div><div class="form-group">
			<label >Số Lượng</label>
			<input type="number" class="form-control" name="soluong" value="{{$sanpham->so_luong_ton}}" />
			</div><div class="form-group">
			<label >Mới : </label>
			<label class="radio-inline">

				<input  name="new" value="0" 
				@if($sanpham -> sp_moi == 0)
						{{"checked"}}
					@endif type="radio">Cũ
			</label>
			<label class="radio-inline">
				<input name="new" value="1" 
				@if($sanpham -> sp_moi == 1)
						{{"checked"}}
					@endif type="radio">Mới
			</label>
			</div><div class="form-group">
			<label >Hot : </label>
			<label class="radio-inline">
				<input name="hot" value="0" 
				@if($sanpham -> sp_hot == 0)
						{{"checked"}}
					@endif type="radio">Không Hot
			</label>
			<label class="radio-inline">
				<input name="hot" value="1" 
				@if($sanpham -> sp_hot == 0)
						{{"checked"}}
					@endif type="radio">Hot
			</label>
			</div><div class="form-group">
			<label >Giá khuyễn mãi</label>
			<input type="number" class="form-control" name="sale" placeholder="{{$sanpham->sale}}"  />
		

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
	</br></br>
						</div>										
@endsection