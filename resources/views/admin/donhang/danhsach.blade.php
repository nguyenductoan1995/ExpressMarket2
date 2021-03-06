
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
                Đơn Giá
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
				{{number_format($donhang -> tong_tien)}} VNĐ
                </td>
                <td>
				{{$donhang ->sdt}}
                </td>
                <td>
				{{$donhang -> address}}
                </td>
                <td>
				{{$donhang -> ngay_dat}}
                </td>
                <td>
				@if($donhang -> status == 0)
				<span class="label label-danger">{{'Chưa Duyệt'}}</span>
				@else
				<span class="label label-primary">{{'Đã Duyệt'}}</span>
				@endif
                </tD>
                <td>
                    <button class="btn btn-info">
					<a href="admin/donhang/chitiet/{{$donhang->id_dh}}">Chi Tiết</a>
                    
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/donhang/duyet/{{$donhang->id_dh}}">Duyệt</a>
                    
                    </button>
                 
				</td>
            </tr>
			@endforeach


    </table>		
@endsection