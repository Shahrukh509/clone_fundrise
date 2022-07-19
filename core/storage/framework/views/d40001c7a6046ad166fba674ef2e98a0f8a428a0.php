<?php
  $teamCaption = getContent('team.content',true);
  $teamElements = getContent('team.element','','',1);
?>
<section class="pt-120 pb-120 bg_img" data-background="<?php echo e(getImage('assets/images/frontend/team/'.@$teamCaption->data_values->image,'1920x1281')); ?>">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$teamCaption->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$teamCaption->data_values->heading_c)); ?></b></h2>
              <p><?php echo e(__(@$teamCaption->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <?php $__currentLoopData = $teamElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teamElement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="<?php echo e(getImage('assets/images/frontend/team/'.@$teamElement->data_values->image,'280x296')); ?>" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1"><?php echo e(__(@$teamElement->data_values->name)); ?></h4>
                <span class="designation"><?php echo e(__(@$teamElement->data_values->designation)); ?></span>
              </div>
            </div><!-- team-card end -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/sections/team.blade.php ENDPATH**/ ?>