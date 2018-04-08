<?php $__env->startSection('content'); ?>
	<div class="container">		
	
	<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
	<form action="admin/anh/sua/<?php echo e($img->id_hinh); ?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
			<div class="form-group">
				<label >Chọn sản phẩm: </label>
				<select class="form-control" name ="idsp">
					<option value="0">Chọn sản phẩm</option>
					<?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option 
					<?php if($img ->id_sp == $sp ->id_sp): ?>
						<?php echo e("selected"); ?>

					<?php endif; ?>
					value="<?php echo e($sp-> id_sp); ?>"> <?php echo e($sp-> ten_sp); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
            <div class="form-group">
				<label >Ảnh</label>
				<img widh="100px" height="100px" src="source/img/products/chitiet/<?php echo e($img -> url_hinh); ?>" />
				<input type="file" name="image"/>
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
</div>									
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>