
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
            <th> Thành Tiền</th>
           
			<th>
                Ngày Đặt
            </th>
			
        </tr>

	  		  @foreach ($ctdh as $ctdh)
                  
            <tr class="info">
                <td>
                {{$ctdh -> id_ctdh}}
                </td>
              
				
                <td>
				{{$ctdh ->ten_sp}}
                </td>
                <td>
				{{$ctdh -> so_luong}}
                </td>   
                <td>
				{{number_format($ctdh -> thanh_tien)}} VNĐ
                </td>
                <td>
				{{$ctdh -> created_at}}
                </td>
              
            </tr>
			@endforeach


    </table>		
    <a href="admin/donhang/danhsach"><button type="button" class="btn btn-default navbar-btn pull-left" >Trở Về</button></a>
@endsection