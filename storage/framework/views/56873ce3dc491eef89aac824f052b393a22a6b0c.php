 <?php $__env->startSection('content'); ?>
<div class="row content">

	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="breadcrumbs">
			<p>
				<a href="#">Trang chủ</a>
				<i class="icons icon-right-dir"></i> Giỏ hàng</p>
		</div>
	</div>

	<!-- Main Content -->
	<section class="main-content col-lg-9 col-md-9 col-sm-9">

		<div class="row">

			<!-- Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					<h4>Danh sách sản phẩm có trong giỏ hàng</h4>
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
				<?php if(Session::has('cart')): ?>
				<table class="order-table">

					<tr>
						<th>Tên sản phẩm</th>
						<th>Hình ảnh</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th>Tùy chọn</th>
					</tr>

					<tr>
						<?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<td class="order-number">
							<p>
								<a href="#">
									<p><?php echo e($p['item']['ten_sp']); ?></p>
								</a>
							</p>
						</td>
						<td>
							<img style="width:100px;height:120px" src="source/img/products/<?php echo e($p['item']['url_hinh']); ?>" alt="Flowers in Chania">
						</td>
						<td>
							<p><?php echo e($p['qty']); ?></p>
						</td>
						<td>
							<span class="price"><?php echo e(number_format($p['item']['gia'] * $p['qty'])); ?></span>
						</td>
						<td>
							<a href="<?php echo e(route('xoagiohang',$p['item']['id_sp'])); ?>" class="parent-color">Xóa</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td class="align-right" colspan="5">TỔNG TIỀN</td>
						<td>
							<strong><?php echo e(number_format($totalPrice)); ?> VND</strong>
						</td>
					</tr>
				</table>

				<?php else: ?>
				<table class="order-table">
					<tr>
						<th>Tên sản phẩm</th>
						<th>Hình ảnh</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th>Tùy chọn</th>
					</tr>
				</table>
				<?php endif; ?>
			</div>
			<!-- // -- Thông tin giao hàng -- // -->
			<?php if(Session::has('cart')): ?>
			<div class="row">
				<form action="<?php echo e(route('dathangmaster')); ?>" method="post">
					<input type='hidden' name='_token' value="<?php echo e(csrf_token()); ?>">
					<div class="col-lg-12 col-md-12 col-sm-12 register-account">
						<br/>
						<div class="carousel-heading no-margin">
							<h4>Thông tin giao hàng</h4>
						</div>
						<div class="page-content">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4">
									<p>Email*</p>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8">
									<input name='email' type="text" required value ="<?php echo e(Auth::user()->email); ?>" required >
								</div>

							</div>

							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-4">
									<p>Full name*</p>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8">
									<input type="text" name='fullname' required value ="<?php echo e(Auth::user()->full_name); ?>">
								</div>

							</div>
							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-4">
									<p>Address </p>
								</div>
								<?php if(strlen(Auth::user()->address) > 2): ?>
								<div class="col-lg-8 col-md-8 col-sm-8">
									<input type="text" name='address' value ="<?php echo e(Auth::user()->address); ?>" required>
								</div>
								<?php else: ?>
								<div class="col-lg-8 col-md-8 col-sm-8">
									<input type="text" name='address' required>
								</div>
								<?php endif; ?>

							</div>
							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-4">
									<p>Phone</p>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8">
									<input type="text" name='phone' value="<?php echo e(Auth::user()->phone); ?>" required>
								</div>

							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="box-wrapper no-border" type ='submit'>
										<button class="button pull-right parent-background">Mua hàng</button>
									</div>
								</div>

							</div>
						</div>

					</div>
				</form>
			</div>

			<!-- //----------------------------// -->
		</div>

<?php endif; ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>