<?php $__env->startSection('panel'); ?>
    <?php if($general->sys_version): ?>
        <div class="row">
            <div class="col-md-12">

                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">
                        <h3 class="card-title"> <?php echo app('translator')->get('New Version Available'); ?>
                            <button class="btn btn--dark float-right"><?php echo app('translator')->get('Version'); ?> <?php echo e(json_decode($general->sys_version)->version); ?></button>
                        </h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?php echo app('translator')->get('What is the Update?'); ?></h5>
                        <p>
                        <pre class="font-20"><?php echo e(json_decode($general->sys_version)->details); ?></pre>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mb-none-30">
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--4 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e($widget['total_users']); ?></span>
                    </div>
                    <div class="desciption">
                        <span class="text--small"><?php echo app('translator')->get('Total Users'); ?></span>
                    </div>
                    <a href="<?php echo e(route('admin.users.all')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--8 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e($widget['verified_users']); ?></span>
                    </div>
                    <div class="desciption">
                        <span class="text--small"><?php echo app('translator')->get('Total Verified Users'); ?></span>
                    </div>
                    <a href="<?php echo e(route('admin.users.active')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--red b-radius--10 box-shadow ">
                <div class="icon">
                    <i class="la la-ban"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e($widget['email_unverified_users']); ?></span>
                    </div>
                    <div class="desciption">
                        <span class="text--small"><?php echo app('translator')->get('Total Email Unverified Users'); ?></span>
                    </div>

                    <a href="<?php echo e(route('admin.users.emailUnverified')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--9 b-radius--10 box-shadow ">
                <div class="icon">
                    <i class="la la-ban"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e($widget['sms_unverified_users']); ?></span>
                    </div>
                    <div class="desciption">
                        <span class="text--small"><?php echo app('translator')->get('Total SMS Unverified Users'); ?></span>
                    </div>

                    <a href="<?php echo e(route('admin.users.smsUnverified')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->


        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--2 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-wallet"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e(@number_format($totalDepositWallet,2)); ?></span>
                        <span class="currency-sign"><?php echo e($general->cur_sym); ?></span>
                    </div>
                    <div class="desciption">
                        <span class="text--small"><?php echo app('translator')->get('User Deposit Wallet'); ?> </span>
                    </div>

                    <a href="<?php echo e(route('admin.users.deposit.balance')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--3 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-dollar-sign"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e(@number_format($totalInterestWallet,2)); ?></span>
                        <span class="currency-sign"><?php echo e(trans($general->cur_sym)); ?></span>
                    </div>
                    <div class="desciption">
                        <span class="text--small"><?php echo app('translator')->get('User Interest Wallet'); ?></span>
                    </div>

                    <a href="<?php echo e(route('admin.users.interest.balance')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
 

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--17 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-clipboard-check"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e($totalPlan); ?></span>
                    </div>
                    <div class="desciption">
                        <span class="text--small"><?php echo app('translator')->get('Total Plan'); ?></span>
                    </div>
                    <a href="<?php echo e(route('admin.plan-setting')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--11 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-hand-holding-usd"></i>
                </div>
                <div class="details">
                    <div class="numbers">

                        <span class="amount"><?php echo e(number_format($totalInvest,2)); ?></span>
                        <span class="currency-sign"><?php echo e($general->cur_sym); ?></span>
                    </div>
                    <div class="desciption">
                        <span class="text--small"><?php echo app('translator')->get('Total Investment'); ?></span>
                    </div>
                    <a href="<?php echo e(route('admin.report.plan')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
    </div><!-- row end-->


    <div class="row mt-50 mb-none-30">
        <div class="col-xl-6 mb-30">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo app('translator')->get('Monthly Deposit & Withdraw Report'); ?></h5>
                    <div id="apex-bar-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-30">
            <div class="row mb-none-30">
                <div class="col-lg-6 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--primary box--shadow2">
                            <i class="las la-wallet "></i>
                        </div>
                        <div class="widget-three__content">
                            <h2 class="numbers"><?php echo e($payment['total_deposit']); ?></h2>
                            <p class="text--small"><?php echo app('translator')->get('Total Deposit'); ?></p>
                        </div>
                    </div><!-- widget-two end -->
                </div>
                <div class="col-lg-6 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--pink  box--shadow2">
                            <i class="las la-money-bill "></i>
                        </div>
                        <div class="widget-three__content">
                            <h2 class="numbers"><?php echo e(getAmount($payment['total_deposit_amount'])); ?> <?php echo e(trans($general->cur_text)); ?></h2>
                            <p class="text--small"><?php echo app('translator')->get('Total Deposit Amount'); ?></p>
                        </div>
                    </div><!-- widget-two end -->
                </div>
                <div class="col-lg-6 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--teal box--shadow2">
                            <i class="las la-money-check"></i>
                        </div>
                        <div class="widget-three__content">
                            <h2 class="numbers"><?php echo e(getAmount($payment['total_deposit_charge'])); ?> <?php echo e(trans($general->cur_text)); ?></h2>
                            <p class="text--small"><?php echo app('translator')->get('Total Deposit Charge'); ?></p>
                        </div>
                    </div><!-- widget-two end -->
                </div>
                <div class="col-lg-6 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--green  box--shadow2">
                            <i class="las la-money-bill-wave "></i>
                        </div>
                        <div class="widget-three__content">
                            <h2 class="numbers"><?php echo e($payment['total_deposit_pending']); ?></h2>
                            <p class="text--small"><?php echo app('translator')->get('Pending Deposit'); ?></p>
                        </div>
                    </div><!-- widget-two end -->
                </div>
            </div>
        </div>
    </div><!-- row end -->


    <div class="row mt-50 mb-none-30">
        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--4 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-wallet"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e($paymentWithdraw['total_withdraw']); ?></span>
                    </div>
                    <div class="desciption">
                        <span><?php echo app('translator')->get('Total Withdraw'); ?></span>
                    </div>
                    <a href="<?php echo e(route('admin.withdraw.method.index')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--7 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-hand-holding-usd"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e(getAmount($paymentWithdraw['total_withdraw_amount'])); ?></span>
                        <span class="currency-sign"><?php echo e($general->cur_text); ?></span>
                    </div>
                    <div class="desciption">
                        <span><?php echo app('translator')->get('Total Withdraw Amount'); ?></span>
                    </div>
                    <a href="<?php echo e(route('admin.withdraw.approved')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--9 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-money-bill-alt"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e(getAmount($paymentWithdraw['total_withdraw_charge'])); ?> </span>
                        <span class="currency-sign"><?php echo e(trans($general->cur_text)); ?></span>
                    </div>
                    <div class="desciption">
                        <span><?php echo app('translator')->get('Total Withdraw Charge'); ?></span>
                    </div>

                    <a href="<?php echo e(route('admin.withdraw.approved')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--primary b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-spinner"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount"><?php echo e($paymentWithdraw['total_withdraw_pending']); ?></span>
                    </div>
                    <div class="desciption">
                        <span><?php echo app('translator')->get('Withdraw Pending'); ?></span>
                    </div>
                    <a href="<?php echo e(route('admin.withdraw.pending')); ?>"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-none-30 mt-5">

        <div class="col-xl-6 mb-30">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo app('translator')->get('Last 30 days Deposit History'); ?></h5>
                    <div id="deposit-line"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 mb-30">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo app('translator')->get('Last 30 days Withdraw History'); ?></h5>
                    <div id="withdraw-line"></div>
                </div>
            </div>
        </div>


    </div>



    <!-- Alert -->
