
@extends('admin.layout.index')
@section('content')
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách loại sản phẩm</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
            <th>
                Tên Loại
            </th>
            <th>
                Ngày Tạo
            </th>
            <th>
                Ngày Sửa
            </th>
            <th> Thao Tác</th>
        </tr>

	  		  @foreach ($loaisanpham as $lsp)
            <tr class="info">
                <td>
                {{$lsp -> id_loai}}
                </td>
                <td>
				{{$lsp -> ten_loai}}
                </td>
                <td>
				{{$lsp -> created_at}}
                </td>
                <td>
				{{$lsp -> updated_at}}
                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/loaisanpham/sua">Sửa</a>
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/loaisanpham/xoa">Xoá</a>
                    </button>
				</td>
            </tr>
			@endforeach


    </table><div class="container">				
@endsection