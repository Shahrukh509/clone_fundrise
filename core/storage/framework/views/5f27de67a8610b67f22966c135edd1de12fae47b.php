
<?php $__env->startSection('content'); ?>
<?php echo $__env->make($activeTemplate.'partials.user-breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 pl-lg-5 mt-lg-0 mt-5">
            <div class="row mb-none-30">
              <div class="col-md-12 mb-4">
                <label><?php echo app('translator')->get('Referral Link'); ?></label>
                <div class="input-group">
                  <input type="text" name="text" class="form-control" id="referralURL"
                  value="<?php echo e(url('user.refer.register',[Auth::user()->username])); ?>" readonly>
                  <div class="input-group-append">
                    <span class="input-group-text copytext copyBoard" id="copyBoard"> <i class="fa fa-copy"></i> </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption"><?php echo app('translator')->get('Deposit Wallet Balance'); ?></span>
                    <h4 class="currency-amount"><?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->deposit_wallet)); ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption"><?php echo app('translator')->get('Interest Wallet Balance'); ?></span>
                    <h4 class="currency-amount"><?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->interest_wallet)); ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-wallet"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption"><?php echo app('translator')->get('Total Invest'); ?></span>
                    <h4 class="currency-amount"><?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->invests->sum('amount'))); ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cubes "></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption"><?php echo app('translator')->get('Total Deposit'); ?></span>
                    <h4 class="currency-amount"><?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->deposits->where('status',1)->sum('amount'))); ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-credit-card"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget  d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption"><?php echo app('translator')->get('Total Withdraw'); ?></span>
                    <h4 class="currency-amount"><?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->withdrawals->where('status',1)->sum('amount'))); ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget  d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption"><?php echo app('translator')->get('Referral Earnings'); ?></span>
                    <h4 class="currency-amount"><?php echo e($general->cur_sym); ?><?php echo e(getAmount($user->commissions->sum('commission_amount'))); ?></h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
            </div><!-- row end -->
            <div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md">
                  <table class="table style--two">
                    <thead>
                      <tr>
                        <th><?php echo app('translator')->get('Date'); ?></th>
                        <th><?php echo app('translator')->get('Transaction ID'); ?></th>
                        <th><?php echo app('translator')->get('Amount'); ?></th>
                        <th><?php echo app('translator')->get('Wallet'); ?></th>
                        <th><?php echo app('translator')->get('Details'); ?></th>
                        <th><?php echo app('translator')->get('Post Balance'); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <td data-label="<?php echo app('translator')->get('Date'); ?>"><?php echo e(showDatetime($trx->created_at,'d/m/Y')); ?></td>
                        <td data-label="<?php echo app('translator')->get('Transaction ID'); ?>"><span class="text-primary"><?php echo e($trx->trx); ?></span></td>

                        <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                          <?php if($trx->trx_type == '+'): ?>
                          <span class="text-success">+ <?php echo e(__($general->cur_sym)); ?><?php echo e(getAmount($trx->amount)); ?></span>
                          <?php else: ?>
                          <span class="text-danger">- <?php echo e(__($general->cur_sym)); ?><?php echo e(getAmount($trx->amount)); ?></span>
                          <?php endif; ?>
                        </td>
                        <td data-label="<?php echo app('translator')->get('Wallet'); ?>">
                          <?php if($trx->wallet_type == 'deposit_wallet'): ?>
                          <span class="badge badge-info"><?php echo app('translator')->get('Deposit Wallet'); ?></span>
                          <?php else: ?>
                          <span class="badge badge-primary"><?php echo app('translator')->get('Interest Wallet'); ?></span>
                          <?php endif; ?>
                        </td>
                        <td data-label="<?php echo app('translator')->get('Details'); ?>"><?php echo e($trx->details); ?></td>
                        <td data-label="<?php echo app('translator')->get('Post Balance'); ?>"><span> <?php echo e(__($general->cur_sym)); ?><?php echo e(getAmount($trx->post_balance)); ?></span></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                          <td colspan="100%" class="text-center"><?php echo e(__('No Transaction Found')); ?></td>
                      </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- row end -->
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style type="text/css">
  #copyBoard{
    cursor: pointer;
  }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script>
      $('.copyBoard').click(function(){
        "use strict";
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
      });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/user/dashboard.blade.php ENDPATH**/ ?>