<!DOCTYPE html>

<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>HomeShop - HTML Template</title>
        <base href="<?php echo e(asset('')); ?>">
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
		
        <!-- Stylesheets -->
        <link rel="stylesheet" href="source/css/bootstrap.min.css">
		<link rel="stylesheet" href="source/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="source/css/style.css">
        <link rel="stylesheet" href="source/css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="source/css/fontello.css">
   		<link rel="stylesheet" href="source/css/animation.css">
		<link rel="stylesheet" href="source/css/owl.carousel.css">
		<link rel="stylesheet" href="source/css/owl.theme.css">
		<link rel="stylesheet" href="source/css/chosen.css">
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="source/css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="source/css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- ////HEADER//// -->
			<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			
			<!-- ////TRANG CHU//// -->
			<!-- Content -->
			
				<?php echo $__env->yieldContent('content'); ?>

			<!-- /Content -->
			
            
			
			<!-- ////FOOTER/// -->
			<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container -->
		
		
		
		<!-- JavaScript -->
		<script src="source/js/modernizr.min.js"></script>
		<script src="source/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="source/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="source/js/jquery.raty.min.js"></script>
		
		<!-- Scroll Bar -->
		<script src="source/js/perfect-scrollbar.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="source/js/zoomsl-3.0.min.js"></script>
		
		<!-- FancyBox -->
		<script src="source/js/jquery.fancybox.pack.js"></script>
		
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="source/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="source/js/jquery.themepunch.revolution.min.js"></script>

		<!-- FlexSlider -->
		<script defer src="source/js/flexslider.min.js"></script>
		
		<!-- IOS Slider -->
		<script src="source/js/jquery.iosslider.min.js"></script>
		
		<!-- noUi Slider -->
		<script src="source/js/jquery.nouislider.min.js"></script>
		
		<!-- Owl Carousel -->
		<script src="source/js/owl.carousel.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="source/js/zoomsl-3.0.min.js"></script>
		
		<!-- SelectJS -->
        <script src="source/js/chosen.jquery.min.js" type="text/javascript"></script>
        
        <!-- Main JS -->
        <script defer src="source/js/bootstrap.min.js"></script>
        <script src="source/js/main-script.js"></script>
		
		<script>
		$(document).ready(function(){
    		console.log("111111")
		});
		$(window).on('load', function() {
			console.log("started abcd")
        	});
		// region ajax add to cart
		function AddToCart(id, quantity) {
			$temp = parseInt($('#temp').val());
			$.ajax({
					type: 'get',
					url: '<?php echo url('/them-gio-hang');?>' + '/' + id,
					success: function () {
						if(parseInt(quantity) == 0 && $temp == -1) {
							 $('#temp').val("1");
							 $("#quantityCart").text("1");
							 console.log("chay vo day 1");
							 
						}
						if(parseInt(quantity) != 0 && $temp == -1) {
							console.log($temp);
							$('#temp').val(quantity + 1);
							$("#quantityCart").text(quantity + 1);
							console.log("chay vo day 2");
						
						} 
						if(parseInt(quantity) != 0 && $temp != -1){
							$('#temp').val($temp + 1)
							$("#quantityCart").text($temp + 1);
							console.log("chay vo day 3");
							
						}

						if(parseInt(quantity) == 0 && $temp != -1){
							$('#temp').val($temp + 1)
							$("#quantityCart").text($temp + 1);
							console.log("chay vo day 4");
							
						}

					}
				});
		}
		// end region ajax
    	</script>

		
    </body>
    
</html>