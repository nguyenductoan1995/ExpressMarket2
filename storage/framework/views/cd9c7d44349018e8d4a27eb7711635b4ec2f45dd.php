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
                Đường dẫn
            </th>
            <th>
                Ảnh 
            </th>
         
            <th> Thao Tác</th>
        </tr>

	  		  <?php $__currentLoopData = $sld; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="info">
                <td>
                <?php echo e($sl -> id_slide); ?>

                </td>
                <td>
				<?php echo e($sl -> link); ?>

                </td>
                <td>
				<img widh="100px" height="100px" src="source/img/products/<?php echo e($sl -> image); ?>" />
                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/slide/sua/<?php echo e($sl->id_slide); ?>">Sửa</a>
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/slide/xoa/<?php echo e($sl->id_slide); ?>">Xoá</a>
                    </button>
				</td>
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table><div class="container">				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>