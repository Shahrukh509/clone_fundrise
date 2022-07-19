@extends($activeTemplate.'user.dashboard.master')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Performance
            </h1>
            <!-- <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav> -->
        </div>
        <!-- End Page Title -->

        <section class="section">

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
                                    <h5 class="card-title">Year to date returns

                                    </h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div>
                        <!-- End Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Annual returns</h5>

                                    <!-- Stacked Bar Chart -->
                                    <canvas id="stakedBarChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 206px; width: 413px;" width="826" height="412"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new Chart(document.querySelector('#stakedBarChart'), {
                                                type: 'bar',
                                                data: {
                                                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                                    datasets: [{
                                                        label: 'Dataset 1',
                                                        data: [-75, -15, 18, 48, 74],
                                                        backgroundColor: 'rgb(255, 99, 132)',
                                                    }, {
                                                        label: 'Dataset 2',
                                                        data: [-11, -1, 12, 62, 95],
                                                        backgroundColor: 'rgb(75, 192, 192)',
                                                    }, {
                                                        label: 'Dataset 3',
                                                        data: [-44, -5, 22, 35, 62],
                                                        backgroundColor: 'rgb(255, 205, 86)',
                                                    }, ]
                                                },
                                                options: {
                                                    plugins: {
                                                        title: {
                                                            display: true,
                                                            text: 'Chart.js Bar Chart - Stacked'
                                                        },
                                                    },
                                                    responsive: true,
                                                    scales: {
                                                        x: {
                                                            stacked: true,
                                                        },
                                                        y: {
                                                            stacked: true
                                                        }
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Stacked Bar Chart -->

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
                            <h5 class="card-title"> <span> Your portfolio</span> | $24,242.00 </h5>

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
                    <!-- End Website Traffic -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Account value
                            </h5>

                            <!-- Pie Chart -->
                            <canvas id="pieChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 413px;" width="826" height="800"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#pieChart'), {
                                        type: 'pie',
                                        data: {
                                            labels: [
                                                'Red',
                                                'Blue',
                                                'Yellow'
                                            ],
                                            datasets: [{
                                                label: 'My First Dataset',
                                                data: [300, 50, 100],
                                                backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(255, 205, 86)'
                                                ],
                                                hoverOffset: 4
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Pie CHart -->

                        </div>
                    </div>


                </div>
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
