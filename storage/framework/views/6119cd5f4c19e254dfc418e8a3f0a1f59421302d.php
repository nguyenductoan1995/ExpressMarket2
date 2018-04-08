<?php $__env->startSection('content'); ?>

<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách loại sản phẩm</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
            <th>
                Tên Loại
            </th>
            <th>
                Ngày Tạo
            </th>
            <th>
                Ngày Sửa
            </th>
            <th> Thao Tác</th>
        </tr>

	  		  <?php $__currentLoopData = $loaisanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lsp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="info">
                <td>
                <?php echo e($lsp -> id_loai); ?>

                </td>
                <td>
				<?php echo e($lsp -> ten_loai); ?>

                </td>
                <td>
				<?php echo e($lsp -> created_at); ?>

                </td>
                <td>
				<?php echo e($lsp -> updated_at); ?>

                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/loaisanpham/sua/<?php echo e($lsp->id_loai); ?>">Sửa</a>
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/loaisanpham/xoa/<?php echo e($lsp->id_loai); ?>">Xoá</a>
                    </button>
				</td>
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table><div class="container">				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>