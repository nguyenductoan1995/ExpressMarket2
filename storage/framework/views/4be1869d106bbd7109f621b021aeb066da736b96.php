			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<!-- Top Header
					<div id="top-header" class="style2">
						
						<div class="row">
							
							<nav id="top-navigation" class="col-lg-12 col-md-12 col-sm-12">
								<ul class="pull-right">
									<li><a href="create_an_account.html">XXXX</a></li>
									<li><a href="orders_list.html">List Order</a></li>
									<li><a href="order_info.html">Checkout</a></li>
									<li><a href="text_page.html">About Us</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							
						</div>
						
					</div>
					 -->
					
					
					<!-- Main Header -->
					<div id="main-header" class="style2">
						
						<div class="row">
							<!-- Region ajax -->
								<input type="hidden" id="temp" value="-1"/>
							<!-- End region ajax -->

							<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
								<a href="<?php echo e(route('trang-chu')); ?>"><img src="source/img/logo.png" alt="Logo"></a>
							</div>
							
							<nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
								<ul class="pull-right">
									<?php if(Session::has('cart')): ?>
									<li class="orange"><a><i class="icons icon-basket-2"></i>
										<div id="quantityCart"><?php echo e(Session('cart')->totalQty); ?></div>
									</a>
                                    	<ul id="cart-dropdown" class="box-dropdown parent-arrow">
											<li>
                                            	<div class="box-wrapper parent-border">
                                                    <p>Thông tin giỏ hàng của bạn</p>
                                                    
                                                    <table class="cart-table">
														
														<?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    	<tr>
                                                    		<td><img src="source/img/products/<?php echo e($p['item']['url_hinh']); ?>" alt="product"></td>
                                                            <td>
                                                                <h6><?php echo e($p['item']['ten_sp']); ?></h6>
                                                                <p><?php echo e($p['item']['ten_sp']); ?></p>
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light"><?php echo e($p['qty']); ?> x</span> <?php echo e($p['item']['gia']); ?></span>
                                                                <a href="<?php echo e(route('xoagiohang',$p['item']['id_sp'])); ?>" class="parent-color">Xóa</a>
                                                            </td>
                                                        </tr>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </table>
                                                    
                                                    <br class="clearfix">
                                                </div>
                                                
												<div class="footer">
													<table class="checkout-table pull-right">
                                                        <tr>
                                                        	<td class="align-right"><strong>Tổng tiền:</strong></td>
                                                            <td><strong class="parent-color"><?php echo e(Session('cart')->totalPrice); ?></strong></td>
                                                        </tr>
                                                    </table>
												</div>
                                                
                                                <div class="box-wrapper no-border">
                                                	<a class="button pull-right parent-background" href="#">Mua hàng</a>
													<a class="button pull-right" href="<?php echo e(route('cart')); ?>">Xem giỏ hàng</a>
                                                </div>
											</li>
										</ul>
                                    </li>
									<?php else: ?>
									<li class="orange"><a><i class="icons icon-basket-2"></i>
										<div id="quantityCart">0</div>
									</a>
                                    </li>
									<?php endif; ?>
									<?php if( Auth::check() ): ?>
									<li class="login-create purple">
                                    	<!-- <i class="icons "> <img class="nav-user-photo" src="source/img/users/<?php echo e(Auth::user()->image); ?>" alt="ảnh đại diện" weight="30px" height="30px" /></i> -->
										
										<p>Xin chào!
										<i class="ace-icon fa fa-user"><img class="nav-user-photo" weight="30px" height="30px" src="source/img/users/<?php echo e(Auth::user()->image); ?>" alt="ảnh đại diện" /> </i> <?php echo e(Auth::user()->full_name); ?><br></a><?php if(Auth::user()-> role==1): ?><b><a href="admin/trangchu">Admin</a></b>||<?php endif; ?><a href="<?php echo e(route('logout')); ?>">Đăng xuất</a></p>
										<?php else: ?>
										<p>Xin chào! <a href="<?php echo e(route('login')); ?>">Đăng nhập</a> hoặc<br><a href="<?php echo e(route('createaccount')); ?>">Đăng ký</a> để chúng tôi được phụ vụ bạn tốt hơn</p>
										<?php endif; ?>
										<!-- <ul id="login-dropdown" class="box-dropdown">
											<li>
											<form action="<?php echo e(route('login')); ?>" method="post" >
                                            	<div class="box-wrapper">
                                                    <h4>LOGIN</h4>
                                                    <div class="iconic-input">
                                                        <input type="text" placeholder="Email" name="email">
                                                        <i class="icons icon-user-3"></i>
                                                    </div>
                                                    <div class="iconic-input">
                                                        <input type="password" placeholder="Password" name="password">
                                                        <i class="icons icon-lock"></i>
                                                    </div>
                                                    <input type="checkbox" id="loginremember"> <label for="loginremember">Remember me</label>
                                                    <br>
                                                    <br>
                                                    <div class="pull-left">
                                                        <input type="submit" class="orange" value="Login">
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">Forgot your password?</a>
                                                        <br>
                                                        <a href="#">Forgot your username?</a>
														<br>
                                                    </div>
                                                    <br class="clearfix">
                                                </div>
											</form>
												<div class="footer">
													<h4 class="pull-left">NEW CUSTOMER?</h4>
													<a class="button pull-right" href="<?php echo e(route('createaccount')); ?>">Create an account</a>
												</div>
											</li>
										</ul> -->
                                    </li>
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Main Header -->
					
					
					<!-- Main Navigation -->
					<nav id="main-navigation" class="style2">
						<ul>
							
							<li class="home-green current-item">
								<a href="<?php echo e(route('trang-chu')); ?>">
									<span class="nav-caption">Trang chủ</span>
									<span class="nav-description">Sản phẩm mới nhất</span>
								</a>
								<!--
								<ul class="normal-dropdown normalAnimation">
									<li><a href="#">Layouts <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Layout 1</a></li>
											<li><a href="home_v2.html">Layout 2</a></li>
											<li><a href="home_v3.html">Layout 3</a></li>
										</ul>
									</li>
									<li><a href="#">Headers <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Header 1</a></li>
											<li><a href="home_v2.html">Header 2</a></li>
											<li><a href="home_v3.html">Header 3</a></li>
											<li><a href="category_v1.html">Header 4</a></li>
											<li><a href="category_v2.html">Header 5</a></li>
											<li><a href="products_page_v1.html">Header 6</a></li>
										</ul>
									</li>
									<li><a href="#">Footers <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html#footer">Footer 1</a></li>
											<li><a href="home_v2.html#footer">Footer 2</a></li>
											<li><a href="home_v3.html#footer">Footer 3</a></li>
											<li><a href="category_v1.html#footer">Footer 4</a></li>
											<li><a href="category_v2.htm#footer">Footer 5</a></li>
											<li><a href="products_page_v1.html#footer">Footer 6</a></li>
										</ul>
									</li>
									<li><a href="#">Sliders <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Revolution Slider</a></li>
											<li><a href="home_v2.html">IOS Slider</a></li>
											<li><a href="home_v3.html">Flex Slider</a></li>
										</ul>
									</li>
								</ul>
								-->
							</li>
							
							<li class="red">
								<a href="<?php echo e(route('loaisanpham',1)); ?>">
									<span class="nav-caption">Điện thoại</span>
									<span class="nav-description">Điện thoại & Tablet</span>
								</a>
								<!--
								<ul class="wide-dropdown normalAniamtion">
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Digital SLR</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Point &amp; Shoot</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Spy, Miniature</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Background Material</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Continuous Lighting</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Flash Lighting</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Light Meters</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Batteries</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Cables &amp; Adapters</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Camcorder Tapes &amp; Discs</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Cases, Bags &amp; Covers</a></li>
										</ul>
									</li>
								</ul>
								-->
							</li>
							
							<li class="blue">
								<a href="<?php echo e(route('loaisanpham',2)); ?>">
									<span class="nav-caption">Tivi - Video</span>
									<span class="nav-description">Tivi - Đầu đĩa karaoke</span>
								</a>
							</li>
							
							<li class="orange">
								<a href="<?php echo e(route('loaisanpham',3)); ?>">
									<span class="nav-caption">Phụ kiện</span>
									<span class="nav-description">Phụ kiện công nghệ</span>
								</a>
							</li>
							
							<li class="green">
								<a href="<?php echo e(route('blog')); ?>">
									<span class="nav-caption">Giới Thiệu</span>
									<span class="nav-description">Express market</span>
								</a>
							</li>
							
							<li class="purple">
								<a href="<?php echo e(route('lienhe')); ?>">
									<span class="nav-caption">Liên hệ</span>
									<span class="nav-description">19001060</span>
								</a>
							</li>
							
							<li class="nav-search">
                                	<i class="icons icon-search-1"></i>
							</li>
							
						</ul>
					
							<div id="search-bar">
								<div class="col-lg-12 col-md-12 col-sm-12">
                            		<table id="search-bar-table">
									<form action="<?php echo e(route('searchProduct')); ?>" method="get" role ="search" >
                                    	<tr>
                                    		<td class="search-column-1">
                                         	   <input type="text" name ="key" placeholder="Nhập vào từ khoá"  >
                                     	   </td>
											
                                     	   <td class="search-column-2">
                                       		 	<select class="chosen-select-search" name = 'chosetype'>
													<?php $__currentLoopData = $search_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												  	  <option  value ="<?php echo e($search_type->id_loai); ?>" ><?php echo e($search_type->ten_loai); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
												</select>
                               	 			</td>
											
                                    	</tr>
                                	</table>
								</div>
								
								<div id="search-button" type ="submit" >
									<input type="submit"  value = ""/>	
									<!-- <div class="icons icon-search-1" type ='submit' / > -->
								</div>
								</form>
							</div>
							 <!-- <form action="<?php echo e(route('searchProduct')); ?>" method="get" role ="search" > 
							 	<input type ='text' name = 'keys' >
								 <select name = 'chosetype'>
										<option  value =1 > Dien Thoai</option>
										<option  value =2 > May tinh</option>
										<option  value =3 > Dien Tu</option>
								</select>
								<button type='submit'>Search</button>
							</form> -->
					

					</nav>
					<!-- /Main Navigation -->
					
				</div>
				
			</header>
			<!-- /Header -->