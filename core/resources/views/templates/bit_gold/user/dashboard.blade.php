@extends($activeTemplate.'user.dashboard.master')
@section('content')
  <main id="main" class="main">
   <div class="pagetitle">
      <button type="button" class="btn btn-warning rounded-pill bx-pull-right text-white" data-bs-toggle="modal" data-bs-target="#verticalycentered">Add Funds </button>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
         </ol>
      </nav>
   </div>
   <!-- End Page Title -->
   <section class="section dashboard py-3">
      <div class="row">
         <!-- Sales Card -->
         <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
               <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                  <h5 class="card-title">Investment</span>
                  </h5>
                  <div class="d-flex align-items-center">
                     <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                     </div>
                     <div class="ps-3">
                        <h6>{{ $contribution }}</h6>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Sales Card -->
         <!-- Revenue Card -->
         <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">
               <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                  <h5 class="card-title">Net returns to date</span>
                  </h5>
                  <div class="d-flex align-items-center">
                     <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                     </div>
                     <div class="ps-3">
                        <h6>$3,264</h6>
                        <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Revenue Card -->
         <!-- Customers Card -->
         <div class="col-xxl-4 col-md-4 ">
            <div class="card info-card customers-card">
               <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                  <h5 class="card-title">Account level</span>
                  </h5>
                  <div class="d-flex align-items-center">
                     <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                     </div>
                     <div class="ps-3">
                        <h6>Starter</h6>
                        <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Customers Card -->
      </div>
      <div class="row">
         <!-- Left side columns -->
         <div class="col-lg-7">
            <div class="row">
               <!-- Reports -->
               <div class="col-12">
                  <div class="card">
                     <div class="filter">
                        <span><a href="#"> <i class="bi bi-calendar-check-fill"></i> &nbsp; Create a goal</a></span>
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
                        <h5 class="card-title">Historical account value
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
               <!-- Top Selling -->
               <div class="col-12">
                  <div class="card top-selling overflow-auto">
                     <div class="card-body pb-0">
                        <div class="col-lg-12 col-md-4">
                           <div class=" info-card sales-card">
                              <div class="card-body">
                                 <h5 class="card-title">Action required: invalid address
                                 </h5>
                                 <div class="d-flex align-items-center">
                                    <p>We are unable to process your order as your current address on record is invalid. Please update your address.</p>
                                 </div>
                                 <div><a href="# " class="text-danger">UPDATE ADDRESS</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-4">
                           <div class=" info-card sales-card">
                              <div class="card-body">
                                 <h5 class="card-title">Action required: your order is on hold
                                 </h5>
                                 <div class="d-flex align-items-center">
                                    <p>
                                       We’re sorry, but there's an issue regarding your recent order (#2968851). Please check your email for more information or contact our Investor Relations team for support. 
                                    </p>
                                 </div>
                                 <div><a href="# " class="text-danger">CONTACT SUPPORT</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-4">
                           <div class=" info-card sales-card">
                              <div class="card-body">
                                 <h5 class="card-title">Finish account setup
                                 </h5>
                                 <h5 class="card-title">Improve your account strength
                                 </h5>
                                 <div class="d-flex align-items-center">
                                    <p>
                                       Next steps: verify your mobile number
                                    </p>
                                 </div>
                                 <small>Time to complete: 30s</small>
                                 <div><a href="# " class="text-danger bx-pull-right">VIEW CHECKLIST</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Top Selling -->
               <!-- new sec -->
               <!-- Top Selling -->
               <div class="col-12">
                  <div class="card my_class overflow-auto">
                     <div class=" pb-0">
                        <div class="col-lg-12 col-md-4">
                           <div class=" info-card sales-card">
                              <h5 class="card-title p-lg-3"> <i class="bi bi-grid"></i> New investor guide <span> <small>6</small></span></h5>
                              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                 <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">What to Expect From Fundrise
                                                   </h5>
                                                   <p class="card-text">A message from Fundrise CEO, Ben Miller
                                                   </p>
                                                   <a href="#" class="btn btn-primary bg-transparent text-black">watch video</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">Real estate investing guide</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary bg-transparent text-black">watch video</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="carousel-item ">
                                       <div class="row">
                                          <div class="col-sm-6 gx-1 my_img">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">What to Expect From Fundrise</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary bg-transparent text-black">watch video</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6 gx-1 my_img">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">What to Expect From Fundrise</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary bg-transparent text-black">watch video</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Previous</span>
                                 </button>
                                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Next</span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Top Selling -->
               <!-- Top Selling -->
               <div class="col-12">
                  <div class="card my_class overflow-auto">
                     <div class=" pb-0">
                        <div class="col-lg-12 col-md-4">
                           <div class=" info-card sales-card">
                              <h5 class="card-title p-lg-3"> <i class="bi bi-grid"></i> Spotlight <span>
                                 <small>3</small></span>
                              </h5>
                              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                 <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">What to Expect From Fundrise
                                                   </h5>
                                                   <p class="card-text">A message from Fundrise CEO, Ben Miller
                                                   </p>
                                                   <a href="#" class="btn btn-primary bg-transparent text-black">watch
                                                   video</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">Real estate investing guide</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary bg-transparent text-black">watch
                                                   video</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="carousel-item ">
                                       <div class="row">
                                          <div class="col-sm-6 gx-1 my_img">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">What to Expect From Fundrise</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6 gx-1 my_img">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">What to Expect From Fundrise</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Previous</span>
                                 </button>
                                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Next</span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Top Selling -->
               <!-- Top Selling -->
               <div class="col-12">
                  <div class="card my_class overflow-auto">
                     <div class=" pb-0">
                        <div class="col-lg-12 col-md-4">
                           <div class=" info-card sales-card">
                              <h5 class="card-title p-lg-3"> <i class="bi bi-grid"></i> Newsfeed
                              </h5>
                              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                 <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">Our long-term investment strategy
                                                   </h5>
                                                   <p class="card-text">What our long-term investing strategy means for our investors
                                                   </p>
                                                   <a href="#" class="btn btn-primary bg-transparent text-black">watch
                                                   video</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">Real estate investing guide</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary bg-transparent text-black">watch
                                                   video</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="carousel-item ">
                                       <div class="row">
                                          <div class="col-sm-6 gx-1 my_img">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">What to Expect From Fundrise</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6 gx-1 my_img">
                                             <div class="card" style="width: 18rem;">
                                                <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" class="card-img-top" alt="image">
                                                <div class="card-body">
                                                   <h5 class="card-title">What to Expect From Fundrise</h5>
                                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                                   </p>
                                                   <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Previous</span>
                                 </button>
                                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Next</span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Top Selling -->
            </div>
         </div>
         <!-- End Left side columns -->
         <!-- Right side columns -->
         <div class="col-lg-5">
            <!-- Recent Activity -->
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Returns</h5>
                  <!-- Default Table -->
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col-0"></th>
                           <th scope="col">YTD</th>
                           <th scope="col" colspan="3">All time
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                        </tr>
                        <tr>
                           <td data-bs-toggle="tooltip" data-bs-placement="top" title="Dividends are the portion of the estimated return that are made as cash distributions. Dividends generally accrue on a daily basis, and are typically distributed or reinvested quarterly — however, there is no guarantee of future dividend declarations or payments">
                              Dividends
                           </td>
                           <td>--</td>
                           <td>--</td>
                        </tr>
                        <tr>
                           <td data-bs-toggle="tooltip" data-bs-placement="top" title="Appreciation is the portion of the estimated return that comes from changes in the net asset value (NAV) of the shares presented. NAV reporting typically does not begin for a year or more after the launch of an offering, after which NAV is typically updated quarterly or semi-annually.">
                              Appreciation
                           </td>
                           <td>--</td>
                           <td>--</td>
                        </tr>
                        <tr>
                           <td data-bs-toggle="tooltip" data-bs-placement="top" title="Depending on when a redemption occurred, such redeemed shares may have been redeemed at a penalty to NAV per the terms of the applicable redemption policy.">
                              Penalties
                           </td>
                           <td>---</td>
                           <td>---</td>
                        </tr>
                        <tr>
                           <td>Advisory fees</td>
                           <td>---</td>
                           <td>---</td>
                        </tr>
                        <tr>
                           <td>Total</td>
                           <td>---</td>
                           <td>--</td>
                        </tr>
                     </tbody>
                  </table>
                  <!-- End Default Table Example -->
               </div>
            </div>
            <!-- End Recent Activity -->
            <!-- Website Traffic -->
            <div class="card">
               <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-gear"></i>
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
                  <h5 class="card-title"> <span> Your portfolio</span> | {{ $contribution }} </h5>
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
            <!-- End Website Traffic -->
         </div>
         <!-- End Right side columns -->
      </div>
   </section>
   
</main>
<!-- End #main -->
<!-- Vertically centered Modal -->
<div class="modal fade" id="verticalycentered" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add Funds</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            Would you like to make a one-time investment or set up a recurring investment?
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">One Time investment</button>
            <button type="button" class="btn btn-primary">Recurring investment</button>
         </div>
      </div>
   </div>
</div>
<!-- End Vertically centered Modal-->
<!-- ======= Footer ======= -->
<!-- <footer id="footer" class="footer">
   <div class="copyright">
   &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
   </div>
   <div class="credits">
   
   Designed by
   <a href="#"></a>
   </div>
   </footer> -->
<!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
   class="bi bi-arrow-up-short"></i></a>
@endsection
