
<?php $__env->startSection('content'); ?>
<?php
    $loginContent = getContent('login.content',true);
?>
    <!-- account section start -->
    <div class="account-section bg_img" data-background="<?php echo e(getImage('assets/images/frontend/login/'.@$loginContent->data_values->section_bg)); ?>">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="<?php echo e(getImage('assets/images/frontend/login/'.@$loginContent->data_values->card_bg)); ?>">
                <h2 class="section-title"><?php echo e(__(@$loginContent->data_values->heading_w)); ?> <span class="base--color"><?php echo e(__(@$loginContent->data_values->heading_c)); ?></span></h2>
                <p><?php echo e(__(@$loginContent->data_values->sub_heading)); ?></p>
              </div>
              <div class="account-card__body">
                <form action="<?php echo e(route('user.login')); ?>" class="mt-4" method="post" onsubmit="return submitUserForm();">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label><?php echo app('translator')->get('User Name'); ?></label>
                    <input type="text" class="form-control" name="username" placeholder="<?php echo app('translator')->get('Enter user name'); ?>" required>
                  </div>
                  <div class="form-group">
                    <label><?php echo app('translator')->get('Password'); ?></label>
                    <input type="password" type="text" class="form-control" name="password" placeholder="<?php echo app('translator')->get('Enter password'); ?>" required>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <?php echo recaptcha() ?>
                  </div>
                  <?php echo $__env->make($activeTemplate.'partials.custom-captcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <div class="mt-3">
                    <button type="submit" class="cmn-btn"><?php echo app('translator')->get('Login Now'); ?></button>
                  </div>
                  <div class="form-row mt-2">
                    <div class="col-sm-6">
                      <div class="form-group form-check pl-0">
                        <p class="f-size-14"><?php echo e(trans('Forgot Password?')); ?> <a href="<?php echo e(route('user.password.request')); ?>" class="base--color"><?php echo app('translator')->get('Reset Now'); ?></a></p>
                      </div>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                      <p class="f-size-14"><?php echo app('translator')->get("Haven't an account?"); ?> <a href="<?php echo e(route('user.register')); ?>" class="base--color"><?php echo app('translator')->get('Sign Up'); ?></a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account section end -->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    <script>
      "use strict";
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;"><?php echo app('translator')->get("Captcha field is required."); ?></span>';
                return false;
            }
            return true;
        }
        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/user/auth/login.blade.php ENDPATH**/ ?>