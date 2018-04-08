<?php $__env->startSection('content'); ?>

<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách imide</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
            <th>
                Sản phẩm
            </th>
            <th>
                Ảnh 
            </th>
         
            <th> Thao Tác</th>
        </tr>

	  		  <?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $im): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="info">
                <td>
                <?php echo e($im -> id_hinh); ?>

                </td>
                <td>
				<?php echo e($im -> id_sp); ?>

                </td>
                <td>
				<img widh="100px" height="100px" src="source/img/products/chitiet/<?php echo e($im -> url_hinh); ?>" />
                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/anh/sua/<?php echo e($im->id_hinh); ?>">Sửa</a>
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/anh/xoa/<?php echo e($im->id_hinh); ?>">Xoá</a>
                    </button>
				</td>
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table><div class="container">				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>