<?php $__env->startSection('content'); ?>
	<div class="container">		
	
	<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
	<form action="admin/slide/them" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
			<div class="form-group">
				<label >Đường dẫn</label>
				<input class="form-control" name="link"  placeholder="Nhập đường dẫn" />
			</div>
            <div class="form-group">
				<label >Ảnh</label>
				<input type="file" name="image"/>
			</div>
			
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-info" >
						<i class="ace-icon fa fa-check bigger-110"></i> Thêm </button>
											&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>	Nhập lại </button>
				</div>
			</div>
	</form>				
</div>									
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>