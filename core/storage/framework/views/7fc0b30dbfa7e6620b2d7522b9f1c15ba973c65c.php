<?php $__env->startSection('content'); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Transactions
            </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <!-- <li class="breadcrumb-item">Pages</li> -->
                    <li class="breadcrumb-item active">Transactions</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section faq">
            <div class="row">

                <div class="col-lg-9">

                    <!-- F.A.Q Group 2 -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pending </h5>
                              <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="accordion accordion-flush" id="faq-group-2">
                               
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1-<?php echo e($key); ?>" type="button" data-bs-toggle="collapse">
                                          Investment – <?php echo e($plan->questionnaire_answers->options); ?>

                                          <strong class="offset-5">$<?php echo e($plan->amount); ?></strong>

                                          
                                       </button>
                                       <span style="font-size:1rem">&nbsp;<?php echo e($plan->created_at->format('M D, Y')); ?></span>

                                    </h2>
                                    <div id="faqsTwo-1-<?php echo e($key); ?>" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                        <div class="accordion-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- <h5 class="card-title">Default Table</h5> -->

                                                    <!-- Default Table -->
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Order #</th>
                                                                <th scope="col">Order placed</th>
                                                                <th scope="col">Payment method</th>
                                                                <th scope="col">Edit</th>
                                                                <th scope="col">Cancle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"><?php echo e($plan->id); ?></th>
                                                                <td><?php echo e($plan->created_at->format('M D , Y')); ?></td>
                                                                <td><?php echo e($plan->bankdetails->name); ?>&nbsp; <?php echo e(substr($plan->bankdetails->account_number,0,5)); ?> &nbsp; (<?php echo e($plan->bankdetails->account_type); ?>)</td>
                                                                <td><button type="button" class="btn btn-sm bg-transparent" data-bs-toggle="modal" data-bs-target="#verticalycentered-<?php echo e($key); ?>">
                                                                  Edit
                                                                </button></td>
                                                                <td><button type="button" class="btn btn-link">Cancel</button></td>

                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <!-- End Default Table Example -->

                                                    <!-- Default Table -->
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Quantity</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">&nbsp;</th>
                                                                <th scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Flagship Real Estate Fund</th>
                                                                <td>--</td>
                                                                <td>--</td>
                                                                <td></td>
                                                                <td>$<?php echo e($plan->amount); ?></td>



                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <!-- End Default Table Example -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="card">
                                <div class="card-body">



                                    <!-- Vertically centered Modal -->

                                    <div class="modal fade" id="verticalycentered-<?php echo e($key); ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit bank account</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Because your order is still pending, you can update the associated bank account. Changing the associated bank account may delay the completion of your order.

                                                    <div class="col-sm-10 py-2">
                                                        <select class="form-select" aria-label="Default select example">
                                                        <option selected="">abc bank</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Vertically centered Modal-->

                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                    <!-- End F.A.Q Group 2 -->



                </div>

                <div class="col-lg-3">

                    <div class="card-body pb-0">
                        <h5 class="card-title"> <span> Your portfolio</span> | $<?php echo e($contribution); ?></h5>

                        <div id="trafficChart" style="min-height: 400px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" class="echart" _echarts_instance_="ec_1657708039491">
                            <div style="position: relative; width: 309px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                                <canvas data-zr-dom-id="zr_0" width="618" height="800" style="position: absolute; left: 0px; top: 0px; width: 309px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                            </div>
                            <div class=""></div>
                        </div>


                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                            value: 1048,
                                            name: 'Search Engine'
                                        }, {
                                            value: 735,
                                            name: 'Direct'
                                        }, {
                                            value: 580,
                                            name: 'Email'
                                        }, {
                                            value: 484,
                                            name: 'Union Ads'
                                        }, {
                                            value: 300,
                                            name: 'Video Ads'
                                        }]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div>

            </div>
        </section>



    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'user.dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/user/transactions.blade.php ENDPATH**/ ?>