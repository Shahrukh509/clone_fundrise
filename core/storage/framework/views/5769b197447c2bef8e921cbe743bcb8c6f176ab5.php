

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
        $contactContent = getContent('contact.content',true);
        $contactElements = getContent('contact.element','','',1);
    ?>
 <!-- contact section start -->
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="contact-wrapper">
          <div class="row">
            <div class="col-lg-6 contact-thumb bg_img" data-background="<?php echo e(getImage('assets/images/frontend/contact/'.@$contactContent->data_values->image,'1920x1280')); ?>"></div>
            <div class="col-lg-6 contact-form-wrapper">
              <h2 class="font-weight-bold mb-2"><?php echo app('translator')->get(@$contactContent->data_values->heading); ?></h2>
              <p class="font-weight-bold"><?php echo app('translator')->get(@$contactContent->data_values->sub_heading); ?></p>
              <form action="" method="post" class="contact-form mt-4">
                <?php echo csrf_field(); ?>
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" placeholder="<?php echo app('translator')->get('Full Name'); ?>" class="form-control">
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" name="email" placeholder="<?php echo app('translator')->get('Email Address'); ?>" class="form-control">
                  </div>
                  <div class="form-group col-lg-12">
                    <input name="subject" placeholder="<?php echo app('translator')->get('Subject'); ?>" class="form-control">
                  </div>
                  <div class="form-group col-lg-12">
                    <textarea class="form-control" name="message" placeholder="<?php echo app('translator')->get('Message'); ?>"></textarea>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" class="cmn-btn"><?php echo app('translator')->get('Send Message'); ?></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- contact-wrapper end -->
      </div>
      <div class="container pt-120">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="row mb-none-30">
              <?php $__currentLoopData = $contactElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactElement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item">
                  <?php echo $contactElement->data_values->icon ?>
                  <h5 class="mt-2"><?php echo e(__(@$contactElement->data_values->title)); ?></h5>
                  <div class="mt-4">
                    <p><a href="javascript:void(0)"><?php echo e(__(@$contactElement->data_values->content)); ?></a></p>
                  </div>
                </div><!-- contact-item end -->
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact section end -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="https://maps.google.com/maps/api/js?key=<?php echo e(trim(@$contact->data_values->map_api_key)); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'js/map.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/contact.blade.php ENDPATH**/ ?>