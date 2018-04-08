<?php $__env->startSection('content'); ?>
			
	
	<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
	<form action="admin/loaisanpham/them" method="POST">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
			<div class="form-group">
				<label >Tên Thể Loại</label>
				<input class="form-control" name="ten_loai"  placeholder="Nhập tên thể loại" >
			</div>

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
																
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>