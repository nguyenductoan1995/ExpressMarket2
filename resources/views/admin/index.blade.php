@extends('admin.layout.index')
@section('content')
<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Chào mừng  
									<strong class="green">
                                    {{ Auth::user()->full_name}}
										<small>(admin page)</small>
									</strong>
                                    Đến với trang quản trị của website. vui lòng đọc kỹ mọi điều luật trước khi sử dụng mọi chức năng của admin</br>
                                    Xin cảm ơn và chúc bạn 1 ngày làm việc vui vẻ!
								</div>

								<div class="row">
									<div class="space-6"></div>
                                    <h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													Thống kê nhanh
												</h4>
									<div class="col-sm-7 infobox-container">
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">32</span>
												<div class="infobox-content">Bình luận</div>
											</div>

										
										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">11</span>
												<div class="infobox-content">Lượt theo dõi</div>
											</div>

											
										</div>

										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">{{$dh}}</span>
												<div class="infobox-content">Đơn hàng</div>
											</div>
										
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-flask"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">156</span>
												<div class="infobox-content">Lượt hỗ trợ trực tuyến</div>
											</div>
										</div>

										<div class="infobox infobox-orange2">
											<div class="infobox-chart">
												<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"><canvas width="44" height="33" style="display: inline-block; width: 44px; height: 33px; vertical-align: top;"></canvas></span>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">6,251</span>
												<div class="infobox-content">Lượt xem</div>
											</div>

											
										</div>

										<div class="infobox infobox-blue2">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="42" data-size="46" style="height: 46px; width: 46px; line-height: 45px;">
													<span class="percent"><i class="menu-icon glyphicon glyphicon-user"></i></span>
												<canvas height="46" width="46"></canvas></div>
											</div>

											<div class="infobox-data">
												<span class="infobox-text">{{$nd}}</span>

												<div class="infobox-content">
													<span class="bigger-110">Người dùng</span>
													
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="61" data-size="39" style="height: 39px; width: 39px; line-height: 38px;">
													<span class="percent">61</span>%
												<canvas height="39" width="39"></canvas></div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Công việc </div>
												<div class="infobox-content">được giao</div>
											</div>
										</div>

										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-chart">
												<span class="sparkline" data-values="3,4,2,3,4,4,2,2"><canvas width="39" height="19" style="display: inline-block; width: 39px; height: 19px; vertical-align: top;"></canvas></span>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Thu nhập</div>
												<div class="infobox-content">{{number_format($tn)}}Đ</div>
											</div>
										</div>

									
									</div>

									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Luật của website:
												</h5>

												<div class="widget-toolbar no-border">
												
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
                                                <span class="glyphicon glyphicon-user"></span>Là một admin của page, bạn vui lòng:</br>
                                                    <span class="glyphicon glyphicon-arrow-right"></span>Không được tự ý thay đổi cấu trúc website khi chưa được cho phép!</br>
                                                    <span class="glyphicon glyphicon-arrow-right"></span>Không được tự ý thay đổi quyền hạn của mọi thành viên cũng như ban thành viên!</br>
                                                    <span class="glyphicon glyphicon-arrow-right"></span>Không được lợi dụng chức quyền để lừa đảo!...</br>

													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															
															<h4 class="bigger pull-right">  <span class="glyphicon glyphicon-ok"></span> Không lạm quền</h4>
														</div>

														<div class="grid3">
															<h4 class="bigger pull-right">  <span class="glyphicon glyphicon-ok"></span> Không lừa đảo</h4>
														</div>

														<div class="grid3">
															<h4 class="bigger pull-right">  <span class="glyphicon glyphicon-ok"></span> Không khinh người</h4>
														</div>
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

							
								<div class="hr hr32 hr-dotted"></div>

							
								<!-- PAGE CONTENT ENDS -->
							</div>
@endsection