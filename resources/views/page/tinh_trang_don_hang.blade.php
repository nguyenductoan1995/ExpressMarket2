@extends('master') @section('content')
<div class="row content">

	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="breadcrumbs">
			<p>
				<a href="{{route('trang-chu')}}">Trang chủ</a>
				<i class="icons icon-right-dir"></i> Đơn hàng</p>
		</div>
	</div>

	<!-- Main Content -->
	<section class="main-content col-lg-9 col-md-9 col-sm-9">

		<div class="row">

			<!-- Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					<h4>Danh sách đơn hàng</h4>
					<div class="carousel-arrows">
						<a href="#">
							<i class="icons icon-reply"></i>
						</a>
					</div>
				</div>

			</div>
			<!-- /Heading -->

		</div>


		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">
				@if(1)
				<table class="order-table">

					<tr>
						<th>ID</th>
						<th>Tổng Tiền</th>
						<th>Ngày Đặt</th>
						<th>Tình trạng</th>
					</tr>

					<tr>
						@foreach($dh as $dh)
						<td class="order-number">
									<p>{{$dh->id_dh}}</p>	
						</td>
						<td>
							<span class="price">{{number_format($dh->tong_tien)}}</span>
						</td>
						<td>
							<p>{{$dh->ngay_dat}}</p>
						</td>
						<td>
                            @if($dh->status == 1)
                                <p>Đang chờ duyệt</p>
                            @else
                                <span class = "price">Đã Duyệt</span>
                            @endif

						</td>
						<td>
							<a href="{{route('chitietdonhang',$dh->id_dh)}}" class="parent-color"><span style="color:blue ;  font-weight: bold">Chi tiết</span></a>
						</td>
					</tr>
					@endforeach
				</table>

				@else
				<table class="order-table">
					<tr>
						<th>Tên sản phẩm</th>
						<th>Hình ảnh</th>
						<th>Số lượng</th>
						<th>đơn giá</th>
						<th>Thành tiền</th>
						<th>Tùy chọn</th>
					</tr>
				</table>
				@endif
			</div>

		</div>

	
	</section>
	<!-- /Main Content -->
	<!-- Sidebar -->
	<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">

		<!-- Categories -->
		<div class="row sidebar-box purple">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="sidebar-box-heading">
					<i class="icons icon-folder-open-empty"></i>
					<h4>Categories</h4>
				</div>

				<div class="sidebar-box-content">
					<ul>
						<li>
							<a href="#">Cameras &amp; Photography
								<i class="icons icon-right-dir"></i>
							</a>
						</li>
						<li>
							<a href="#">Computers &amp; Tablets
								<i class="icons icon-right-dir"></i>
							</a>
						</li>
						<li>
							<a href="#">Cell Phones &amp; Accessories
								<i class="icons icon-right-dir"></i>
							</a>
							<ul class="sidebar-dropdown">
								<li>
									<ul>
										<li>
											<a href="#">Cell phones &amp; Smartphone</a>
										</li>
										<li>
											<a href="#">Cell Phone Accessories</a>
										</li>
										<li>
											<a href="#">Headsets</a>
										</li>
										<li>
											<a href="#">Cases, Covers & Skins</a>
										</li>
										<li>
											<a href="#">Screen Protectors</a>
										</li>
									</ul>
								</li>
								<li>
									<ul>
										<li>
											<a href="#">Chargers & Cradles</a>
										</li>
										<li>
											<a href="#">Batteries</a>
										</li>
										<li>
											<a href="#">Cables & Adapters</a>
										</li>
										<li>
											<a href="#">All About Smartphones</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">TV, Audio &amp; Surveillance
								<i class="icons icon-right-dir"></i>
							</a>
						</li>
						<li>
							<a href="#">Video Games &amp; Consoles
								<i class="icons icon-right-dir"></i>
							</a>
						</li>
						<li>
							<a href="#">Car Audio, Video &amp; GPS
								<i class="icons icon-right-dir"></i>
							</a>
						</li>
						<li>
							<a href="#">Best Sellers
								<i class="icons icon-right-dir"></i>
							</a>
						</li>
						<li>
							<a href="#">Shop by Brands
								<i class="icons icon-right-dir"></i>
							</a>
						</li>
						<li>
							<a class="purple" href="#">All Categories</a>
						</li>
					</ul>
				</div>

			</div>

		</div>
		<!-- /Categories -->

	</aside>
	<!-- /Sidebar -->

</div>

<!-- /Content -->
@endsection