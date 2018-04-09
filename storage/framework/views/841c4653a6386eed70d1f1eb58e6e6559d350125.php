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
                Tên Sản Phẩm
            </th>
            <th>
                Số Lượng
            </th>
            <th> Thành Tiền</th>
           
			<th>
                Ngày Đặt
            </th>
			
        </tr>

	  		  <?php $__currentLoopData = $ctdh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctdh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
            <tr class="info">
                <td>
                <?php echo e($ctdh -> id_ctdh); ?>

                </td>
              
				
                <td>
				<?php echo e($ctdh ->id_sp); ?>

                </td>
                <td>
				<?php echo e($ctdh -> so_luong); ?>

                </td>   
                <td>
				<?php echo e(number_format($ctdh -> thanh_tien)); ?> VNĐ
                </td>
                <td>
				<?php echo e($ctdh -> created_at); ?>

                </td>
              
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table>		
    <a href="admin/donhang/danhsach"><button type="button" class="btn btn-default navbar-btn pull-left" >Trở Về</button></a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>