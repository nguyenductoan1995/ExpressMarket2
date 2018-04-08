@extends('master') @section('content')
<div class="row content">
	<!-- Main Content -->
	<section class="main-content col-lg-12 col-md-12 col-sm-12">

		<!-- tim kiem theo ten & loai -->
		<div class="products-row row">

			<!-- Carousel Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					@foreach($sp_theoloai as $loai)
					<h4>{{$loai->ten_loai}}</h4>
					@endforeach
					<div class="carousel-arrows">
						<i class="icons icon-left-dir"></i>
						<i class="icons icon-right-dir"></i>
					</div>
				</div>

			</div>
			<!-- /Carousel Heading -->

			<!-- Carousel -->
			<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">

				<div class="owl-carousel" data-max-items="4">
					@foreach($SanPhamTim as $spt)
					<!-- Slide -->
					<div>
						<!-- Carousel Item -->

						<div class="product">

							<div class="product-image">
								<a href="{{route('chitietsanpham',$spt->id_sp)}}">
									<img style='width: 220px ; height: 220px' src="source/img/products/{{$spt->url_hinh}}" alt="Product1">
								</a>
							</div>

							<div class="product-info">
								<h5>
									<a href="{{route('chitietsanpham',$spt->id_sp)}}">{{$spt->ten_sp}}</a>
								</h5>
								<span class="price">{{number_format($spt->gia,0)}} vnđ</span>
								<div class="rating readonly-rating" data-score="4"></div>
							</div>

							@if(Session::has('cart'))
							<div class="product-actions">
								<span class="add-to-cart">
									<span class="action-wrapper" onclick="AddToCart({{$spt->id_sp}},{{Session('cart')->totalQty}})">
										<a>
											<i class="icons icon-basket-2"> Thêm vào giỏ hàng</i>
											<span class="action-name">Add to cart</span>
										</a>
									</span>
								</span>
							</div>
							@else
							<div class="product-actions">
								<span class="add-to-cart" onclick="AddToCart({{$spt->id_sp}},0)">
									<span class="action-wrapper">
										<a>
											<i class="icons icon-basket-2"> Thêm vào giỏ hàng</i>
											<span class="action-name">Add to cart</span>
										</a>
									</span>
								</span>
							</div>
							@endif

						</div>

						<!-- /Carousel Item -->
					</div>
					<!-- /Slide -->
					@endforeach
				</div>
			</div>
			<!-- /Carousel -->

		</div>
		<!-- /tim kiem theo ten & loai -->
		<!--Tim kiem theo only ten-->
		<div class="products-row row">

			<!-- Carousel Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">

					<h4>Toàn bộ</h4>

					<div class="carousel-arrows">
						<i class="icons icon-left-dir"></i>
						<i class="icons icon-right-dir"></i>
					</div>
				</div>

			</div>
			<!-- /Carousel Heading -->

			<!-- Carousel -->
			<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">

				<div class="owl-carousel" data-max-items="4">
					@foreach($SanPhamTim2 as $spt2)
					<!-- Slide -->
					<div>
						<!-- Carousel Item -->

						<div class="product">

							<div class="product-image">
								<a href="{{route('chitietsanpham',$spt2->id_sp)}}">
									<img style='width: 220px ; height: 220px' src="source/img/products/{{$spt2->url_hinh}}" alt="Product1">
								</a>
							</div>

							<div class="product-info">
								<h5>
									<a href="{{route('chitietsanpham',$spt2->id_sp)}}">{{$spt2->ten_sp}}</a>
								</h5>
								<span class="price">{{number_format($spt2->gia,0)}} vnđ</span>
								<div class="rating readonly-rating" data-score="4"></div>
							</div>

							@if(Session::has('cart'))
							<div class="product-actions">
								<span class="add-to-cart">
									<span class="action-wrapper" onclick="AddToCart({{$spt2->id_sp}},{{Session('cart')->totalQty}})">
										<a>
											<i class="icons icon-basket-2"> Thêm vào giỏ hàng</i>
											<span class="action-name">Add to cart</span>
										</a>
									</span>
								</span>
							</div>
							@else
							<div class="product-actions">
								<span class="add-to-cart" onclick="AddToCart({{$spt2->id_sp}},0)">
									<span class="action-wrapper">
										<a>
											<i class="icons icon-basket-2"> Thêm vào giỏ hàng</i>
											<span class="action-name">Add to cart</span>
										</a>
									</span>
								</span>
							</div>
							@endif

						</div>

						<!-- /Carousel Item -->
					</div>
					<!-- /Slide -->
					@endforeach
				</div>
			</div>
			<!-- /Carousel -->

		</div>
		<!-- Tim Kiem theo only ten -->
	</section>
	<!-- /Main Content -->
</div>
@endsection