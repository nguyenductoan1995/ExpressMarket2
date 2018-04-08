 <?php $__env->startSection('content'); ?>
<div class="row content">
	<!-- Main Content -->
	<section class="main-content col-lg-12 col-md-12 col-sm-12">

		<!-- Slider -->
		<div class="iosSlider">
			<div class="slider">

				<div class="item" id="item1">

					<div class="image">
						<div class>

						</div>

					</div>

					<div class="text">

						<div class="bg"></div>

						<div class="title">
							<h2>
								<strong style = 'color: white'>HomeShop</strong>
							</h2>
						</div>

						<div class="desc">
						<br/>
							<h3 style = 'color: white'>Nghệ thuật thay đổi thế giới</h3>
						</div>
					</div>

				</div>

				<div class="item" id="item2">

					<div class="image">
						<div class="bg"></div>
					</div>

					<div class="text">

						<div class="bg"></div>

						<div class="title">
							<h2>
								<strong>The New Studio
									<br>Original Headphones</strong>
							</h2>
						</div>

						<div class="desc">
							<h3>Lorem ipsum dolor</h3>
							<span>From
								<span class="price">$399.00</span>
							</span>
						</div>

						<div class="button">
							<a class="button big red" href="#">Buy Now</a>
						</div>

					</div>

				</div>

				<div class="item" id="item3">

					<div class="image">
						<div class="bg"></div>
					</div>

					<div class="text">

						<div class="bg"></div>

						<div class="title">
							<h2>The New
								<strong>Laptop</strong>
							</h2>
						</div>

						<div class="desc">
							<h3>All the power in your hands!</h3>
							<span>From
								<span class="price">$960.00</span>
							</span>
						</div>

						<div class="button">
							<a class="button big red" href="#">Buy Now</a>
						</div>

					</div>

				</div>

			</div>

			<div class='prevButton'></div>

			<div class='nextButton'></div>

		</div>
		<!-- /Slider -->



		<!-- Banner -->
		<section class="banner">

			<div class="left-side-banner banner-item icon-on-right gray">
				<h4>0962525354</h4>
				<p>Thứ 2- Thứ 7: 8am - 5pm</p>
				<i class="icons icon-phone-outline"></i>
			</div>

			<a href="#">
				<div class="middle-banner banner-item icon-on-left light-blue">
					<h4>Miễn phí giao hàng </h4>
					<p>cho hoá đơn trên 1.000.000 vnđ</p>
					<i class="icons icon-truck-1"></i>
				</div>
			</a>

			<a href="#">
				<div class="right-side-banner banner-item orange">
					<h4>Fast Sale</h4>
					<p>on selected items</p>
				</div>
			</a>

		</section>
		<!-- /Banner -->



		<!-- Featured Products -->
		<div class="products-row row">

			<!-- Carousel Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					<h4>Sản phẩm công nghệ mới</h4>
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
					<!-- START SHOW PRODUCT COMPUTER -->
					<!-- Slide -->
					<?php $__currentLoopData = $case1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div>
						<!-- Carousel Item -->
						<div class="product">

							<div class="product-image">
								<span class="product-tag">Sale</span>
								<a href="<?php echo e(route('chitietsanpham',$new1->id_sp)); ?>">
									<img src="source/img/products/<?php echo e($new1 -> url_hinh); ?>" alt="Product1">
								</a>
							</div>

							<div class="product-info">
								<h5>
									<a href="<?php echo e(route('chitietsanpham',$new1->id_sp)); ?>"><?php echo e($new1 -> ten_sp); ?></a>
								</h5>
								<span class="price"><?php echo e(number_format($new1->gia,0)); ?> vnđ</span>
								<div class="rating readonly-rating" data-score="4"></div>
							</div>

							<div class="product-actions">
								<span class="add-to-cart">
									<span class="action-wrapper">
										<a href="<?php echo e(route('themgiohang',$new1 -> id_sp)); ?>">
											<i class="icons icon-basket-2"> Thêm vào giỏ hàng</i>
											<span class="action-name">Add to cart</span>
										</a>
									</span>
								</span>
							</div>

						</div>
						<!-- /Carousel Item -->
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<!-- /Slide -->
					<!-- END SHOW PRODUCT COMPUTER -->


				</div>
			</div>
			<!-- /Carousel -->

		</div>
		<!-- /Featured Products -->




		<!-- New Collection -->
		<div class="products-row row">

			<!-- Carousel Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					<h4>Tự sửa lại nha</h4>
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
					<?php $__currentLoopData = $case2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!-- Slide -->
					<div>
						<!-- Carousel Item -->
						<div class="product">

							<div class="product-image">
								<a href="<?php echo e(route('chitietsanpham',$new2->id_sp)); ?>">
									<span class="product-tag">Sale</span>
									<img src="source/img/products/<?php echo e($new2->url_hinh); ?>" alt="Product1">
								</a>
							</div>

							<div class="product-info">
								<h5>
									<a href="<?php echo e(route('chitietsanpham',$new2->id_sp)); ?>"><?php echo e($new2->ten_sp); ?></a>
								</h5>
								<span class="price"><?php echo e(number_format($new2->gia,0)); ?> vnđ</span>
								<div class="rating readonly-rating" data-score="4"></div>
							</div>

							<div class="product-actions">
								<span class="add-to-cart">
									<a href="<?php echo e(route('themgiohang',$new2 -> id_sp)); ?>">
										<span class="action-wrapper">
											<i class="icons icon-basket-2"></i>
											<span class="action-name">Add to cart</span>
										</span>
									</a>
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
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				</div>
			</div>
			<!-- /Carousel -->

		</div>
		<!-- /New Collection -->



		<!-- ĐỒ CHƠI TRẺ EM -->
		<div class="products-row row">

			<!-- Carousel Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					<h4>Tự sửa lại nha </h4>
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
					<?php $__currentLoopData = $case3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!-- Slide -->
					<div>
						<!-- Carousel Item -->
						<div class="product">

							<div class="product-image">
								<a href="<?php echo e(route('chitietsanpham',$new3->id_sp)); ?>">
									<img src="source/img/products/<?php echo e($new3->url_hinh); ?>" alt="Product1">
								</a>
							</div>

							<div class="product-info">
								<h5>
									<a href="<?php echo e(route('chitietsanpham',$new3->id_sp)); ?>"><?php echo e($new3->ten_sp); ?></a>
								</h5>
								<span class="price"><?php echo e(number_format($new3->gia,0)); ?> vnđ</span>
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
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				</div>
			</div>
			<!-- /Carousel -->

		</div>
		<!-- /ĐỒ CHƠI TRẺ EM -->




		<!-- Product Brands -->
		<div class="products-row row">

			<!-- Carousel Heading -->
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="carousel-heading">
					<h4>Nhãn hiệu</h4>
					<div class="carousel-arrows">
						<i class="icons icon-left-dir"></i>
						<i class="icons icon-right-dir"></i>
					</div>
				</div>

			</div>
			<!-- /Carousel Heading -->

			<!-- Carousel -->
			<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">

				<div class="owl-carousel" data-max-items="6">

					<!-- Slide -->
					<div>
						<div class="product">
							<a href="">
								<img src="source/img/logo.png" alt="Brand1">
							</a>
						</div>
					</div>
					<!-- /Slide -->


				</div>

			</div>
			<!-- /Carousel -->

		</div>
		<!-- /Product Brands -->


	</section>
	<!-- /Main Content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>