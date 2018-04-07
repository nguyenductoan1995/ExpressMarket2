<?php $__env->startSection('content'); ?>
			
	
	<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
	
	<form action="admin/slide/sua/<?php echo e($sld->id_slide); ?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
			<div class="form-group">
				<label >Đường dẫn: </label>
				<input class="form-control" name="tenloai"  placeholder=" <?php echo e($sld-> link); ?>" 
				value="<?php echo e($sld-> link); ?>" />
			</div>
            <div class="form-group">
			<label >Ảnh</label>
			<img widh="100px" height="100px" src="source/img/products/<?php echo e($sld -> image); ?>" />
			<input type="file" name="<?php echo e($sld -> image); ?>"/>
			</div>
		
			</div>
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-info" >
						<i class="ace-icon fa fa-check bigger-110"></i> Sửa </button>
											&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>	Nhập lại </button>
				</div>
			</div>
	</form>				
																
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>