<?php $__env->startSection('content'); ?>
			
	<div class="container">
	<?php if(session('thongbao')): ?>
		<div class= "alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>
	<form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
			<div class="form-group">
				<label >Tên Thể Loại</label>
				<select class="form-control" name ="idloai">
					<option value="0">Chọn loại sản phẩm</option>
					<?php $__currentLoopData = $loaisanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lsp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($lsp-> id_loai); ?>"> <?php echo e($lsp-> ten_loai); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
			<label >Tên sản phẩm:</label>
			<input class="form-control" name="ten_sp"  placeholder="Nhập tên sản phẩm" />
			</div><div class="form-group">
			<label >Giá:</label>
			<input class="form-control" type="number" name="gia"  placeholder="Nhập giá" />
			</div><div class="form-group">
			<label >Ảnh</label>
			<input type="file" name="urlanh"/>
			</div><div class="form-group">
			<label >Mô Tả</label>
			<textarea name="mota" id="demo" class ="form-controle ckeditor" row="3"></textarea>
			</div><div class="form-group">
			<label >Số Lượng</label>
			<input type="number" class="form-control" name="soluong"  />
			</div><div class="form-group">
			<label >Mới : </label>
			<label class="radio-inline">
				<input name="new" value="0" type="radio">Cũ
			</label>
			<label class="radio-inline">
				<input name="new" value="1" type="radio">Mới
			</label>
			</div><div class="form-group">
			<label >Hot : </label>
			<label class="radio-inline">
				<input name="hot" value="0" type="radio">Không Hot
			</label>
			<label class="radio-inline">
				<input name="hot" value="1" type="radio">Hot
			</label>
			</div><div class="form-group">
			<label >Giá khuyễn mãi</label>
			<input type="number" class="form-control" name="sale"  />
			

			</div>
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-info" >
						<i class="ace-icon fa fa-check bigger-110"></i> Thêm </button>
											&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>	Nhập lại </button>
				</div>
			</div>
	</form>				
	</br></br>
						</div>										
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>