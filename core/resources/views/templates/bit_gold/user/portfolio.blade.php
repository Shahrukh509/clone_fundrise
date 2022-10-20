@extends($activeTemplate.'user.dashboard.master')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Portfolio</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">Portfolio</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-7">
                    <div class="row">

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Positions</h5>

                                    <table class="table table-sm">
                                        <thead>
                                            <tr>

                                                <th scope="col">Name</th>
                                                <th scope="col">% of portfolio</th>
                                                <th scope="col">Cost basis</th>
                                                <th scope="col">Est. value</th>
                                                <th scope="col">Position total
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>{{ Auth()->user()->firstname }}</td>
                                                <td>100.0%</td>
                                                <td>$0.00</td>
                                                <td>$0.00</td>
                                                <td>$110.00</td>
                                            </tr>
                                            <tr>

                                                <td>Portfolio total</td>
                                                <td>100.0%</td>
                                                <td>$0.00</td>
                                                <td>$0.00</td>
                                                <td>${{ $contribution }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- End small tables -->

                                </div>

                            </div>
                        </div>



                    </div>


                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-5">

                    <!-- Website Traffic -->
                    <div class="card cards_txt">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown">
                                <i class="bi bi-gear bx-pull-left"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title"> <span> Your portfolio</span> | ${{ $contribution }} </h5>

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>


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
                                                show: true,
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
                                                name: 'Your Portfolio | ${{ $contribution }}'
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
                <!-- End Right side columns -->

                <div class="col-lg-12">
                    <div class="card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Projects</h5>

                            <div class="container p-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="float-left">58 projects</h2>


                                        <div class="btn-group float-right">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label id="list" class="btn btn-outline-dark active">
                          <input type="radio" name="layout" id="layout1" checked> List
                        </label>
                                                <label id="grid" class="btn btn-outline-dark">
                          <input type="radio" name="layout" id="layout2"> Grid
                        </label>
                                                <label id="map" class="btn btn-outline-dark">
                          <input type="radio" name="layout3" id="layout3"> map
                        </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-3 pt-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Strategy</option>
                                            <option value="1">Recently Required</option>
                                            <option value="2">Investment Size</option>
                                            <option value="3">strategy</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="posts" class="row mt-4" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                    <div class="view d-content">
                                        <div class="item col-12 mb-3">
                                            <div class="card rounded shadow border-0">
                                                <a href="#">
                                                    <img class="w-100 d-none" style="height: 300px; object-fit: cover; border-top-right-radius: 5px; border-top-left-radius: 5px;" src="https://images.unsplash.com/photo-1572376313139-2d2c6ff7de20?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=648&q=80"
                                                        alt="" />
                                                </a>
                                                <div class="card-body p-3">
                                                    <a href="#" class="text-dark">
                                                        <h4>Single-family rental</h4>
                                                    </a>
                                                    <p class="text-muted small">Jacksonville, FL • Growth eREIT VII, Flagship Real Estate Fund
                                                    </p>
                                                    <div class="row">
                                                        <div class="col">
                                                            <small>STRATEGY <br> Core Plus </small>

                                                        </div>
                                                        <div class="col">

                                                            <small class="ml-2">Size <br>$31,924,000</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-12 mb-3">
                                            <div class="card rounded shadow border-0">
                                                <a href="#">
                                                    <img class="w-100 d-none" style="height: 300px; object-fit: cover; border-top-right-radius: 5px; border-top-left-radius: 5px;" src="https://images.unsplash.com/photo-1572376313139-2d2c6ff7de20?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=648&q=80"
                                                        alt="" />
                                                </a>
                                                <div class="card-body p-3">
                                                    <a href="#" class="text-dark">
                                                        <h4>Single-family rental</h4>
                                                    </a>
                                                    <p class="text-muted small">Jacksonville, FL • Growth eREIT VII, Flagship Real Estate Fund
                                                    </p>
                                                    <div class="row">
                                                        <div class="col">
                                                            <small>STRATEGY <br> Core Plus </small>

                                                        </div>
                                                        <div class="col">

                                                            <small class="ml-2">Size <br>$31,924,000</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="map d-none">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12425.116227899225!2d-77.0562669!3d38.8718568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf83d0f8c013532f!2sThe%20Pentagon!5e0!3m2!1sen!2sus!4v1657111464483!5m2!1sen!2sus" width="600" height="450"
                                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>


            </div>
        </section>

    </main>


    <!-- Vertically centered Modal -->

    <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content my_modal">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item mb-3 col-12">
                                <div class="card rounded shadow border-0">
                                    <a href="#">
                                        <img class="w-100" style="height: 300px; object-fit: cover; border-top-right-radius: 5px; border-top-left-radius: 5px;" src="https://images.unsplash.com/photo-1572376313139-2d2c6ff7de20?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=648&amp;q=80"
                                            alt="">
                                    </a>
                                    <div class="card-body p-3">
                                        <a href="#" class="text-dark">
                                            <h4>Single-family rental</h4>
                                        </a>
                                        <p class="text-muted small">Jacksonville, FL • Growth eREIT VII, Flagship Real Estate Fund
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <small>STRATEGY <br> Core Plus </small>

                                            </div>
                                            <div class="col">

                                                <small class="ml-2">Size <br>$31,924,000</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Vertically centered Modal-->
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>

    </footer> -->
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
@endsection
