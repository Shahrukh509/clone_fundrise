<?php
  $calculationCaption = getContent('calculation.content',true);
  $planList = \App\Models\Plan::where('status', 1)->latest()->get();
?>
<section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-header text-center">
              <h2 class="section-title"><span class="font-weight-normal"><?php echo e(__(@$calculationCaption->data_values->heading_w)); ?></span> <b class="base--color"><?php echo e(__(@$calculationCaption->data_values->heading_c)); ?></b></h2>
              <p><?php echo e(__(@$calculationCaption->data_values->sub_heading)); ?></p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="profit-calculator-wrapper">
              <form class="profit-calculator">
                <div class="row">
                  <div class="col-lg-6">
                    <label><?php echo app('translator')->get('Choose Plan'); ?></label>
                    <select class="base--bg" id="changePlan">
                      <?php $__currentLoopData = $planList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>" ><?php echo e($data->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="col-lg-6">
                    <label><?php echo app('translator')->get('Invest Amount'); ?></label>
                    <input type="text" name="#0" id="#0" placeholder="0.00" class="form-control base--bg invest-input" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                  </div>
                  <div class="col-lg-12">
                    <label><?php echo app('translator')->get('Profit Amount'); ?></label>
                    <input type="text" class="form-control base--bg profit-input" disabled>
                    <code class="period"></code>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $("#changePlan").on('change', function () {
                    var planId = $("#changePlan option:selected").val();
                    var investAmount = $('.invest-input').val();
                    var profitInput = $('.profit-input').val('');

                    $('.period').text('');

                    if (investAmount != '' && planId != null) {
                        ajaxPlanCalc(planId, investAmount)
                    }
                });

                $(".invest-input").on('change', function () {
                    var planId = $("#changePlan option:selected").val();
                    var investAmount = $(this).val();
                    var profitInput = $('.profit-input').val('');
                    $('.period').text('');
                    if (investAmount != '' && planId != null) {
                        ajaxPlanCalc(planId, investAmount)
                    }
                });
            });
          function ajaxPlanCalc(planId, investAmount) {
              $.ajax({
                  url: "<?php echo e(route('planCalculator')); ?>",
                  type: "post",
                  data: {
                      planId,
                      investAmount
                  },
                  success: function (response) {
                      var alertStatus = "<?php echo e($general->alert); ?>";
                      if (response.errors) {
                          iziToast.error({message: response.errors, position: "topRight"});
                      }else{
                          var msg = `${response.description}`
                          $('.profit-input').val(msg);
                          if(response.netProfit){
                              $('.period').text('Net Profit '+response.netProfit);
                          }
                      }
                  }
              });
          }
        })(jQuery);

    </script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/sections/calculation.blade.php ENDPATH**/ ?>