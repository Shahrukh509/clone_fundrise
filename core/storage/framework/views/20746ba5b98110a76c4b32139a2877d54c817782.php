<!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="<?php echo e(getImage('assets/images/frontend/breadcrumb/'.getContent('breadcrumb.content',true)->data_values->image,'1920x1280')); ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title"><?php echo e(__($page_title)); ?></h2>
            <ul class="page-breadcrumb">
              <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
              <li><?php echo app('translator')->get($page_title); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end --><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/partials/user-breadcrumb.blade.php ENDPATH**/ ?>