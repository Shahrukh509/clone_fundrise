<?php
    $weAccept = \App\Models\Gateway::where('status', '1')->get();

    $weAcceptContent = getContent('we_accept.content',true);
?>
<section class="pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$weAcceptContent->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$weAcceptContent->data_values->heading_c)); ?></b></h2>
              <p><?php echo e(__(@$weAcceptContent->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12">
            <div class="payment-slider">
              <?php $__currentLoopData = $weAccept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="single-slide">
                <div class="brand-item">
                  <img src="<?php echo e(getImage(imagePath()['gateway']['path'].'/'. $data->image,'800x800')); ?>" alt="image">
                </div><!-- brand-item end -->
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- payment-slider end -->
          </div>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/sections/we_accept.blade.php ENDPATH**/ ?>