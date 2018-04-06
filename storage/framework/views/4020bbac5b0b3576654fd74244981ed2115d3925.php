<?php $__env->startSection('content'); ?>

<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách sản phẩm</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
            <th>
                Tên Sản Phẩm
            </th>
            <th>
                Giá
            </th>
            <th>
                Ảnh Đại Diện
            </th>
			<th>
                Mô Tả
            </th>
            <th> Số Lượng</th>
			<th>
                Mới
            </th>
			<th>
                Hot
            </th>
			<th>
                Sale
            </th>
			<th>
                Loại Sản Phẩm
          
			<th>
                Ngày Tạo
            </th>
			<th>
                Ngày Sửa
            </th>
			<th>
                Thao Tác
            </th>
        </tr>

	  		  <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="info">
                <td>
                <?php echo e($sp -> id_sp); ?>

                </td>
                <td>
				<?php echo e($sp -> ten_sp); ?>

                </td>
				<td>
				<?php echo e(number_format($sp -> gia)); ?> VNĐ
                </td>
				<td>
				<img widh="100px" height="100px" src="source/img/products/<?php echo e($sp -> url_hinh); ?>" />
                </td>
				<td>
				<?php echo e($sp -> mo_ta); ?>

                </td>
				<td>
				<?php echo e($sp -> so_luong_ton); ?>

                </td>
				<td>
				<?php if($sp -> sp_moi == 0): ?>
				<?php echo e('Không'); ?>

				<?php else: ?>
				<?php echo e('Có'); ?>

				<?php endif; ?>
                </td>
				<td>
				<?php if($sp -> sp_hot == 0): ?>
				<?php echo e('Không'); ?>

				<?php else: ?>
				<?php echo e('Có'); ?>

				<?php endif; ?>
                </td>
				<td>
				<?php echo e(number_format($sp -> sp_sale)); ?> VNĐ
                </td>
				<td>
				<?php echo e($sp ->id_loai); ?>

                </td>
                <td>
				<?php echo e($sp -> created_at); ?>

                </td>
                <td>
				<?php echo e($sp -> updated_at); ?>

                </td>
                <td>
                    <button class="btn btn-info">
					<a href="admin/sanpham/sua/<?php echo e($sp->id_sp); ?>">Sửa</a>
                    
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/sanpham/xoa/<?php echo e($sp->id_sp); ?>">Xoá</a>
                    </button>
				</td>
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table><div class="container">				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>