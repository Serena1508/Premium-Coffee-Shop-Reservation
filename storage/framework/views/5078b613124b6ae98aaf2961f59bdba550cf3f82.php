<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body ">



<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="col-md-6 d-none d-md-block">
    <img src="https://www.coffeeaddress.com/file/manual/CA_Home_Coffee_in_cafe@2x.png" class="img-fluid" style="min-height:100%;" />
    </div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-block align-items-center py-15 ">
        <div class="container">
          <div class="row">
            <div class="col-16col-md-12 col-lg-12 mx-auto">

              <!-- Sign In Form -->


            <div class="card pt-5">


              <div class="pt-4 ">
                  <img src="/images/logocoffee.jpg" class="  img-fluid rounded mx-auto d-block px-md-4"
                     />
            </div>

                <div class="card-body">
                    <h3 class="mb-5 text-2xl font-bold text-center text-gray-800">
                        Login Please !
                    </h3>
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Email Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-2 block mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>

                            </div>
                            <label for="forget_password" class=" d-flex justify-content-end ">
                                    <?php if(Route::has('password.request')): ?>
                                    <a class="underline text-sm text-blue-600 hover:text-blue-600" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot your password?')); ?>

                                    </a>
                                <?php endif; ?>
                                </label>
                        </div>


                        <div class="row mb-4 mt-4">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn  btn-dark " style="width: 110%; height:34px">
                                    <?php echo e(__('Login')); ?>

                                </button>


                            </div>
                        </div>
                        <div class="flex flex-wrap font bold mb-5">
                            <?php if(Route::has('register')): ?>
                            <p class="w-full text-xs text-center text-gray-700 my-8 sm:text-sm sm:my-16">
                                <?php echo e(__("Don't have an account?")); ?>

                                <a class="text-blue-800 hover:text-blue-400 no-underline hover:underline" href="<?php echo e(route('register')); ?>">
                                    <?php echo e(__('Register')); ?>

                                </a>
                            </p>
                            <?php endif; ?>
                        </div>

                    </form>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coffee_project\resources\views/auth/login.blade.php ENDPATH**/ ?>