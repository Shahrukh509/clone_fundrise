<?php
  $faqCaption = getContent('faq.content',true);
  $faqElements = getContent('faq.element','','',1);
?>
<section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$faqCaption->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$faqCaption->data_values->heading_c)); ?></b></h2>
              <p><?php echo e(__(@$faqCaption->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion cmn-accordion" id="accordionExample">
              <?php $__currentLoopData = $faqElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqElement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="card">
                <div class="card-header" id="heading<?php echo e($loop->index); ?>">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo e($loop->index); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($loop->index); ?>">
                      <i class="las la-question-circle"></i>
                      <span><?php echo e(__($faqElement->data_values->question)); ?></span>
                    </button>
                  </h2>
                </div>
            
                <div id="collapse<?php echo e($loop->index); ?>" class="collapse" aria-labelledby="heading<?php echo e($loop->index); ?>" data-parent="#accordionExample" style="">
                  <div class="card-body">
                    <?php echo app('translator')->get(@$faqElement->data_values->answer); ?>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/sections/faq.blade.php ENDPATH**/ ?>