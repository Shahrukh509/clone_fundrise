<?php
  $cta = getContent('cta.content',true);
?>
<section class="pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="cta-wrapper bg_img border-radius--10 text-center" data-background="<?php echo e(getImage('assets/images/frontend/cta/'.@$cta->data_values->image,'7000x4000')); ?>">
              <h2 class="title mb-3"><?php echo e(__(@$cta->data_values->heading)); ?></h2>
              <p><?php echo e(__(@$cta->data_values->sub_heading)); ?></p>
              <a href="<?php echo e(__(@$cta->data_values->button_url)); ?>" class="cmn-btn mt-4"><?php echo e(__(@$cta->data_values->button_name)); ?></a>
            </div>
          </div>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/sections/cta.blade.php ENDPATH**/ ?>