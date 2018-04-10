
@extends('admin.layout.index')
@section('content')

@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách Slide</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
            <th>
                Tên
            </th>
            <th>
                Ảnh 
            </th>
         
            <th> Email</th>
            <th> Địa Chỉ</th>
            <th> SĐT</th>
            <th> Tình Trạng</th>
            <th> Chức Vụ</th>
            <th> Ngày Tham Gia</th>
            <th> Thao Tác</th>
        </tr>

	  		  @foreach ($User as $u)
            <tr class="info">
                <td>
                {{$u -> id}}
                </td>
                <td>
				{{$u ->full_name}}
                </td>
                <td>
				<img widh="100px" height="100px" src="source/img/users/{{$u->image}}" />
                </td>
                <td>
				{{$u ->email}}
                </td>
                <td>
				{{$u ->address}}
                </td>
                <td>
				{{$u ->phone}}
                </td>
                <td>@if($u ->status == 0)
				<span class="label label-primary">{{'Đang hoạt động'}}</span>
				@else
				<span class="label label-danger">{{'Bị Khóa'}}</span>
				@endif
                </td>
                <td>
				@if($u ->role == 0)
				<span class="label label-success">{{'User'}}</span>
				@else
				<span class="label label-warning">{{'Admin'}}</span>
				@endif
                </td>
                <td>
				{{$u ->created_at}}
                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/user/sua/{{$u->id}}">Sửa</a>
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/user/xoa/{{$u->id}}">Xoá</a>
                    </button>
				</td>
               
            </tr>
			@endforeach


    </table><div class="container">				
@endsection