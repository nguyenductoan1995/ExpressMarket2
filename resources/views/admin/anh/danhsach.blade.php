
@extends('admin.layout.index')
@section('content')

@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách imide</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
            <th>
                Sản phẩm
            </th>
            <th>
                Ảnh 
            </th>
         
            <th> Thao Tác</th>
        </tr>

	  		  @foreach ($img as $im)
            <tr class="info">
                <td>
                {{$im -> id_hinh}}
                </td>
                <td>
				{{$im -> id_sp }}
                </td>
                <td>
				<img widh="100px" height="100px" src="source/img/products/chitiet/{{$im -> url_hinh}}" />
                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/anh/sua/{{$im->id_hinh}}">Sửa</a>
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/anh/xoa/{{$im->id_hinh}}">Xoá</a>
                    </button>
				</td>
            </tr>
			@endforeach


    </table><div class="container">				
@endsection