<?php
    $aboutCaption = getContent('about.content',true);
?>
<section class="about-section pt-120 pb-120 bg_img" data-background="<?php echo e(__(getImage('assets/images/frontend/about/'.@$aboutCaption->data_values->image,'1920x1281'))); ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="about-content">
              <h2 class="section-title mb-3"><span class="font-weight-normal"><?php echo e(__(@$aboutCaption->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$aboutCaption->data_values->heading_c)); ?></b></h2>
              <p><?php echo app('translator')->get(@nl2br($aboutCaption->data_values->content)); ?> </p>
              <a href="<?php echo e(__(@$aboutCaption->data_values->button_link)); ?>" class="cmn-btn mt-4"><?php echo e(__(@$aboutCaption->data_values->button_name)); ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>




<?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/sections/about.blade.php ENDPATH**/ ?>