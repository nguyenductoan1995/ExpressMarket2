@extends('master') @section('content')
<!-- Content -->
<div class="row content">

	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="breadcrumbs">
			<p>
				<a href="{{route('trang-chu')}}">Trang chủ</a>
				<i class="icons icon-right-dir"></i> {{$ten_theoloai[0] -> ten_loai}}</p>
		</div>
	</div>

	<!-- Main Content -->
	<section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">



		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="carousel-heading">
					<h4 style = 'float:left'>
						{{$ten_theoloai[0] -> ten_loai}}
					</h4>
					<div class="pagination" >{{$sp_theoloai->links()}}<div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6">

			</div>

			<div class="col-lg-6 col-md-6 col-sm-6">
				<!-- <div class="pagination">
					<a href="#">
						<div class="previous">
							<i class="icons icon-left-dir"></i>
						</div>
					</a>

					<a href="{{route('loaisanpham',1)}}">
						<div class="page-button">1</div>
					</a>

					<a href="#">
						<div class="next">
							<i class="icons icon-right-dir"></i>
						</div>
					</a>
				</div> -->
			</div>

		</div>

		<div class="row">
			<!-- LAY DANH SACH SAN PHAM THEO LOAI -->
			<!-- Product Item -->
			@foreach($sp_theoloai as $sp)
			<div class="col-lg-4 col-md-4 col-sm-4 product">

				<div class="product-image">
					<a href="{{route('chitietsanpham',$sp->id_sp)}}">
						<img style='width: 220px ; height: 220px' src="source/img/products/{{$sp -> url_hinh}}" alt="Product1">
					</a>
				</div>

				<div class="product-info">
					<h5>
						<a href="{{route('chitietsanpham',$sp->id_sp)}}">{{$sp -> ten_sp}}</a>
					</h5>
					<span class="price">{{number_format($sp -> gia,0)}} VND</span>
					<div class="rating readonly-rating" data-score="4"></div>
				</div>

				@if(Session::has('cart'))
				<div class="product-actions">
					<span class="add-to-cart">
						<span class="action-wrapper" onclick="AddToCart({{$sp->id_sp}},{{Session('cart')->totalQty}})">
							<a>
								<i class="icons icon-basket-2"> Thêm vào giỏ hàng</i>
								<span class="action-name">Add to cart</span>
							</a>
						</span>
					</span>
				</div>
				@else
				<div class="product-actions">
					<span class="add-to-cart" onclick="AddToCart({{$sp->id_sp}},0)">
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
			@endforeach
			<!-- /Product Item -->
			<!-- END LAY DANH SACH SAN PHAM THEO LOAI -->
			<div class="col-lg-6 col-md-6 col-sm-6">

			</div>

			<div class="col-lg-6 col-md-6 col-sm-6">
				<!-- <div class="pagination">

					<a href="">
						<div class="previous">
							<i class="icons icon-left-dir"></i>
						</div>
					</a>
					<a href="#">
						<div class="page-button">1</div>
					</a>
					<a href="#">
						<div class="page-button">2</div>
					</a>
					<a href="#">
						<div class="page-button">3</div>
					</a>
					<a href="#">
						<div class="next">
							<i class="icons icon-right-dir"></i>
						</div>
					</a>
				</div> -->
				<div class="pagination" >{{$sp_theoloai->links()}}<div>
			</div>
			<div>
			</div>
		</div>
	</section>
	<!-- /Main Content -->



	<!-- Sidebar -->
	<aside class="sidebar col-lg-3 col-md-3 col-sm-3  col-lg-pull-9 col-md-pull-9 col-sm-pull-9">

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


		<!-- Compare Products -->
		<div class="row sidebar-box blue">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="sidebar-box-heading">
					<i class="icons icon-docs"></i>
					<h4>Compare Products</h4>
				</div>
				<div class="sidebar-box-content">
					<table class="compare-table">

						<tr>
							<td class="product-thumbnail">
								<img src="source/img/products/sample1.jpg" alt="Product1">
							</td>
							<td class="product-info">
								<p>
									<a href="#">Lorem ipsum dolor sit amet</a>
								</p>
								<a href="#" class="remove">Remove</a>
							</td>
						</tr>

					</table>
					<div class="padding-box">
						<a class="button grey">Go to compare</a>
					</div>
				</div>
			</div>

		</div>
		<!-- /Compare Products -->


		<!-- Bestsellers -->
		<div class="row sidebar-box red">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="sidebar-box-heading">
					<i class="icons icon-award-2"></i>
					<h4>Bestsellers</h4>
				</div>

				<div class="sidebar-box-content">
					<table class="bestsellers-table">

						<tr>
							<td class="product-thumbnail">
								<a href="#">
									<img src="source/img/products/sample1.jpg" alt="Product1">
								</a>
							</td>
							<td class="product-info">
								<p>
									<a href="#">Lorem ipsum dolor sit amet</a>
								</p>
								<span class="price">$550.00</span>
							</td>
						</tr>

						<tr>
							<td class="product-thumbnail">
								<a href="#">
									<img src="source/img/products/sample2.jpg" alt="Product1">
								</a>
							</td>
							<td class="product-info">
								<p>
									<a href="#">Lorem ipsum dolor sit amet</a>
								</p>
								<span class="price">$550.00</span>
							</td>
						</tr>

						<tr>
							<td class="product-thumbnail">
								<a href="#">
									<img src="source/img/products/sample3.jpg" alt="Product1">
								</a>
							</td>
							<td class="product-info">
								<p>
									<a href="#">Lorem ipsum dolor sit amet</a>
								</p>
								<div class="rating readonly-rating" data-score="4"></div>
								<span class="price">
									<del>$650.00</del> $550.00</span>
							</td>
						</tr>

					</table>
				</div>

			</div>

		</div>
		<!-- /Bestsellers -->


		<!-- Tag Cloud -->
		<div class="row sidebar-box green">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="sidebar-box-heading">
					<i class="icons icon-tag-6"></i>
					<h4>Tags Cloud</h4>
				</div>

				<div class="sidebar-box-content sidebar-padding-box">
					<a href="#" class="tag-item">digital camera</a>
					<a href="#" class="tag-item">lorem</a>
					<a href="#" class="tag-item">gps</a>
					<a href="#" class="tag-item">headphones</a>
					<a href="#" class="tag-item">ipsum</a>
					<a href="#" class="tag-item">laptop</a>
					<a href="#" class="tag-item">smartphone</a>
					<a href="#" class="tag-item">tv</a>
				</div>

			</div>

		</div>
		<!-- /Tag Cloud -->


		<!-- Specials -->
		<div class="row products-row sidebar-box orange">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<!-- Carousel Heading -->
				<div class="carousel-heading no-margin">

					<h4>
						<i class="icons icon-magic"></i> Specials</h4>
					<div class="carousel-arrows">
						<i class="icons icon-left-dir"></i>
						<i class="icons icon-right-dir"></i>
					</div>

				</div>
				<!-- /Carousel Heading -->

			</div>

			<!-- Carousel -->
			<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">

				<div class="owl-carousel" data-max-items="1">

					<!-- Slide -->
					<div>
						<!-- Carousel Item -->
						<div class="product">

							<div class="product-image">
								<img src="source/img/products/sample1.jpg" alt="Product1">
								<a href="products_page_v1.html" class="product-hover">
									<i class="icons icon-eye-1"></i> Quick View
								</a>
							</div>

							<div class="product-info">
								<h5>
									<a href="products_page_v1.html">Lorem ipsum dolor sit amet</a>
								</h5>
								<span class="price">$281.00</span>
								<div class="rating readonly-rating" data-score="4"></div>
							</div>

							<div class="product-actions">
								<span class="add-to-cart">
									<span class="action-wrapper">
										<i class="icons icon-basket-2"></i>
										<span class="action-name">Add to cart</span>
									</span>
								</span>
								<span class="add-to-favorites">
									<span class="action-wrapper">
										<i class="icons icon-heart-empty"></i>
										<span class="action-name">Add to wishlist</span>
									</span>
								</span>
								<span class="add-to-compare">
									<span class="action-wrapper">
										<i class="icons icon-docs"></i>
										<span class="action-name">Add to Compare</span>
									</span>
								</span>
							</div>

						</div>
						<!-- /Carousel Item -->
					</div>
					<!-- /Slide -->


					<!-- Slide -->
					<div>
						<!-- Carousel Item -->
						<div class="product">

							<div class="product-image">
								<img src="source/img/products/sample2.jpg" alt="Product1">
								<a href="products_page_v1.html" class="product-hover">
									<i class="icons icon-eye-1"></i> Quick View
								</a>
							</div>

							<div class="product-info">
								<h5>
									<a href="products_page_v1.html">Lorem ipsum dolor sit amet</a>
								</h5>
								<span class="price">$281.00</span>
								<div class="rating readonly-rating" data-score="4"></div>
							</div>

							<div class="product-actions">
								<span class="add-to-cart">
									<span class="action-wrapper">
										<i class="icons icon-basket-2"></i>
										<span class="action-name">Add to cart</span>
									</span>
								</span>
								<span class="add-to-favorites">
									<span class="action-wrapper">
										<i class="icons icon-heart-empty"></i>
										<span class="action-name">Add to wishlist</span>
									</span>
								</span>
								<span class="add-to-compare">
									<span class="action-wrapper">
										<i class="icons icon-docs"></i>
										<span class="action-name">Add to Compare</span>
									</span>
								</span>
							</div>

						</div>
						<!-- /Carousel Item -->
					</div>
					<!-- /Slide -->

				</div>

			</div>
			<!-- / Carousel -->


		</div>
		<!-- /Specials -->


	</aside>
	<!-- /Sidebar -->

</div>
<!-- /Content -->

@endsection