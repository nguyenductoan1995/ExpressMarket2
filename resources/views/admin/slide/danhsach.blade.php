
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
                Đường dẫn
            </th>
            <th>
                Ảnh 
            </th>
         
            <th> Thao Tác</th>
        </tr>

	  		  @foreach ($sld as $sl)
            <tr class="info">
                <td>
                {{$sl -> id_slide}}
                </td>
                <td>
				{{$sl -> link}}
                </td>
                <td>
				<img widh="100px" height="100px" src="source/img/products/{{$sl -> image}}" />
                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/slide/sua/{{$sl->id_slide}}">Sửa</a>
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/slide/xoa/{{$sl->id_slide}}">Xoá</a>
                    </button>
				</td>
            </tr>
			@endforeach


    </table><div class="container">				
@endsection