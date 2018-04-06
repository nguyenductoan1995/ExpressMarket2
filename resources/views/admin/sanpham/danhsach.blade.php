
@extends('admin.layout.index')
@section('content')

@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách sản phẩm</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
            <th>
                Tên Sản Phẩm
            </th>
            <th>
                Giá
            </th>
            <th>
                Ảnh Đại Diện
            </th>
			<th>
                Mô Tả
            </th>
            <th> Số Lượng</th>
			<th>
                Mới
            </th>
			<th>
                Hot
            </th>
			<th>
                Sale
            </th>
			<th>
                Loại Sản Phẩm
          
			<th>
                Ngày Tạo
            </th>
			<th>
                Ngày Sửa
            </th>
			<th>
                Thao Tác
            </th>
        </tr>

	  		  @foreach ($sanpham as $sp)
            <tr class="info">
                <td>
                {{$sp -> id_sp}}
                </td>
                <td>
				{{$sp -> ten_sp}}
                </td>
				<td>
				{{number_format($sp -> gia)}} VNĐ
                </td>
				<td>
				<img widh="100px" height="100px" src="source/img/products/{{$sp -> url_hinh}}" />
                </td>
				<td>
				{{$sp -> mo_ta}}
                </td>
				<td>
				{{$sp -> so_luong_ton}}
                </td>
				<td>
				@if($sp -> sp_moi == 0)
				{{'Không'}}
				@else
				{{'Có'}}
				@endif
                </td>
				<td>
				@if($sp -> sp_hot == 0)
				{{'Không'}}
				@else
				{{'Có'}}
				@endif
                </td>
				<td>
				{{number_format($sp -> sp_sale)}} VNĐ
                </td>
				<td>
				{{$sp ->id_loai}}
                </td>
                <td>
				{{$sp -> created_at}}
                </td>
                <td>
				{{$sp -> updated_at}}
                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/sanpham/sua/{{$sp->id_sp}}">Sửa</a>
                    
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/sanpham/xoa/{{$sp->id_sp}}">Xoá</a>
                    </button>
				</td>
            </tr>
			@endforeach


    </table><div class="container">				
@endsection