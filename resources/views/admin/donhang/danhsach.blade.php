
@extends('admin.layout.index')
@section('content')
<div class="container">		
@if(session('thongbao'))
		<div class= "alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách đơn hàng</h3>

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
                Số Lượng
            </th>
            <th>
                Thành Tiền
            </th>
			<th>
                SĐT Người Nhận
            </th>
            <th>
                Địa Chỉ Người Nhận
            </th>
            <th> Ngày Giao</th>
				
			<th>
                Trạng Thái
            </th>
			<th>
                Thao Tác
            </th>
        </tr>

	  		  @foreach ($donhang as $donhang)
                  
            <tr class="info">
                <td>
                {{$donhang -> id_dh}}
                </td>
                <td>
                {{$donhang -> id_dh}}
                </td>
                <td>
                {{$donhang -> id_dh}}
                </td>
				<td>
				{{number_format($donhang -> tong_tien)}} VNĐ
                </td>
                <td>
				{{$donhang ->sdt}}
                </td>
                <td>
				{{$donhang -> adress}}
                </td>
                <td>
				{{$donhang -> ngay_dat}}
                </td>
                <td>
				@if($donhang -> status == 0)
				{{'Chưa Duyệt'}}
				@else
				{{'Đã Duyệt'}}
				@endif
                </tD>
                <td>
                    <button class="btn btn-info">
					<a href="admin/donhang/duyet/{{$donhang->id_dh}}">Sửa</a>
                    
                    </button>
                 
				</td>
            </tr>
			@endforeach


    </table>		
@endsection