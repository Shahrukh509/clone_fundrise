<?php
  $whyChooseCaption = getContent('why_choose.content',true);
  $whyChooseElements = getContent('why_choose.element','','',1);
?>
<section class="pt-120 pb-120 overlay--radial bg_img" data-background="<?php echo e(getImage('assets/images/frontend/why_choose/'.@$whyChooseCaption->data_values->image,'1920x1281')); ?>">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$whyChooseCaption->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$whyChooseCaption->data_values->heading_c)); ?></b></h2>
              <p><?php echo e(__(@$whyChooseCaption->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <?php $__currentLoopData = $whyChooseElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whyChooseElement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon base--color">
                  <?php echo @$whyChooseElement->data_values->icon ?>
                </div>
                <h4 class="choose-card__title base--color"><?php echo e(__(@$whyChooseElement->data_values->title)); ?></h4>
              </div>
              <p><?php echo app('translator')->get(@$whyChooseElement->data_values->content); ?></p>
            </div><!-- choose-card end -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/sections/why_choose.blade.php ENDPATH**/ ?>