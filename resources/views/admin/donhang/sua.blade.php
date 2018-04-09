
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

	  		  @foreach ($ctdh as $ctdh)
                  
            <tr class="info">
                <td>
                {{$ctdh -> id_ctdh}}
                </td>
              
				<td>
				{{number_format($ctdh -> thanh_tien)}} VNĐ
                </td>
                <td>
				{{$ctdh ->sdt}}
                </td>
                <td>
				{{$ctdh -> adress}}
                </td>
                <td>
				{{$ctdh -> created_at}}
                </td>
                <td>
				@if($ctdh -> status == 0)
				{{'Chưa Duyệt'}}
				@else
				{{'Đã Duyệt'}}
				@endif
                </tD>
                <td>
                    <button class="btn btn-info">
					<a href="admin/ctdh/duyet/{{$ctdh->id_dh}}">Chi Tiết</a>
                    
                    </button>
                 
				</td>
            </tr>
			@endforeach


    </table>		
@endsection