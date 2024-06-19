<?php $__env->startSection('title'); ?>
    Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Register</h2>
                <form action="<?php echo e(route ('register')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                      <label for="exampleInputUserName" class="form-label>">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputName">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Algebra\Laravel\group-app\resources\views/auth/register.blade.php ENDPATH**/ ?>