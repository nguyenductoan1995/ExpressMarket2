@extends('master') @section('content')
<div class="row content">

	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="breadcrumbs">
			<p>
				<a href="{{route('trang-chu')}}">Trang chủ</a>
				<i class="icon-right-dir">
					<a href ="{{route('tinhtrangdonhang')}}">Trình trạng đơn hàng</a>
				</i>
				<i class="icons icon-right-dir"></i>Chi tiết đơn hàng</p>
		</div>
	</div>

	<!-- Main Content -->
	<section class="main-content col-lg-9 col-md-9 col-sm-9">

		<div class="row">

			<!-- Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					<h4>Chi Tiết đơn hàng</h4>
					<div class="carousel-arrows">
						<i class="icons icon-reply"></i>
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
						<th>Tên Sản Phẩm</th>
						<th>Số Lượng</th>
						<th>Thành Tiền</th>
					</tr>

					<tr>
						@foreach($ct as $ct)
						<td class="order-number">
							<p>{{$ct->id_ctdh}}</p>
						</td>
						<td>
							<p>{{$ct->ten_sp}}</p>
						</td>
						<td>
							<p>{{$ct->so_luong}}</p>
						</td>
						<td>
							<span class="price">{{number_format($ct->thanh_tien)}}</span>
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