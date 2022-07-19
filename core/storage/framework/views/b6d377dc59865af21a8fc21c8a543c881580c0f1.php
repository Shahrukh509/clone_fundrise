<?php
  $howWorkCaption = getContent('how_work.content',true);
  $howWorElements = getContent('how_work.element','','',1);
?>
<section class="pt-120 pb-120 bg_img" data-background="<?php echo e(getImage('assets/images/frontend/how_work/'.@$howWorkCaption->data_values->image,'7111x2963')); ?>">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$howWorkCaption->data_values->heading_w_1)); ?></span> <b class="base--color"><?php echo e(__(@$howWorkCaption->data_values->heading_c)); ?></b> <span class="font-weight-normal"><?php echo e(__(@$howWorkCaption->data_values->heading_w_2)); ?></span></h2>
              <p><?php echo e(__(@$howWorkCaption->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <?php $__currentLoopData = $howWorElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $howWorElement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon base--color">
                <?php echo @$howWorElement->data_values->icon ?>
                <span class="step-number"><?php echo e(__($loop->iteration)); ?></span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3"><?php echo e(__(@$howWorElement->data_values->title)); ?></h4>
              </div>
            </div><!-- work-card end -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/sections/how_work.blade.php ENDPATH**/ ?>