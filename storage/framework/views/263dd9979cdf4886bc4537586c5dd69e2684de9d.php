<?php $__env->startSection('content'); ?>

<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách Slide</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
            <th>
                Tên
            </th>
            <th>
                Ảnh 
            </th>
         
            <th> Email</th>
            <th> Địa Chỉ</th>
            <th> SĐT</th>
            <th> Tình Trạng</th>
            <th> Chức Vụ</th>
            <th> Ngày Tham Gia</th>
            <th> Thao Tác</th>
        </tr>

	  		  <?php $__currentLoopData = $User; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="info">
                <td>
                <?php echo e($u -> id); ?>

                </td>
                <td>
				<?php echo e($u ->full_name); ?>

                </td>
                <td>
				<img widh="100px" height="100px" src="source/img/users/<?php echo e($u->image); ?>" />
                </td>
                <td>
				<?php echo e($u ->email); ?>

                </td>
                <td>
				<?php echo e($u ->address); ?>

                </td>
                <td>
				<?php echo e($u ->phone); ?>

                </td>
                <td><?php if($u ->status == 0): ?>
				<span class="label label-primary"><?php echo e('Đang hoạt động'); ?></span>
				<?php else: ?>
				<span class="label label-danger"><?php echo e('Bị Khóa'); ?></span>
				<?php endif; ?>
                </td>
                <td>
				<?php if($u ->role == 0): ?>
				<span class="label label-success"><?php echo e('User'); ?></span>
				<?php else: ?>
				<span class="label label-warning"><?php echo e('Admin'); ?></span>
				<?php endif; ?>
                </td>
                <td>
				<?php echo e($u ->created_at); ?>

                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/user/sua/<?php echo e($u->id); ?>">Sửa</a>
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/user/xoa/<?php echo e($u->id); ?>">Xoá</a>
                    </button>
				</td>
               
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table><div class="container">				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>