 <?php
  $testimonialCaption = getContent('testimonial.content',true);
  $testimonialElements = getContent('testimonial.element','','',1);
?>
 <!-- testimonial section start -->
    <section class="pt-120 pb-120 bg_img overlay--radial" data-background="<?php echo e(getImage('assets/images/frontend/testimonial/'.@$testimonialCaption->data_values->image)); ?>">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$testimonialCaption->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$testimonialCaption->data_values->heading_c)); ?></b></h2>
              <p><?php echo e(__(@$testimonialCaption->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider">
              <?php $__currentLoopData = $testimonialElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonialElement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="testimonial-card__content">
                    <p><?php echo app('translator')->get(@$testimonialElement->data_values->qoute); ?></p>
                  </div>
                  <div class="testimonial-card__client">
                    <div class="thumb">
                      <img src="<?php echo e(getImage('assets/images/frontend/testimonial/'.@$testimonialElement->data_values->image)); ?>" alt="image">
                    </div>
                    <div class="content">
                      <h6 class="name"><?php echo app('translator')->get(@$testimonialElement->data_values->name); ?></h6>
                      <span class="designation"><?php echo app('translator')->get(@$testimonialElement->data_values->designation); ?></span>
                    </div>
                  </div>
                </div><!-- testimonial-card end -->
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div><!-- row end -->
      </div>
    </section>
    <!-- testimonial section end --><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/sections/testimonial.blade.php ENDPATH**/ ?>