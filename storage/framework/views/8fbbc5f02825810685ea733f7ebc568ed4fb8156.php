 <?php $__env->startSection('content'); ?>
<div class="row">
    <form action="<?php echo e(route('login')); ?>" method="post">
        <input type ='hidden' name= '_token' value = "<?php echo e(csrf_token()); ?>">
        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
            <br/>
            <div class="carousel-heading no-margin">
                <h4>Login</h4>
            </div>
            <?php if(Session::has('flag')): ?>
            <div class ="alert alert-<?php echo e(Session::get('flag')); ?>" > <?php echo e(Session::get('message')); ?> </div>
            <?php endif; ?>
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <p>Email*</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <input name='email' type="text" required>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <p>Password</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <input type="password" name='password' required>
                    </div>
                </div>
                <input type="checkbox" id="loginremember" , name="remember">
                <label for="loginremember">Remember me</label>
                <br/>
                <div class='row'>
                    <div class="pull-left">
                        <input type="submit" class="orange" value="Login">
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>