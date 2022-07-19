@extends($activeTemplate.'user.dashboard.master')
@section('content')

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

                            <div class="accordion accordion-flush" id="faq-group-2">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                                          Investment – Starter Portfolio <span class="offset-3">$24,242.00</span>
                                          <span> &nbsp;&nbsp;Jul 4, 2022</span>
                                       </button>
                                    </h2>
                                    <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
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
                                                                <th scope="row">G2968851</th>
                                                                <td>Jul 4, 2022</td>
                                                                <td>abc 6702 (Checking)</td>
                                                                <td><button type="button" class="btn btn-sm bg-transparent" data-bs-toggle="modal" data-bs-target="#verticalycentered">
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
                                                                <td>$24,242.00</td>



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

                                    <div class="modal fade" id="verticalycentered" tabindex="-1">
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

                        </div>
                    </div>
                    <!-- End F.A.Q Group 2 -->



                </div>

                <div class="col-lg-3">

                    <div class="card-body pb-0">
                        <h5 class="card-title"> <span> Your portfolio</span> | $24,242.00 </h5>

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
@endsection
