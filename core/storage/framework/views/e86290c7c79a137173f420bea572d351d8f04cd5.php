<?php
    $latestDeposit = \App\Models\Deposit::with('user', 'gateway')->where('status', 1)->latest()->limit(10)->get();
    $fakeDeposit = \App\Models\Frontend::where('data_keys','transaction.element')->whereJsonContains('data_values->trx_type','deposit')->limit(10)->get();
    $deposits =  $latestDeposit->merge($fakeDeposit);
    $deposits = $deposits->sortByDesc('created_at')->take(10);


    $latestWithdraw = \App\Models\Withdrawal::with('user', 'method')->where('status', 1)->latest()->limit(10)->get();
    $fakeWithdraw = \App\Models\Frontend::where('data_keys','transaction.element')->whereJsonContains('data_values->trx_type','withdraw')->limit(10)->get();
    $withdrawals =  $latestWithdraw->merge($fakeWithdraw);
    $withdrawals = $withdrawals->sortByDesc('created_at')->take(10);
    $transactionContent = getContent('transaction.content',true);

?>
<section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$transactionContent->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$transactionContent->data_values->heading_c)); ?></b></h2>
              <p><?php echo e(__(@$transactionContent->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <ul class="nav nav-tabs custom--style-two justify-content-center" id="transactionTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="deposit-tab" data-toggle="tab" href="#deposit" role="tab" aria-controls="deposit" aria-selected="true"><?php echo app('translator')->get('Latest Deposit'); ?></a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab" aria-controls="withdraw" aria-selected="false"><?php echo app('translator')->get('Latest Withdraw'); ?></a>
              </li>
            </ul>

            <div class="tab-content mt-4" id="transactionTabContent">
              <div class="tab-pane fade show active" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                <div class="table-responsive--sm">
                  <table class="table style--two">
                    <thead>
                      <tr>
                        <th><?php echo app('translator')->get('Name'); ?></th>
                        <th><?php echo app('translator')->get('Date'); ?></th>
                        <th><?php echo app('translator')->get('Amount'); ?></th>
                        <th><?php echo app('translator')->get('Gateway'); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <?php if(@$data->data_values): ?>
                        <td data-label="<?php echo app('translator')->get('Name'); ?>">
                            <?php echo e(__(@$data->data_values->name)); ?>

                        </td>
                        <td data-label="<?php echo app('translator')->get('Date'); ?>"><?php echo e(@$data->data_values->date); ?></td>
                        <td data-label="<?php echo app('translator')->get('Amount'); ?>"><?php echo e(__($general->cur_sym)); ?> <?php echo e(@$data->data_values->amount); ?></td>
                        <td data-label="<?php echo app('translator')->get('Gateway'); ?>"><?php echo e(__(@$data->data_values->gateway)); ?></td>
                        <?php else: ?>
                          <td data-label="<?php echo app('translator')->get('Name'); ?>">
                              <?php echo app('translator')->get(@$data->user->fullname); ?>
                          </td>
                          <td data-label="<?php echo app('translator')->get('Date'); ?>"><?php echo e(showDateTime($data->created_at,'Y-m-d')); ?></td>
                          <td data-label="<?php echo app('translator')->get('Amount'); ?>"><?php echo e(__($general->cur_sym)); ?> <?php echo e(getAmount($data->amount)); ?></td>
                          <td data-label="<?php echo app('translator')->get('Gateway'); ?>"><?php echo e(__($data->gateway->name)); ?></td>
                        <?php endif; ?>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                <div class="table-responsive--md">
                  <table class="table style--two">
                    <thead>
                      <tr>
                        <th scope="col"><?php echo app('translator')->get('Name'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Date'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Method'); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <?php if(@$data->data_values): ?>
                        <td data-label="<?php echo app('translator')->get('Name'); ?>">
                            <?php echo e(__(@$data->data_values->name)); ?>

                        </td>
                        <td data-label="<?php echo app('translator')->get('Date'); ?>"><?php echo e(@$data->data_values->date); ?></td>
                        <td data-label="<?php echo app('translator')->get('Amount'); ?>"><?php echo e(__($general->cur_sym)); ?> <?php echo e(@$data->data_values->amount); ?></td>
                        <td data-label="<?php echo app('translator')->get('Method'); ?>"><?php echo e(__(@$data->data_values->gateway)); ?></td>
                        <?php else: ?>
                          <td data-label="<?php echo app('translator')->get('Name'); ?>">
                              <?php echo app('translator')->get(@$data->user->fullname); ?>
                          </td>
                          <td data-label="<?php echo app('translator')->get('Date'); ?>"><?php echo e(showDateTime($data->created_at,'Y-m-d')); ?></td>
                          <td data-label="<?php echo app('translator')->get('Amount'); ?>"><?php echo e(__($general->cur_sym)); ?> <?php echo e(getAmount($data->amount)); ?></td>
                          <td data-label="<?php echo app('translator')->get('Method'); ?>"><?php echo e(__($data->method->name)); ?></td>
                        <?php endif; ?>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- tab-content end -->
          </div>
        </div>
      </div>
    </section><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/sections/transaction.blade.php ENDPATH**/ ?>