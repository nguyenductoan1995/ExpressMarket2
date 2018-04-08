@extends('master') @section('content')
<div class="row content">

	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="breadcrumbs">
			<p>
				<a href="#">Home</a>
				<i class="icons icon-right-dir"></i> Orders List</p>
		</div>
	</div>

	<!-- Main Content -->
	<section class="main-content col-lg-9 col-md-9 col-sm-9">

		<div class="row">

			<!-- Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					<h4>Orders List</h4>
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

				<table class="order-table">

					<tr>
						<th>Order Number</th>
						<th>Order Date</th>
						<th class="order-status">Order Status</th>
						<th>Total</th>
					</tr>

					<tr>
						<td class="order-number">
							<p>
								<a href="#">0123264</a>
							</p>
						</td>
						<td>
							<p>2013-07-21</p>
						</td>
						<td>
							<p>Confirmed by shopper</p>
						</td>
						<td>
							<span class="price">$280.00</span>
						</td>
					</tr>

					<tr>
						<td class="order-number">
							<p>
								<a href="#">0123264</a>
							</p>
						</td>
						<td>
							<p>2013-07-21</p>
						</td>
						<td>
							<p>Confirmed by shopper</p>
						</td>
						<td>
							<span class="price">$280.00</span>
						</td>
					</tr>

					<tr>
						<td class="order-number">
							<p>
								<a href="#">0123264</a>
							</p>
						</td>
						<td>
							<p>2013-07-21</p>
						</td>
						<td>
							<p>Confirmed by shopper</p>
						</td>
						<td>
							<span class="price">$280.00</span>
						</td>
					</tr>

					<tr>
						<td class="order-number">
							<p>
								<a href="#">0123264</a>
							</p>
						</td>
						<td>
							<p>2013-07-21</p>
						</td>
						<td>
							<p>Confirmed by shopper</p>
						</td>
						<td>
							<span class="price">$280.00</span>
						</td>
					</tr>

					<tr>
						<td class="order-number">
							<p>
								<a href="#">0123264</a>
							</p>
						</td>
						<td>
							<p>2013-07-21</p>
						</td>
						<td>
							<p>Confirmed by shopper</p>
						</td>
						<td>
							<span class="price">$280.00</span>
						</td>
					</tr>

					<tr>
						<td class="order-number">
							<p>
								<a href="#">0123264</a>
							</p>
						</td>
						<td>
							<p>2013-07-21</p>
						</td>
						<td>
							<p>Confirmed by shopper</p>
						</td>
						<td>
							<span class="price">$280.00</span>
						</td>
					</tr>

					<tr>
						<td class="order-number">
							<p>
								<a href="#">0123264</a>
							</p>
						</td>
						<td>
							<p>2013-07-21</p>
						</td>
						<td>
							<p>Confirmed by shopper</p>
						</td>
						<td>
							<span class="price">$280.00</span>
						</td>
					</tr>

				</table>

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