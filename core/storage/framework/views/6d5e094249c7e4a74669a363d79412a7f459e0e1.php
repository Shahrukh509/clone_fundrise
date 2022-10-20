<?php
$blogs = getContent('blog.element',false,3);
$blogContent = getContent('blog.content',true);
?>
<section class="pt-120 pb-120 border-top-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$blogContent->data_values->heading)); ?></span></h2>
              <p><?php echo e(__(@$blogContent->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row mb-none-30">
          <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="blog-card">
              <div class="blog-card__thumb">
                <img src="<?php echo e(getImage('assets/images/frontend/blog/thumb_'.@$data->data_values->image,'555x293')); ?>" alt="image">
              </div>
              <div class="blog-card__content">
                <h5 class="blog-card__title mb-2"><a href="<?php echo e(route('blog.details',[str_slug($data->data_values->title),$data->id])); ?>"><?php echo e(__(@$data->data_values->title)); ?></a></h5>
                
                <p><?php echo app('translator')->get(str_limit(strip_tags(@$data->data_values->description),180)); ?></p>
                <a href="<?php echo e(route('blog.details',[str_slug($data->data_values->title),$data->id])); ?>" class="cmn-btn btn-md mt-4"><?php echo e(trans('Read More')); ?></a>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/sections/blog.blade.php ENDPATH**/ ?>