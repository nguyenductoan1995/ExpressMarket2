<?php $__env->startSection('content'); ?>
<div class="container">		
<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Danh sách đơn hàng</h3>

</div>
<div class="container">
    <table class="table table-bordered">
        <tr class="success">
        
            <th>
                ID
            </th>
          
            <th>
                Đơn Giá
            </th>
			<th>
                SĐT Người Nhận
            </th>
            <th>
                Địa Chỉ Người Nhận
            </th>
            <th> Ngày Giao</th>
				
			<th>
                Trạng Thái
            </th>
			<th>
                Thao Tác
            </th>
        </tr>

	  		  <?php $__currentLoopData = $donhang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donhang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
            <tr class="info">
                <td>
                <?php echo e($donhang -> id_dh); ?>

                </td>
              
				<td>
				<?php echo e(number_format($donhang -> tong_tien)); ?> VNĐ
                </td>
                <td>
				<?php echo e($donhang ->sdt); ?>

                </td>
                <td>
				<?php echo e($donhang -> address); ?>

                </td>
                <td>
				<?php echo e($donhang -> ngay_dat); ?>

                </td>
                <td>
				<?php if($donhang -> status == 0): ?>
				<?php echo e('Chưa Duyệt'); ?>

				<?php else: ?>
				<?php echo e('Đã Duyệt'); ?>

				<?php endif; ?>
                </tD>
                <td>
                    <button class="btn btn-info">
					<a href="admin/donhang/chitiet/<?php echo e($donhang->id_dh); ?>">Chi Tiết</a>
                    
                    </button>
                    <button class="btn btn-danger">
					<a href="admin/donhang/duyet/<?php echo e($donhang->id_dh); ?>">Duyệt</a>
                    
                    </button>
                 
				</td>
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>