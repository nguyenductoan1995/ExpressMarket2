			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
					<div id="top-header" class="style2">
						
						<div class="row">
							
							<nav id="top-navigation" class="col-lg-12 col-md-12 col-sm-12">
								<ul class="pull-right">
									<li><a href="create_an_account.html">My Account</a></li>
									<li><a href="orders_list.html">List Order</a></li>
									<li><a href="order_info.html">Checkout</a></li>
									<li><a href="text_page.html">About Us</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Top Header -->
					
					
					
					<!-- Main Header -->
					<div id="main-header" class="style2">
						
						<div class="row">
							
							<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
								<a href="home_v1.html"><img src="source/img/logo.png" alt="Logo"></a>
							</div>
							
							<nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
								<ul class="pull-right">
									@if(Session::has('cart'))
									<li class="orange"><a href="order_info.html"><i class="icons icon-basket-2"></i>{{Session('cart')->totalQty}}</a>
                                    	<ul id="cart-dropdown" class="box-dropdown parent-arrow">
											<li>
                                            	<div class="box-wrapper parent-border">
                                                    <p>Thông tin giỏ hàng của bạn</p>
                                                    
                                                    <table class="cart-table">
														
														@foreach($product_cart as $p)
                                                    	<tr>
                                                    		<td><img src="source/img/products/{{$p['item']['url_hinh']}}" alt="product"></td>
                                                            <td>
                                                                <h6>{{$p['item']['ten_sp']}}</h6>
                                                                <p>{{$p['item']['ten_sp']}}</p>
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light">{{$p['qty']}} x</span> {{$p['item']['gia']}}</span>
                                                                <a href="{{route('xoagiohang',$p['item']['id_sp'])}}" class="parent-color">Xóa</a>
                                                            </td>
                                                        </tr>
														@endforeach
                                                    </table>
                                                    
                                                    <br class="clearfix">
                                                </div>
                                                
												<div class="footer">
													<table class="checkout-table pull-right">
                                                        <tr>
                                                        	<td class="align-right"><strong>Tổng tiền:</strong></td>
                                                            <td><strong class="parent-color">{{Session('cart')->totalPrice}}</strong></td>
                                                        </tr>
                                                    </table>
												</div>
                                                
                                                <div class="box-wrapper no-border">
                                                	<a class="button pull-right parent-background" href="#">Mua hàng</a>
													<a class="button pull-right" href="order_info.html">Xem giỏ hàng</a>
                                                </div>
											</li>
										</ul>
                                    </li>
									@else
									<li class="orange"><a href="order_info.html"><i class="icons icon-basket-2"></i>0</a>
                                    </li>
									@endif
									<li class="login-create purple">
                                    	<i class="icons icon-user"></i>
                                        <p>Xin chào! <a href="#">Đăng nhập</a> hoặc<br><a href="#">Đăng ký</a> để chúng tôi được phụ vụ bạn tốt hơn</p>
										<ul id="login-dropdown" class="box-dropdown">
											<li>
                                            	<div class="box-wrapper">
                                                    <h4>LOGIN</h4>
                                                    <div class="iconic-input">
                                                        <input type="text" placeholder="Username">
                                                        <i class="icons icon-user-3"></i>
                                                    </div>
                                                    <div class="iconic-input">
                                                        <input type="text" placeholder="Password">
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
												<div class="footer">
													<h4 class="pull-left">NEW CUSTOMER?</h4>
													<a class="button pull-right" href="create_an_account.html">Create an account</a>
												</div>
											</li>
										</ul>
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
								<a href="{{route('trang-chu')}}">
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
								<a href="{{route('loaisanpham',1)}}">
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
								<a href="{{route('loaisanpham',2)}}">
									<span class="nav-caption">Tivi - Video</span>
									<span class="nav-description">Tivi - Đầu đĩa karaoke</span>
								</a>
							</li>
							
							<li class="orange">
								<a href="{{route('loaisanpham',3)}}">
									<span class="nav-caption">Phụ kiện</span>
									<span class="nav-description">Phụ kiện công nghệ</span>
								</a>
							</li>
							
							<li class="green">
								<a href="blog.html">
									<span class="nav-caption">Giới Thiệu</span>
									<span class="nav-description">Express market</span>
								</a>
							</li>
							
							<li class="purple">
								<a href="contact.html">
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
                                    <tr>
                                    	<td class="search-column-1">
                                            <p><span class="grey">Popular Searches:</span> <a href="#">accessories</a>, <a href="#">audio</a>, <a href="#">camera</a>, <a href="#">phone</a>, <a href="#">storage</a>, <a href="#">more</a></p>
                                            <input type="text" placeholder="Enter your keyword">
                                        </td>
                                        <td class="search-column-2">
                                        	<p class="align-right"><a href="#">Advanced Search</a></p>
                                        	<select class="chosen-select-search">
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                            </select>
                                		</td>
                                    </tr>
                                </table>
							</div>
							<div id="search-button">
								<input type="submit" value="">
								<i class="icons icon-search-1"></i>
							</div>
						</div>
						
					</nav>
					<!-- /Main Navigation -->
					
				</div>
				
			</header>
			<!-- /Header -->