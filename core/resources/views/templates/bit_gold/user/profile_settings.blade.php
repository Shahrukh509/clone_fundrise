@extends($activeTemplate.'user.dashboard.master')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Settings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card tabs_class">
                        <div class="card-body">
                            <!-- Vertical Pills Tabs -->
                            <div class="d-flex align-items-start">
                                <!-- <h5 class="card-title">Vertical Pills Tabs</h5> -->
                                <div class="nav flex-column nav-pills me-3 py-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal Information</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Notifications</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Email Address</button>
                                    <button class="nav-link" id="v-pills-Password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Password" type="button" role="tab" aria-controls="v-pills-Password" aria-selected="false">Password</button>
                                    <button class="nav-link" id="v-pills-number-tab" data-bs-toggle="pill" data-bs-target="#v-pills-number" type="button" role="tab" aria-controls="v-pills-number" aria-selected="false">Mobile Number</button>
                                   {{--  <button class="nav-link" id="v-pills-account-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account" type="button" role="tab" aria-controls="v-pills-account" aria-selected="false">Account Nick Name</button> --}}
                                    <button class="nav-link" id="v-pills-investment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-investment" type="button" role="tab" aria-controls="v-pills-investment" aria-selected="false">Investment Plan</button>
                                    <button class="nav-link" id="v-pills-Reinvestment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Reinvestment" type="button" role="tab" aria-controls="v-pills-investment" aria-selected="false">Dividend Reinvestment</button>
                                    <button class="nav-link" id="v-pills-Payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Payment" type="button" role="tab" aria-controls="v-pills-Payment" aria-selected="false">Payment Methods</button>
                                    <button class="nav-link" id="v-pills-add-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add" type="button" role="tab" aria-controls="v-pills-add" aria-selected="false">Add Account</button>
                                </div>
                                <div class="tab-content py-3 pull-right w-100" id="v-pills-tabContent">
                                    <!-- 1st tab starts here -->
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <h5 class="card-title">Personal Information</h5>
                                        <span class="d-flex justify-content-end">
                                            <a class="edit_info_class">
                                                <i class="bi bi-pencil"></i> &nbsp; Edit
                                            </a>
                                        </span>
                                       <table class="table table-borderless table-responsive d-block" id="viewinfo">
                                            <tbody>
                                                <tr>
                                                    <td>Full name </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Address </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->address??'' }}</td>
                                                </tr>
                                               {{--  <tr>
                                                    <td>Address 2 </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->address->address2??'' }}</td>
                                                </tr> --}}
                                                <tr>
                                                    <td>City</td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->city??'' }}</td>
                                                </tr>
                                                <tr>
                                                    <td>State </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->state??'' }}</td>
                                                </tr>
                                                <tr>
                                                    <td>ZIP Code </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->zip_code??'' }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Country </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->country_of_citizenship??'' }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- on click it shws -->
                                         <div class="form-card d-none" id="editinfo">
                                            <h2 style="font-size: 20px;">Personal Information</h2>
                                            <form id="personal-info-form" url={{ route('user.submitprofile') }}>
                                                <div class="row">
                                                    <div class="col-sm-6 forms_edits">
                                                        <label for="firstname">First Name</label>
                                                        <input type="text" class="form-control" id="firstname" value="{{ Auth::user()->firstname }}" placeholder="Enter first name">
                                                        <small id="error-firstname" style="color: red"></small>
                                                    </div>
                                                    <div class="col-sm-6 forms_edits">
                                                        <label for="lastname">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname" value="{{ Auth::user()->lastname }}" placeholder="Enter last name">
                                                        <small id="error-lastname" style="color: red"></small>
                                                    </div>
                                                </div>
                                                <br />
                                                <div class="row">
                                                    <div class="col-sm-12 forms_edits">
                                                        <label for="address_first">Address</label>
                                                        <input type="text" class="form-control" id="address_first" value="{{ Auth::user()->address??'' }}" placeholder="Enter first address">
                                                        <small id="error-address_first" style="color: red"></small>
                                                    </div>
                                                    {{-- <div class="col-sm-6 forms_edits">
                                                        <label for="address_second">Address 2</label>
                                                        <input type="text" class="form-control" id="address_second" value="{{ Auth::user()->address->address2??'' }}" placeholder="Enter second address">
                                                        <small id="error-first-second" style="color: red"></small>
                                                    </div> --}}
                                                </div>
                                                <br />
                                                <div class="row">
                                                    <div class="col-sm-6 forms_edits">
                                                        <label for="city">City</label>
                                                        <input type="text" class="form-control" id="city" value="{{ Auth::user()->city??'' }}" placeholder="Enter city name">
                                                        <small id="error-city" style="color: red"></small>
                                                    </div>
                                                    <div class="col-sm-6 forms_edits">
                                                        <label for="state">State</label>
                                                        <input type="text" class="form-control" id="state" value="{{ Auth::user()->state??'' }}" placeholder="Enter state name">
                                                        <small id="error-state" style="color: red"></small>
                                                    </div>
                                                </div>
                                                <br />
                                                <div class="row">
                                                    <div class="col-sm-6 forms_edits">
                                                        <label for="zip">Zip Code</label>
                                                        <input type="text" class="form-control" id="zip" value="{{ Auth::user()->zip_code??'' }}" placeholder="Enter zip code">
                                                        <small id="error-zip" style="color: red"></small>
                                                    </div>
                                                    <div class="col-sm-6 forms_edits">
                                                        <label for="country">Country</label>
                                                        <input type="text" class="form-control" id="country" value="{{ Auth::user()->country_of_citizenship??'' }}" placeholder="Enter country name">
                                                        <small id="error-country" style="color: red"></small>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class=" d-flex justify-content-start pt-4">
                                                            <button id="cancel_edit" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                            <small>Cancel</small> </button>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class=" d-flex justify-content-end   pt-4">
                                                            <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit"> Save </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- on click it shws  ends-->
                                    </div>
                                    <!-- 1st tab ends -->
                                    <!-- 2nd tab strats -->
                                    @php
                                    $notif = json_decode(Auth()->user()->notification_setting);
                                    // print_r($notif);exit;
                                    @endphp
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h5 class="card-title">Notifications</h5>
                                        <span class="d-flex justify-content-end"><a class="edit_notif_class"><i class="bi bi-pencil"></i> &nbsp; Edit</a></span>
                                        <p>I would like to receive email notifications about: </p>
                                        <table class="table table-borderless table-responsive d-block" id="viewnotif">
                                            <tbody>
                                                <tr>
                                                    <td>Insights and Resources </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>@if($notif)
                                                        {{ $notif->InsightsAndResources? 'Enabled':'Disbaled' }}@endif() </td>
                                                </tr>
                                                <tr>
                                                    <td>Product and Feature Announcements </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>@if($notif)
                                                        {{ $notif->ProductAndFeatureAnnouncements? 'Enabled':'Disbaled' }}@endif()</td>
                                                </tr>
                                                <tr>
                                                    <td>Portfolio Performance </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>@if($notif)
                                                        {{ $notif->PortfolioPerformance? 'Enabled':'Disbaled' }}@endif()</td>
                                                </tr>
                                                <tr>
                                                    <td>Project Updates </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>@if($notif)
                                                        {{ $notif->ProjectUpdates? 'Enabled':'Disbaled' }}@endif()</td>
                                                </tr>
                                                <tr>
                                                    <td>Newsletter </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>@if($notif)
                                                        {{ $notif->Newsletter? 'Enabled':'Disbaled' }}@endif() </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- on click it show 2nd tab -->
                                        <form id ="notification-form" url="{{ route('user.change-notification') }}">
                                        <div class="form-card d-none" id="editnotif">
                                            <div class="card-body">
                                               
                                                <!-- List group With Checkboxes and radios -->
                                                <ul class="list-group py-3">
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" aria-label="..." id="insight" name="insight" value="1" @if($notif)
                                                        {{ $notif->InsightsAndResources?'checked':'' }}@endif> Insights and Resources <br>
                                                        <span><small>Investor tips, articles, white papers, and other information to help you get the most out of
                                                    Fundrise.</small></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="1" aria-label="..." id="product"name="product"@if($notif)
                                                        {{ $notif->ProductAndFeatureAnnouncements?'checked':'' }}@endif> Product and Feature Announcements <br>
                                                        <span>
                                                            <small>New product launches, offerings, and investment features. </small>
                                                        </span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="1" aria-label="..." id="portfolio" name="portfolio" @if($notif)
                                                        {{ $notif->PortfolioPerformance?'checked':'' }}@endif> Portfolio Performance <br>
                                                        <span><small>
                                                    Updates and account reminders about your Fundrise investments.
                                        
                                                  </small></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="1" aria-label="..." id="project" name="project"@if($notif)
                                                        {{ $notif->ProjectUpdates?'checked':'' }}@endif> Project Updates <br>
                                                        <span><small>
                                                    Progress updates about the projects included in your portfolio.
                                        
                                                  </small></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="1" aria-label="..." id="newsletter" name="newsletter" @if($notif)
                                                        {{ $notif->Newsletter?'checked':'' }}@endif> Newsletter <br>
                                                        <span><small>
                                                    A weekly newsletter dedicated to long-term thinking.
                                        
                                                  </small></span>
                                                    </li>
                                                </ul>
                                                <!-- End List Checkboxes and radios -->
                                                <div class="row">
                                                    <div class="col">
                                                        <div class=" d-flex justify-content-start    pt-4">
                                                            <button id="cancel_edit_notif" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                    <small>Cancel</small> </button>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class=" d-flex justify-content-end   pt-4">

                                                            <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit"> Save </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2nd tab ends -->

                                    <!-- 3rd  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <h5 class="card-title">Email Address</h5>
                                        <span class="d-flex justify-content-end"><a class="edit_email">
                                            <i class="bi bi-pencil"></i> &nbsp; Edit</a></span>
                                        <table class="table table-borderless table-responsive d-block" id="viewemail">
                                            <table class="table table-borderless table-responsive d-block" id="viewemail">
                                            <tbody>
                                                <tr>
                                                    <td>My Email </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->email }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- on click show this 3rd tab div -->
                                        <form id="email-form" url="{{ route('user.change-email') }}">
                                        <div class="form-card d-none" id="editemail">
                                            
                                            <label for="email">Edit Email</label>
                                            <input type="email" name="email"  value="{{ Auth::user()->email }}" class="form-control" id="email" placeholder="">

                                            <span id="error-email" style="color: red"></span>
                                           
                                            <div class="row">
                                                <div class="col">
                                                    <div class=" d-flex justify-content-start    pt-4">
                                                        <button id="cancel_edit_email" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                    <small>Cancel</small> </button>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class=" d-flex justify-content-end   pt-4">
                                                        <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit"> Save </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- 3rd  tab ends -->

                                    <!-- 4rd  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-Password" role="tabpanel" aria-labelledby="v-pills-Password-tab">
                                        <h5 class="card-title">Password</h5>
                                        <span class="d-flex justify-content-end"><a class="edit_password"><i class="bi bi-pencil"></i> &nbsp; Edit</a></span>
                                        <table class="table table-borderless table-responsive d-block" id="viewpass">
                                            <tbody>
                                                <tr>
                                                    <td>Password </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>*******</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- on click show this 4rd tab div -->
                                        <form id="password-form" url={{ route('user.change-password') }}>
                                            <div class="form-card d-none" id="editpass">
                                                <p>To change your password, enter your current password and then create a new one using the following form.</p>
                                                <label for="current_password">CURRENT PASSWORD</label>
                                                <input type="password" class="form-control" id="current_password" placeholder="password">
                                                <span id="error-current_password" style="color: red"></span>
                                                <br>
                                                <label for="password">NEW PASSWORD</label>
                                                <input type="password" class="form-control" id="password" placeholder="New password">
                                                <small>Must be at least 8 characters long, and must include one letter and one number</small><br />
                                                <span id="error-password" style="color: red"></span>

                                                <br><br>
                                                <label for="confirmed">CONFIRM NEW PASSWORD</label>
                                                <input type="password" class="form-control" id="confirmed" placeholder="Confirm New password">
                                                <small>Type your new password again.</small><br />
                                                <span id="error-confirmed" style="color: red"></span>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class=" d-flex justify-content-start    pt-4">
                                                            <button id="cancel_edit_pass" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                            <small>Cancel</small> </button>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class=" d-flex justify-content-end pt-4">
                                                            <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit"> Change Password </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- 4rd  tab ends -->


                                    <!-- 5th  tab strats -->
                                   <div class="tab-pane fade" id="v-pills-number" role="tabpanel" aria-labelledby="v-pills-number-tab">
                                        <h5 class="card-title">Mobile Number</h5>
                                        <span class="d-flex justify-content-end">
                                            <a class="edit_number">
                                                <i class="bi bi-pencil"></i>&nbsp;Edit
                                            </a>
                                        </span>

                                        <table class="table table-borderless table-responsive d-block" id="view_num">
                                            <tbody>
                                                <tr>
                                                    <td colspan="5"> Fundrise may use this phone number to keep your account secure. To edit or verify this number, Fundrise will send a temporary verification code to your phone. Standard messaging and data rates may apply.</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone number </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>{{ Auth::user()->mobile }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>
                                                        <i class="fa fa-ban"></i> Unverified
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- on click show this 5th tab div -->
                                        <form id="mobile-number-form">
                                            <div class="form-card d-none" id="editnum">
                                                <label for="mobile">PHONE NUMBER</label>
                                                <input type="number" class="form-control" value="{{ Auth::user()->mobile }}" id="mobile" placeholder="Enter mobile number">
                                                <span id="error-mobile" style="color: red"></span>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class=" d-flex justify-content-start    pt-4">
                                                            <button id="cancel_edit_num" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                                <small>Cancel</small> </button>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class=" d-flex justify-content-end pt-4">
                                                            <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit"> 
                                                                Verify </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- 5th  tab ends -->

                                    <!-- 6th  tab strats -->
                                   {{--  <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                                        <h5 class="card-title">Account Nickname</h5>
                                        <span class="d-flex justify-content-end">
                                            <a class="edit_nick">
                                                <i class="bi bi-pencil"></i>&nbsp;Edit
                                            </a>
                                        </span>
                                        <table class="table table-borderless table-responsive d-block" id="view_nick">
                                            <tbody>
                                                <tr>
                                                    <td>Account Nickname </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>
                                                        n/a
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Status
                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        on click show this 6th tab div
                                        <div class="form-card d-none" id="editnick">
                                            <label for="exampleFormControlInput1">NICKNAME</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="(234) 342-4244">
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class=" d-flex justify-content-start    pt-4">
                                                        <button id="cancel_edit_nick" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                            <small>Cancel</small> </button>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class=" d-flex justify-content-end pt-4">
                                                        <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit">
                                                            Verify </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- 6th  tab ends -->


                                    <!-- 7th  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-investment" role="tabpanel" aria-labelledby="v-pills-investment-tab">
                                        <h5 class="card-title">Investment Plan</h5>

                                        <table class="table table-borderless table-responsive d-block" id="view_nick">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Individual Account No. 1677652
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>You must upgrade to a Core account to unlock the Standard plans
                                                        <a href="#">Upgrade Now</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Investment Plan
                                                    </td>
                                                    <td colspan="3" class="d-flex"></td>

                                                    <td>
                                                        Starter Portfolio

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- on click show this 6th tab div -->
                                        <div class="form-card d-none" id="editnick">
                                            <label for="exampleFormControlInput1">NICKNAME</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="(234) 342-4244">
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class=" d-flex justify-content-start    pt-4">
                                                        <button id="cancel_edit_nick" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                            <small>Cancel</small> </button>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class=" d-flex justify-content-end pt-4">
                                                        <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit">
                                                            Verify </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 7th  tab ends -->

                                    <!-- 8th  tab strats -->
                                    <div class="tab-pane fade " id="v-pills-Reinvestment" role="tabpanel" aria-labelledby="v-pills-Reinvestment-tab">
                                        <h5 class="card-title">Dividend Reinvestment</h5>
                                        <span class="d-flex justify-content-end">
                                            <a class="edit_dividends">
                                                <i class="bi bi-pencil"></i>&nbsp;Edit
                                            </a>
                                        </span>
                                        @php
                                         $id = App\Models\Questionaire::where('url_slug','dividend-reinvestment')->first()->id;
                                         $questions = \App\Models\QuestionaireAnswer::where('questionaire_id',$id)->get();
                                        $answer = \App\Models\UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$id)->first();
                                        // dd($answer);
                                        @endphp

                                        <table class="table table-borderless table-responsive d-block" id="view_dividens">
                                            <tbody>
                                                <tr>
                                                    <td>Preference </td>
                                                    <td colspan="5" class="d-flex"></td>
                                                    <td>
                                                        @if($answer){{ $answer->questionaire_answer_id == 98? 'Enabled':'Disabled' }}@endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <form id="dividend-reinvest-form" url="{{ route('user.dividend-reinvest') }} " id-of-ques={{ $id }} >
                                        <!-- on click show this 8th tab div -->
                                        <div class="form-card  d-none" id="editdividends">
                                            @foreach($questions as $key=> $data)

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dividend-reinvest" id="dividend-reinvest" value="{{ $data->id }}" @if($data){{ $data->id== $answer->questionaire_answer_id?'checked':'' }} @endif>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    
                                                    {{ $key==0? 'Disabled':'Enabled' }} - {{  $data->options}}
                                                </label>
                                            </div>

                                            @endforeach

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" class="termsAndCondition_">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I would like Fundrise Advisors to reinvest my dividends according to the Services section of the Fundrise Advisors
                                                    Client Agreement and agree to its terms and conditions. <span style="color:red">(Please checked this box if you selected the the option enable)</span>
                                                </label>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class=" d-flex justify-content-start    pt-4">
                                                        <button id="cancel_edit_dividens" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                            <small>Cancel</small> </button>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class=" d-flex justify-content-end pt-4">
                                                        <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit">
                                                            Save </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- 8th  tab ends -->

                                    <!-- 9th  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-Payment" role="tabpanel" aria-labelledby="v-pills-Payment-tab">
                                        <h5 class="card-title">Payment Methods</h5>
                                        <span class="d-flex justify-content-end">
                                            <a class="edit_pay">
                                                <i class="bi bi-pencil"></i>&nbsp;Edit
                                            </a>
                                        </span>
                                        <h5 class="card-title">Bank Accounts </h5>
                                        <table class="table table-borderless table-responsive d-block" id="view_pay">
                                            <thead>
                                                <tr>
                                                    Manage the bank accounts that are connected to your Fundrise account.
                                                </tr>
                                                <tr>
                                                    <th scope="col">Bank Account</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Account #</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $bank = \App\Models\BankDetail::where('user_id',Auth()->user()->id)->get();
                                                @endphp
                                                @foreach($bank as $data)
                                                <tr>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->account_type }}</td>
                                                    <td>{{ substr($data->account_number,0,4) }}</td>
                                                    <td>{{ $data->status==1?'Active':'Inactive' }}</td>
                                                </tr>
                                                @endforeach
                        
                                            </tbody>
                                        </table>

                                        <!-- on click show this 9th tab div -->
                                        <form id="form-payment-update" url="{{ route('user.update-payment-method') }}">
                                        <div class="form-card  d-none payment-div" id="editpay">
                                            <table class="table table-borderless table-responsive d-block">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Bank Account</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Account #</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($bank as $data)
                                                    
                                                    <tr>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->account_type }}</td>
                                                    <td>{{ substr($data->account_number,0,4) }}</td>
                                                    <td>{{ $data->status==1?'Active':'Inactive' }}</td>
                                                

                                                        <td><button class="button_new payment-update {{ $data->status? 'd-none':'d-block' }}" value="1" id="{{ $data->id }}">Make primary</button></td>
                                                       {{--  <td><button class="button_new payment-update" value="0">Remove</button></td> --}}
                                                    </tr>
                                                    @endforeach 
                                                    
                                                </tbody>
                                            </table>

                                            <div class="row">
                                                <div class="col">
                                                    <div class=" d-flex justify-content-start    pt-4">
                                                        <button id="cancel_edit_pay" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                                            <small>Cancel</small> </button>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class=" d-flex justify-content-end pt-4">
                                                        <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit">
                                                            Done </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- 9th  tab ends -->

                                    <!-- 10th  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-add" role="tabpanel" aria-labelledby="v-pills-add-tab">
                                        <h5 class="card-title">Joint Account Information </h5>
                                        <span class="d-flex justify-content-end">
                                            <!-- <a class="edit_add">
                                                <i class="bi bi-pencil"></i>&nbsp;Edit
                                            </a> -->
                                        </span>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">JOINT ACCOUNT TYPE</label>
                                            <select class="form-control" id="account_type_1" name="account_type">
                                                <option>Rights of Survivorship</option>
                                                <option>Tenats in common</option>
                                                <option>Community in property</option>
                                            </select>
                                        </div>
                                        <div class=" forms_edits">
                                            <label for="exampleFormControlInput1"><b>Account Holder 1</b></label> <br>
                                            <label for="">ADDRESS LINE 1</label>
                                            <input type="text" class="form-control" id="line_address_1_1" name="line_address_1" placeholder="">
                                            <small>This should be the address used for tax purposes</small>
                                        </div>

                                        <div class=" forms_edits">
                                            <label for="exampleFormControlInput1">ADDRESS LINE 2</label>
                                            <input type="text" class="form-control" id="line_address_2_1" name="line_address_2" placeholder="">
                                        </div>

                                        <div class="form-group col-md-8">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="city1" name="city1">
                                             <span class=" text-danger text-error city1_error"></span>
                                        </div>


                                        <div class="form-group col-md-4 forms_edits">
                                            <label for="inputState">State</label>
                                            <select id="state1" class="form-control" name="state">
                                                <option value="">Choose...</option>
                                                <option>California</option>
                                                <option>Texas</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">ZIP CODE</label>
                                            <input type="text" class="form-control" name="zip_code1" id="zip_code1">
                                            <span class=" text-danger text-error zip_code1_error"></span>
                                        </div>
                                        <!-- account 2 -->

                                        <div class=" forms_edits">
                                            <label for=""><b>Account Holder 2</b></label> <br>
                                            <label for="">ADDRESS LINE 1</label>
                                            <input type="text" class="form-control" id="line_address_1_2" name="line_address_1" placeholder="">
                                            <small>This should be the address used for tax purposes</small>
                                        </div>

                                        <div class=" forms_edits">
                                            <label for="exampleFormControlInput1">ADDRESS LINE 2</label>
                                            <input type="text" class="form-control" id="line_address_2_2" name="line_address_2" placeholder="">
                                        </div>

                                        <div class="form-group col-md-8">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="city2" name="city2">
                                            <span class=" text-danger text-error city2_error"></span>
                                        </div>

                                        <div class="form-group col-md-4 forms_edits">
                                            <label for="inputState">State</label>
                                            <select id="state2" class="form-control" name="state">
                                                <option value="">Choose...</option>
                                                <option>California</option>
                                                <option>Texas</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">ZIP CODE</label>
                                            <input type="text" class="form-control" name="zip_code2" id="zip_code2">
                                            <span class=" text-danger text-error zip_code2_error"></span>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class=" d-flex justify-content-start    pt-4">
                                                    <button id="cancel_edit" type="submit" class="button  bg-light text-dark button-fundrise-orange" data-test="lead-capture-submit">
                                         <small>Cancel</small> </button>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class=" d-flex justify-content-end   pt-4">

                                                    <button type="submit" class="button  button-fundrise-orange add-account" data-test="lead-capture-submit" id="add-account" url = {{ route('user.add.joint.account') }}> Save </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 10th  tab ends -->
                                </div>
                            </div>
                            <!-- End Vertical  Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

