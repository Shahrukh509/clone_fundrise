<?php
  $planCaption = getContent('plan.content',true);
  $plans = \App\Models\Plan::where('status', 1)->where('featured', 1)->latest()->get();
?>
<section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$planCaption->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$planCaption->data_values->heading_c)); ?></b></h2>
              <p><?php echo app('translator')->get(@$planCaption->data_values->sub_heading); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row mb-none-30 justify-content-center">
          <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $time_name = \App\Models\TimeSetting::where('time', $data->times)->first();
            ?>
          <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" data-background="<?php echo e(asset($activeTemplateTrue.'/images/bg/bg-4.png')); ?>">
              <h4 class="package-card__title base--color mb-2"><?php echo e(@$data->name); ?></h4>
              
              <ul class="package-card__features mt-4">
                <li><?php echo app('translator')->get('Return'); ?> <?php echo e(__($data->interest)); ?><?php echo e(($data->interest_status == 1) ? '%': __($general->cur_text)); ?></li>
                
                <li>
                  <?php echo app('translator')->get('Every'); ?> <?php echo e(__($time_name->name)); ?>

                </li>
                <li><?php echo app('translator')->get('For'); ?>  <?php if($data->lifetime_status == 0): ?> <?php echo e(__($data->repeat_time)); ?> <?php echo e(__($time_name->name)); ?> <?php else: ?> <?php echo app('translator')->get('Lifetime'); ?> <?php endif; ?></li>
                <li><?php if($data->lifetime_status == 0): ?> 
                    <?php echo app('translator')->get('Total'); ?>   <?php echo e(__($data->interest*$data->repeat_time)); ?><?php echo e(($data->interest_status == 1) ? '%': __($general->cur_text)); ?>


                    <?php if($data->capital_back_status == 1): ?>
                    + <span class="badge badge-success"><?php echo app('translator')->get('Capital'); ?></span> 
                    <?php endif; ?>
                    <?php else: ?>
                    <?php echo app('translator')->get('Lifetime Earning'); ?> 
                <?php endif; ?></li>
              </ul>
              <div class="package-card__range mt-5 base--color"><?php if($data->fixed_amount == 0): ?>
                <?php echo e(__($general->cur_sym)); ?><?php echo e(__($data->minimum)); ?>  - <?php echo e(__($general->cur_sym)); ?><?php echo e(__($data->maximum)); ?>

                <?php else: ?>
                <?php echo e(__($general->cur_sym)); ?><?php echo e(__($data->maximum)); ?>

                <?php endif; ?>
              </div>
              <a href="javascript:void(0)" data-toggle="modal" data-target="#depoModal" data-resource="<?php echo e($data); ?>" class="cmn-btn btn-md mt-4 investButton"><?php echo app('translator')->get('Invest Now'); ?></a>
            </div><!-- package-card end -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>




    <?php $__env->startPush('renderModal'); ?>

<!-- Modal -->
<div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-bg">
            <div class="modal-header">
                <strong class="modal-title text-white" id="ModalLabel">
                    <?php if(auth()->guard()->guest()): ?>
                    <?php echo app('translator')->get('At first sign in your account'); ?>
                    <?php else: ?>
                    <?php echo app('translator')->get('Confirm to invest on'); ?> <span class="planName"></span>
                    <?php endif; ?>
                </strong>
                <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form action="<?php echo e(route('user.buy.plan')); ?>" method="post" class="register">
                <?php echo csrf_field(); ?>
                <?php if(auth()->guard()->check()): ?>
                <div class="modal-body">

                    <div class="form-group">
                        <h6 class="text-center investAmountRenge"></h6>

                        <p class="text-center mt-1 interestDetails"></p>
                        <p class="text-center interestValidaty"></p>

                        <div class="form-group ">
                            <strong class="text-white mb-2 d-block"><?php echo app('translator')->get('Select wallet'); ?></strong>
                            <select class="form-control" name="wallet_type">
                                        <option value="deposit_wallet"><?php echo app('translator')->get('Deposit Wallet - '.$general->cur_sym.getAmount(auth()->user()->deposit_wallet)); ?></option>
                                        <option value="interest_wallet"><?php echo app('translator')->get('Interest Wallet -'.$general->cur_sym.getAmount(auth()->user()->interest_wallet)); ?></option>
                                        <option value="checkout"><?php echo app('translator')->get('Checkout'); ?></option>
                                    </select>
                        </div>
                        <input type="hidden" name="plan_id" class="plan_id">

                        <div class="form-group">
                            <strong class="text-white mb-2 d-block"><?php echo app('translator')->get('Invest Amount'); ?></strong>
                            <input type="text" class="form-control fixedAmount" id="fixedAmount" name="amount"
                            value="<?php echo e(old('amount')); ?>"
                            onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                            autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                    data-dismiss="modal"><?php echo app('translator')->get('No'); ?></button>
                    <button type="submit" class="btn cmn-btn"><?php echo app('translator')->get('Yes'); ?></button>
                </div>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                <div class="modal-footer">
                    <a href="<?php echo e(route('user.login')); ?>" type="button"
                    class="btn btn-success custom-success w-100"><?php echo app('translator')->get('At first sign in your account'); ?></a>
                </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script>
    (function ($) {
        "use strict";
        $(document).on('click','.investButton',function () {
            var data = $(this).data('resource');
            var symbol = "<?php echo e(__($general->cur_sym)); ?>";
            var currency = "<?php echo e(__($general->cur_text)); ?>";

            $('#mySelect').empty();

            if (data.fixed_amount == '0') {
                $('.investAmountRenge').text(`<?php echo app('translator')->get('invest'); ?>: ${symbol}${data.minimum} - ${symbol}${data.maximum}`);
                $('.fixedAmount').val('');
                $('#fixedAmount').attr('readonly', false);

            } else {
                $('.investAmountRenge').text(`<?php echo app('translator')->get('invest'); ?>: ${symbol}${data.fixed_amount}`);
                $('.fixedAmount').val(data.fixed_amount);
                $('#fixedAmount').attr('readonly', true);
            }

            if (data.interest_status == '1') {
                $('.interestDetails').html(`<strong> <?php echo app('translator')->get('Interest'); ?>: ${data.interest} % </strong>`);
            } else {
                $('.interestDetails').html(`<strong> <?php echo app('translator')->get('Interest'); ?>: ${data.interest} ${currency}  </strong>`);
            }
            if (data.lifetime_status == '0') {
                $('.interestValidaty').html(`<strong>  <?php echo app('translator')->get('per'); ?> ${data.times} <?php echo app('translator')->get('hours'); ?> ,  ${data.repeat_time} <?php echo app('translator')->get('times'); ?></strong>`);
            } else {
                $('.interestValidaty').html(`<strong>  <?php echo app('translator')->get('per'); ?> ${data.times} <?php echo app('translator')->get('hours'); ?>,  <?php echo app('translator')->get('life time'); ?> </strong>`);
            }

            $('.planName').text(data.name);
            $('.plan_id').val(data.id);
        });



    })(jQuery);

</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/sections/plan.blade.php ENDPATH**/ ?>