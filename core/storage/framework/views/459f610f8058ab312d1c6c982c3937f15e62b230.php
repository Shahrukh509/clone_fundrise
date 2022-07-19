<?php $__env->startSection('panel'); ?>
    <div class="row mb-none-30">
        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>


                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold"> <?php echo app('translator')->get('Site Title'); ?> </label>
                                    <input class="form-control form-control-lg" type="text" name="sitename"
                                           value="<?php echo e($general->sitename); ?>">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('Currency'); ?></label>
                                    <input class="form-control  form-control-lg" type="text" name="cur_text"
                                           value="<?php echo e($general->cur_text); ?>">
                                </div>
                            </div>


                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('Currency Symbol'); ?> </label>
                                    <input class="form-control  form-control-lg" type="text" name="cur_sym"
                                           value="<?php echo e($general->cur_sym); ?>">
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <label class="form-control-label font-weight-bold"> <?php echo app('translator')->get('Site Base Color'); ?></label>
                                <div class="input-group">
                                <span class="input-group-addon ">
                                    <input type='text' class="form-control  form-control-lg colorPicker"
                                           value="<?php echo e($general->base_color); ?>"/>
                                </span>
                                    <input type="text" class="form-control form-control-lg colorCode" name="base_color"
                                           value="<?php echo e($general->base_color); ?>"/>
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <label class="form-control-label font-weight-bold"> <?php echo app('translator')->get('Site Secondary Color'); ?></label>
                                <div class="input-group">
                                <span class="input-group-addon">
                                    <input type='text' class="form-control form-control-lg colorPicker"
                                           value="<?php echo e($general->secondary_color); ?>"/>
                                </span>
                                    <input type="text" class="form-control form-control-lg colorCode"
                                           name="secondary_color"
                                           value="<?php echo e($general->secondary_color); ?>"/>
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('User Registration'); ?></label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success"
                                       data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disabled"
                                       name="registration" <?php if($general->registration): ?> checked <?php endif; ?>>
                            </div>


                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('Balance Transfer Fixed Charge'); ?> </label>
                                    <div class="input-group">
                                        <input class="form-control  form-control-lg" type="text" name="f_charge"
                                           value="<?php echo e(getAmount($general->f_charge)); ?>">
                                           <div class="input-group-append">
                                               <span class="input-group-text"><?php echo e($general->cur_text); ?></span>
                                           </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('Balance Transfer Percent Charge'); ?> </label>
                                    <div class="input-group">
                                        <input class="form-control  form-control-lg" type="text" name="p_charge"
                                           value="<?php echo e(getAmount($general->p_charge)); ?>">
                                           <div class="input-group-append">
                                               <span class="input-group-text">%</span>
                                           </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('Balance Transfer'); ?></label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success"
                                       data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disabled"
                                       name="b_transfer" <?php if($general->b_transfer): ?> checked <?php endif; ?>>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('SIGN UP Bonus Amount'); ?> </label>
                                    <div class="input-group">
                                        <input class="form-control  form-control-lg" type="text" name="signup_bonus_amount"
                                           value="<?php echo e($general->signup_bonus_amount); ?>">
                                           <div class="input-group-append">
                                               <span class="input-group-text"><?php echo e($general->cur_text); ?></span>
                                           </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('SIGN UP Bonus Control'); ?></label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success"
                                       data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disabled"
                                       name="signup_bonus_control" <?php if($general->signup_bonus_control): ?> checked <?php endif; ?>>
                            </div>



                        </div>

                        <div class="row">
                            <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                <label class="form-control-label font-weight-bold"> <?php echo app('translator')->get('Email Verification'); ?></label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success"
                                       data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disable"
                                       name="ev" <?php if($general->ev): ?> checked <?php endif; ?>>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('Email Notification'); ?></label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success"
                                       data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disable"
                                       name="en" <?php if($general->en): ?> checked <?php endif; ?>>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                <label class="form-control-label font-weight-bold"> <?php echo app('translator')->get('SMS Verification'); ?></label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success"
                                       data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disable"
                                       name="sv" <?php if($general->sv): ?> checked <?php endif; ?>>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                <label class="form-control-label font-weight-bold"><?php echo app('translator')->get('SMS Notification'); ?></label>
                                <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success"
                                       data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disable"
                                       name="sn" <?php if($general->sn): ?> checked <?php endif; ?>>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn--primary btn-block btn-lg"><?php echo app('translator')->get('Update'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-lib'); ?>
    <script src="<?php echo e(asset('assets/admin/js/spectrum.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/spectrum.css')); ?>">
<?php $__env->stopPush(); ?>


<?php $__env->startPush('style'); ?>
    <style>
        .sp-replacer {
            padding: 0;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 5px 0 0 5px;
            border-right: none;
        }

        .sp-preview {
            width: 100px;
            height: 46px;
            border: 0;
        }

        .sp-preview-inner {
            width: 110px;
        }

        .sp-dd {
            display: none;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function () {
            "use strict";

            $('.colorPicker').spectrum({
                color: $(this).data('color'),
                change: function (color) {
                    $(this).parent().siblings('.colorCode').val(color.toHexString().replace(/^#?/, ''));
                }
            });

            $('.colorCode').on('input', function () {
                var clr = $(this).val();
                $(this).parents('.input-group').find('.colorPicker').spectrum({
                    color: clr,
                });
            });

        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/admin/setting/general_setting.blade.php ENDPATH**/ ?>