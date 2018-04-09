<?php $__env->startSection('content'); ?>
<div class="container">	
	
	<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
	
	<form action="admin/user/suatt/<?php echo e($user->id); ?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
		<div class="form-group">
			<label >Tên :</label>
			<input class="form-control" name="ten"  value="<?php echo e($user-> full_name); ?>" />
			</div><div class="form-group">
			<label >Email:</label>
			<input class="form-control" type="text" name="email"  value="<?php echo e($user-> email); ?> " />
			</div><div class="form-group">
			<label >Ảnh Đại Diện</label>
			<img widh="100px" height="100px" src="source/img/users/<?php echo e($user-> image); ?>" />
			<input type="file" name="urlanh"/>
			</div><div class="form-group">
			
            <div class="form-group">
			<label >Trạng thái : </label>
			<label class="radio-inline">

				<input  name="status" value="0" 
				<?php if($user -> status == 0): ?>
						<?php echo e("checked"); ?>

					<?php endif; ?> type="radio">Đang hoạt động
			</label>
			<label class="radio-inline">
				<input name="status" value="1" 
				<?php if($user -> status == 1): ?>
						<?php echo e("checked"); ?>

					<?php endif; ?> type="radio">Khóa tài khoản
			</label>
			</div>
            <label >Chức vụ : </label>
			<label class="radio-inline">

				<input  name="role" value="0" 
				<?php if($user -> role == 0): ?>
						<?php echo e("checked"); ?>

					<?php endif; ?> type="radio">User
			</label>
			<label class="radio-inline">
				<input name="role" value="1" 
				<?php if($user -> role == 1): ?>
						<?php echo e("checked"); ?>

					<?php endif; ?> type="radio">Admin
			</label>
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