<?php
    $topInvestor = \App\Models\Invest::with('user')
               ->selectRaw('SUM(amount) as totalAmount, user_id')
               ->orderBy('totalAmount', 'desc')
               ->groupBy('user_id')
               ->limit(6)
               ->get()->toArray();

    $top_investorContent = getContent('top_investor.content',true);
?>
<section class="pt-120 pb-120 border-top-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$top_investorContent->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$top_investorContent->data_values->heading_c)); ?></b></h2>
              <p><?php echo e(__(@$top_investorContent->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <?php $__currentLoopData = $topInvestor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="<?php echo e(getImage('assets/images/user/profile/'. @json_decode(json_encode($data['user']['image'])), '800x800')); ?>"></div>
              <div class="investor-card__content">
                <h6 class="name"><?php echo e(@json_decode(json_encode($data['user']['username']))); ?></h6>
                <span class="amount f-size-14"><?php echo app('translator')->get('Investment'); ?> - <?php echo e($general->cur_sym); ?><?php echo e($data['totalAmount']); ?></span>
              </div>
            </div><!-- investor-card end -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/sections/top_investor.blade.php ENDPATH**/ ?>