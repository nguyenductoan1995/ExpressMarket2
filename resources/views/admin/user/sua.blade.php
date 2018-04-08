
@extends('admin.layout.index')
@section('content')
<div class="container">	
	
	@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
	
	<form action="admin/user/sua/{{$user->id}}" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label >Tên người dùng:<b> {{$user-> full_name}} </b></label></br>
                <label >Email:<b> {{$user-> email}} </b></label></br>
				<label >Ngày tham gia:<b> {{$user-> created_at}} </b></label></br>
			
			</div>
            <div class="form-group">
			<label >Ảnh đại diện: </label>
			<img widh="100px" height="100px" src="source/img/users/{{$user-> image}}" />
		

			</div><div class="form-group">
			<label >Trạng thái : </label>
			<label class="radio-inline">

				<input  name="status" value="0" 
				@if($user -> status == 0)
						{{"checked"}}
					@endif type="radio">Đang hoạt động
			</label>
			<label class="radio-inline">
				<input name="status" value="1" 
				@if($user -> status == 1)
						{{"checked"}}
					@endif type="radio">Khóa tài khoản
			</label>
			</div>
            <label >Chức vụ : </label>
			<label class="radio-inline">

				<input  name="role" value="0" 
				@if($user -> role == 0)
						{{"checked"}}
					@endif type="radio">User
			</label>
			<label class="radio-inline">
				<input name="role" value="1" 
				@if($user -> role == 1)
						{{"checked"}}
					@endif type="radio">Admin
			</label>
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
</div>										
@endsection