<div class="modal fade" id="cronModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo app('translator')->get('Cron Job Setting Instruction'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="text--danger text-center"><?php echo app('translator')->get('Please Set Cron Job Now'); ?></h3>
        <p class="lead">
            <?php echo app('translator')->get('To automate the return interest, we need to set the cron job and make sure the cron job is running properly. Set the Cron time as minimum as possible. Once per 5-15 minutes is ideal while once every minute is the best option.'); ?> </p>

            <label class="font-weight-bold"><?php echo app('translator')->get('Cron Command'); ?></label>
                            <div class="input-group">
                                <input type="text" name="text" class="form-control form-control-lg" id="referralURL"
                                       value="curl -s <?php echo e(route('cron')); ?>" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text copytext btn--primary copyBoard" id="copyBoard"
                                          > <?php echo app('translator')->get('Copy'); ?> </span>
                                </div>
                            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>

<span class=" <?php if(Carbon\Carbon::parse($general->last_cron)->diffInSeconds() < 300): ?>
    text--info
    <?php elseif(Carbon\Carbon::parse($general->last_cron)->diffInSeconds() < 900): ?>
    text--warning
    <?php else: ?>
    text--danger
    <?php endif; ?> "><?php echo app('translator')->get('Last Cron Run'); ?> <strong><?php echo e(diffForHumans($general->last_cron)); ?></strong></span>       
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

    <script src="<?php echo e(asset('assets/admin/js/vendor/apexcharts.min.js')); ?>"></script>


    <script>
        $(function ($) {
            "use strict";
            // apex-bar-chart js
            var options = {
                series: [{
                    name: 'Total Deposit',
                    data: <?php echo json_encode($report['deposit_month_amount']->flatten(), 15, 512) ?>
                }, {
                    name: 'Total Withdraw',
                    data: <?php echo json_encode($report['withdraw_month_amount']->flatten(), 15, 512) ?>
                }],
                chart: {
                    type: 'bar',
                    height: 400,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '50%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: <?php echo json_encode($report['months']->flatten(), 15, 512) ?>,
                },
                yaxis: {
                    title: {
                        text: "<?php echo e($general->cur_sym); ?>",
                        style: {
                            color: '#7c97bb'
                        }
                    }
                },
                grid: {
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "<?php echo e($general->cur_sym); ?>" + val + " "
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
            chart.render();


            // apex-line chart
            var options = {
                chart: {
                    height: 430,
                    type: "area",
                    toolbar: {
                        show: false
                    },
                    dropShadow: {
                        enabled: true,
                        enabledSeries: [0],
                        top: -2,
                        left: 0,
                        blur: 10,
                        opacity: 0.08
                    },
                    animations: {
                        enabled: true,
                        easing: 'linear',
                        dynamicAnimation: {
                            speed: 1000
                        }
                    },
                },
                dataLabels: {
                    enabled: false
                },
                series: [
                    {
                        name: "Series 1",
                        data: <?php echo json_encode($withdrawals['per_day_amount']->flatten(), 15, 512) ?>
                    }
                ],
                fill: {
                    type: "gradient",
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.9,
                        stops: [0, 90, 100]
                    }
                },
                xaxis: {
                    categories: <?php echo json_encode($withdrawals['per_day']->flatten(), 15, 512) ?>
                },
                grid: {
                    padding: {
                        left: 5,
                        right: 5
                    },
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                },
            };
            var chart = new ApexCharts(document.querySelector("#withdraw-line"), options);
            chart.render();

             // apex-line chart
            var options = {
                chart: {
                    height: 430,
                    type: "area",
                    toolbar: {
                        show: false
                    },
                    dropShadow: {
                        enabled: true,
                        enabledSeries: [0],
                        top: -2,
                        left: 0,
                        blur: 10,
                        opacity: 0.08
                    },
                    animations: {
                        enabled: true,
                        easing: 'linear',
                        dynamicAnimation: {
                            speed: 1000
                        }
                    },
                },
                 colors: ['#00E396', '#0090FF'],
                dataLabels: {
                    enabled: false
                },
                series: [
                    {
                        name: "Series 1",
                        data: <?php echo json_encode($deposits['per_day_amount']->flatten(), 15, 512) ?>
                    }
                ],
                fill: {
                    type: "gradient",
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.9,
                        stops: [0, 90, 100]
                    }
                },
                xaxis: {
                    categories: <?php echo json_encode($deposits['per_day']->flatten(), 15, 512) ?>
                },
                grid: {
                    padding: {
                        left: 5,
                        right: 5
                    },
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#deposit-line"), options);
            chart.render();

            <?php if(Carbon\Carbon::parse($general->last_cron)->diffInMinutes() > 15): ?>
            $('#cronModal').modal('show');
            <?php endif; ?>

            $('.copyBoard').click(function(){
                var copyText = document.getElementById("referralURL");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                /*For mobile devices*/
                document.execCommand("copy");
                iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>