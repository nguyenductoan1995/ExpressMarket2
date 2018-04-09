<?php $__env->startSection('content'); ?>
			
	<div class="container">
	<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
	<form action="admin/donhang/duyet/<?php echo e($donhang->id_dh); ?>" method="POST" >
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
			
			<div class="form-group">
			<label >Đơn Hàng Số:  <?php echo e($donhang -> id_dh); ?></label></br>
			</div><div class="form-group">
			<label >Giá:
            <?php echo e(number_format($donhang -> tong_tien)); ?> VNĐ</label></br>
            <label>SĐT Khách Hàng:
            <?php echo e($donhang ->sdt); ?>

         </label></br><label>Địa Chỉ Nhận Hàng: 
            <?php echo e($donhang -> adress); ?></label></br>
          <label>Ngày Đặt:
            <?php echo e($donhang -> ngay_dat); ?></label></br>
			<label >Tình trạng : </label>
			<label class="radio-inline">

				<input  name="status" value="0" 
				<?php if($donhang -> status == 0): ?>
						<?php echo e("checked"); ?>

					<?php endif; ?> type="radio">Chưa Duyệt
			</label>
			<label class="radio-inline">
				<input name="status" value="1" 
				<?php if($donhang -> status == 1): ?>
						<?php echo e("checked"); ?>

					<?php endif; ?> type="radio">Đã Duyệt
			</label></br>
			
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-info" >
						<i class="ace-icon fa fa-check bigger-110"></i> Duyệt </button>
											&nbsp; &nbsp; &nbsp;
				
			</div>
	</form>				
	</br></br>
						</div>										
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>