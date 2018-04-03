@extends('master')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=366216237081722&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            <!-- Content -->
			<div class="row content">
            
				@foreach($SanPham as $sp)
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="{{route('trang-chu')}}">Home</a> <i class="icons icon-right-dir"></i> <a href="{{route('loaisanpham',$sp->id_loai)}}">{{$typeProduct[0]->ten_loai}}</a> <i class="icons icon-right-dir"></i>{{$sp->ten_sp}}</p>
                    </div>
                </div>
                
                
				<!-- Main Content -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
					
					
                    
                    <!-- Product -->
                    <div class="product-single">
                    	
                        <div class="row">
                        	
                            <!-- Product Images Carousel -->
                            <div class="col-lg-4 col-md-4 col-sm-4 product-single-image">
								
								<div id="product-slider">
									<ul class="slides">
										<li>
											<img class="cloud-zoom" src="source/img/products/{{$sp->url_hinh}}" data-large="source/img/products/{{$sp->url_hinh}}"  alt=""/>
											<a class="fullscreen-button" href="source/img/products/{{$sp->url_hinh}}">
												<div class="product-fullscreen">
													<i class="icons icon-resize-full-1"></i>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div id="product-carousel">
									<ul class="slides">
										<li>
											<a class="fancybox" rel="product-images" href="source/img/products/{{$sp->url_hinh}}"></a>
											<img src="source/img/products/{{$sp->url_hinh}}" data-large="source/img/products/{{$sp->url_hinh}}" alt=""/>
										</li>
										<li>
											<a class="fancybox" rel="product-images" href="source/img/products/{{$sp->url_hinh}}"></a>
											<img src="source/img/products/{{$sp->url_hinh}}" data-large="source/img/products/{{$sp->url_hinh}}" alt=""/>
										</li>
										<li>
											<a class="fancybox" rel="product-images" href="source/img/products/{{$sp->url_hinh}}"></a>
											<img src="source/img/products/{{$sp->url_hinh}}" data-large="source/img/products/{{$sp->url_hinh}}" alt=""/>
										</li>
										<li>
											<a class="fancybox" rel="product-images" href="source/img/products/{{$sp->url_hinh}}"></a>
											<img src="source/img/products/{{$sp->url_hinh}}" data-large="source/img/products/{{$sp->url_hinh}}" alt=""/>
										</li>
										<li>
											<a class="fancybox" rel="product-images" href="source/img/products/{{$sp->url_hinh}}"></a>
											<img src="source/img/products/{{$sp->url_hinh}}" data-large="source/img/products/{{$sp->url_hinh}}" alt=""/>
										</li>
										
									</ul>
									<div class="product-arrows">
										<div class="left-arrow">
											<i class="icons icon-left-dir"></i>
										</div>
										<div class="right-arrow">
											<i class="icons icon-right-dir"></i>
										</div>
									</div>
								</div>
                            </div>
                            <!-- /Product Images Carousel -->
                            
                            <div class="col-lg-8 col-md-8 col-sm-8 product-single-info full-size">
                            	
                                <h2>{{$sp->ten_sp}}</h2>
                                <table>
                                	<tr>
                                    	<td>Nhà sản xuất</td>
                                        <td><a href="#">Không có</a></td>
                                    </tr>
                                    <tr>
                                    	<td>Kho</td>
										@if($sp->so_luong_ton>0)
											<td><span class="green">còn hàng</span> {{$sp->so_luong_ton}} items</td>
										
                                      @else
										<td><span class="green">hết hàng</span> </td>
									   
									@endif
                                    </tr>
                                    
                                </table>
                                
                                <strong>Thông số </strong>
                                <table>
                                	<tr>
                                    	<td>chiều cao sản phẩm</td>
                                        <td>200cm</td>
                                    </tr>
                                    <tr>
                                    	<td>Chiều rộng sản phẩm</td>
                                        <td>100cm</td>
                                    </tr>
                                </table>
                                
                            	<span class="price"><del>{{ number_format($sp->gia + 100000,0)}} vnđ</del>{{ number_format($sp->gia,0)}} vnđ</span>
                                
                                <table class="product-actions-single">
                                	<tr>
                                    	<td>Color:</td>
                                        <td>
                                        	<select class="chosen-select">
                                            	<option>Đỏ</option>
                                                <option>Vàng</option>
                                                <option>Xanh</option>
                                                <option>Đen</option>
                                            </select>
                                        </td>
                                    	<td>Quantity:</td>
                                        <td>
                                        	<div class="numeric-input">
												<input type="text" value="1">
												<span class="arrow-up"><i class="icons icon-up-dir"></i></span>
												<span class="arrow-down"><i class="icons icon-down-dir"></i></span>
											</div>
                                            <a href="{{route('themgiohang',$sp -> id_sp)}}">
                                                <span class="add-to-cart">
                                                    <span class="action-wrapper">
                                                        <i class="icons icon-basket-2"></i>
                                                        <span class="action-name">+ Giỏ hàng</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                </table> 
								
								
                                <div class="product-actions">
									<span class="add-to-favorites">
										<span class="action-wrapper">
											<i class="icons icon-heart-empty"></i>
											<span class="action-name">Add to wishlist</span>
										</span>
									</span>
									<span class="add-to-compare">
										<span class="action-wrapper">
											<i class="icons icon-docs"></i>
											<span class="action-name">Add to compare</span>
										</span>
									</span>
									<span class="green product-action">
										<span class="action-wrapper">
											<i class="icons icon-info"></i>
											<span class="action-name">Ask a question</span>
										</span>
									</span>
								</div>
                    
                                <div class="social-share">
								<div class="fb-like" data-href="https://www.facebook.com/printer3dsv/" data-width="100" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                        
                                        <iframe
        src="https://platform.twitter.com/widgets/tweet_button.html"
        style="width:100px; height:20px;"></iframe>
        
        								<!-- Place this tag where you want the +1 button to render. -->
                                        <div class="g-plusone" data-size="medium"></div>
                                        
                                        <!-- Place this tag after the last +1 button tag. -->
                                        <script type="text/javascript">
                                          (function() {
                                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                            po.src = 'https://apis.google.com/js/platform.js';
                                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                          })();
                                        </script>
                                        
                                        
                                        <a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ftest.ratkosolar.com%2Fhomeshop%2F15-blog_post.html&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="beside"  class="pinterest"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
                                        
                                    </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- /Product -->
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
							<!-- Accordion -->
							<div class="accordion">
								
								<ul>
									<!-- Item -->
									<li>
									
										<div class="accordion-header">
											<h4>Thông tin chi tiết</h4>
											<span class="accordion-button">
												<i class="icons icon-plus-1"></i>
											</span>
											
										</div>
										<div class="accordion-content page-content">
											<p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. </p>
											<p><strong>Specifications:</strong></p>
											<ul>
												<li><i class="icons icon-right-dir"></i> Speaker type: Hi-Definition MicroSpeaker</li>
												<li><i class="icons icon-right-dir"></i> Frequency range: 25Hz-18.5kHz</li>
												<li><i class="icons icon-right-dir"></i> Impedance (1kHz): 26 Ohms</li>
												<li><i class="icons icon-right-dir"></i> Sensitivity (1mW): 114 dB SPL/mW</li>
												<li><i class="icons icon-right-dir"></i> Cable length (with extension): 18.0 in./45.0 cm (54.0 in./137.1 cm)</li>
											</ul>
											<p>Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. <br><br>
	Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. </p>
											<p class="tags home-green"><strong>Tags:</strong> <a href="#" class="tag-item">digital camera</a>
											<a href="#" class="tag-item">lorem</a>
											<a href="#" class="tag-item">gps</a></p>
										</div>
										
									</li>
									<!-- /Item -->
									
									
									<!-- Item -->
									<li>
									
										<div class="accordion-header">
											<h4>Reviews</h4>
											<span class="accordion-button">
												<i class="icons icon-plus-1"></i>
											</span>
										</div>
										
										<div class="accordion-content page-content">
										<div class="fb-comments" data-href="https://www.facebook.com/photo.php?fbid=1435235433272502&amp;set=a.122794481183277.17940.100003581783196&amp;type=3&amp;theater" data-width="600" data-numposts="5"></div>
										</div>
										
									</li>
									<!-- /Item -->
									
									
									
								</ul>
								<!-- /Accordion -->
							</div>
							
                            
                        </div>
                        
                    </div>
					
                    
                    
					<!-- New Collection -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Sản Phẩm Cùng Loại</h4>
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
									
									<!-- Slide -->
								@foreach($SanPhamCL as $cl)
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="source/img/products/{{$cl->url_hinh}}" alt="Product1">
												<a href="{{route('chitietsanpham',$cl->id_sp)}}" class="product-hover">
													<i class="icons icon-eye-1"></i> Xem Nhanh
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="{{route('chitietsanpham',$cl->id_sp)}}">{{$cl->ten_sp}}</a></h5>
												<span class="price">{{ number_format($cl->gia,0)}} vnđ</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<a href="{{route('themgiohang',$sp -> id_sp)}}">
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
								@endforeach
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /New Collection -->
					



					
					<!-- Recently Viewed Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4> >>> Hot <<< </h4>
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
								@foreach($SanPhamHot as $hot)	
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="source/img/products/{{$hot->url_hinh}}" alt="Product1">
												<a href="{{route('chitietsanpham',$hot->id_sp)}}" class="product-hover">
													<i class="icons icon-eye-1"></i> Xem Nhanh
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="{{route('chitietsanpham',$hot->id_sp)}}">{{$hot->ten_sp}}</a></h5>
												<span class="price">{{ number_format($hot->gia,0)}} vnđ</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<a href="{{route('themgiohang',$sp -> id_sp)}}">
														<span class="action-wrapper">
															<i class="icons icon-basket-2"></i>
															<span class="action-name">Add to cart</span>
														</span >
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
								@endforeach									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Recently Viewed Products -->
					
					
					
					<!-- Product Buttons -->
					<div class="row button-row">
						
						<div class="col-lg-5 col-md-5 col-sm-5">
							<a class="button grey regular" href="#"><i class="icons icon-reply"></i> BACK TO: Computers &amp; Tablets</a>
						</div>
						
						<div class="col-lg-7 col-md-7 col-sm-7 align-right">
							<a class="button grey regular" href="#"><i class="icons icon-left-dir"></i> PREVIOUS PRODUCT</a>
							<a class="button grey regular right-icon" href="#">NEXT PRODUCT <i class="icons icon-right-dir"></i></a>
						</div>
					
					</div>
					<!-- /Product Buttons -->
					
					
				</section>
				<!-- /Main Content -->
				
				
                
                <!-- Banner -->
				<section class="banner">
					
					<div class="left-side-banner banner-item icon-on-right gray">
						<h4>8(802)234-5678</h4>
						<p>Monday - Saturday: 8am - 5pm PST</p>
						<i class="icons icon-phone-outline"></i>
					</div>
					
					<a href="#">
					<div class="middle-banner banner-item icon-on-left light-blue">
						<h4>Free shipping</h4>
						<p>on all orders over $99</p>
						<span class="button">Learn more</span>
						<i class="icons icon-truck-1"></i>
					</div>
					</a>
					
					<a href="#">
					<div class="right-side-banner banner-item orange">
						<h4>Crazy sale!</h4>
						<p>on selected items</p>
						<span class="button">Shop now</span>
					</div>
					</a>
					
				</section>
				<!-- /Banner -->
			
			@endforeach
			</div>
            <!-- /Content -->
@endsection
