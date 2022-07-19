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

                                    <button class="nav-link" id="v-pills-account-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account" type="button" role="tab" aria-controls="v-pills-account" aria-selected="false">Account Nick Name</button>

                                    <button class="nav-link" id="v-pills-investment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-investment" type="button" role="tab" aria-controls="v-pills-investment" aria-selected="false">Investment Plan</button>

                                    <button class="nav-link" id="v-pills-Reinvestment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Reinvestment" type="button" role="tab" aria-controls="v-pills-investment" aria-selected="false">Dividend Reinvestment</button>

                                    <button class="nav-link" id="v-pills-Payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Payment" type="button" role="tab" aria-controls="v-pills-Payment" aria-selected="false">Payment Methods</button>

                                    <button class="nav-link" id="v-pills-add-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add" type="button" role="tab" aria-controls="v-pills-add" aria-selected="false">Add Account</button>



                                </div>
                                <div class="tab-content py-3 pull-right w-100" id="v-pills-tabContent">

                                    <!-- 1st tab starts here -->
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <h5 class="card-title">Personal Information</h5>
                                        <span class="d-flex justify-content-end"><a class="edit_info_class"><i class="bi bi-pencil"></i> &nbsp; Edit</a></span>
                                        <table class="table table-borderless table-responsive d-block" id="viewinfo">

                                            <tbody>
                                                <tr>

                                                    <td>Full name
                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>Farhan Aslam
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Address </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>Abs kahi
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Address 2

                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>St-24 karachi
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>City
                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>Canassa
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>State
                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>AU
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>ZIP Code

                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>1232
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Country
                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>AU
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>


                                        <!-- on click it shws -->
                                        <div class="form-card d-none" id="editinfo">

                                            <h2 style="font-size: 20px;">Contact Information</h2>
                                            <div class=" forms_edits">
                                                <label for="exampleFormControlInput1">ADDRESS LINE 1</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                <small>This should be the address used for tax purposes</small>
                                            </div>

                                            <div class="forms_edits">
                                                <label for="exampleFormControlInput1">ADDRESS LINE 2</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                <!-- <small>This should be the address used for tax purposes</small> -->
                                            </div>
                                            <div class="form-row forms_edits">
                                                <div class="form-group col-md-8">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                </div>
                                                <div class="form-group col-md-4 forms_edits">
                                                    <label for="inputState">State</label>
                                                    <select id="inputState" class="form-control">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                              </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputZip">ZIP CODE</label>
                                                    <input type="text" class="form-control" id="inputZip">
                                                </div>

                                                <div class="form-group col-12">
                                                    <label for="inputAddress">PHONE NUMBER (MOBILE PREFERRED)</label>
                                                    <input type="text" class="form-control" id="inputAddress" placeholder="">
                                                </div>

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

                                                        <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit"> Save </button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- on click it shws  ends-->

                                        <!-- ends -->
                                    </div>
                                    <!-- 1st tab ends -->
                                    <!-- 2nd tab strats -->
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h5 class="card-title">Notifications</h5>
                                        <span class="d-flex justify-content-end"><a class="edit_notif_class"><i class="bi bi-pencil"></i> &nbsp; Edit</a></span>
                                        <p>I would like to receive email notifications about:
                                        </p>
                                        <table class="table table-borderless table-responsive d-block" id="viewnotif">

                                            <tbody>
                                                <tr>

                                                    <td>Insights and Resources

                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>Enabled
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Product and Feature Announcements </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>Enabled
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Portfolio Performance


                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>Enabled
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Project Updates

                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>Enabled
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Newsletter
                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>Disabled
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>

                                        <!-- on click it show 2nd tab -->
                                        <div class="form-card d-none" id="editnotif">
                                            <div class="card-body">

                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."> &nbsp; I would like to receive email notifications about:


                                                <!-- List group With Checkboxes and radios -->
                                                <ul class="list-group py-3">
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."> Insights and Resources <br>
                                                        <span><small>Investor tips, articles, white papers, and other information to help you get the most out of
                                                    Fundrise.</small></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."> Product and Feature Announcements <br>
                                                        <span><small>New product launches, offerings, and investment features.
                                        
                                                  </small></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."> Portfolio Performance <br>
                                                        <span><small>
                                                    Updates and account reminders about your Fundrise investments.
                                        
                                                  </small></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."> Project Updates <br>
                                                        <span><small>
                                                    Progress updates about the projects included in your portfolio.
                                        
                                                  </small></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."> Newsletter <br>
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


                                    <!-- ends -->


                                    <!-- 3rd  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <h5 class="card-title">Email Address</h5>
                                        <span class="d-flex justify-content-end"><a class="edit_email"><i class="bi bi-pencil"></i> &nbsp; Edit</a></span>
                                        <table class="table table-borderless table-responsive d-block" id="viewemail">

                                            <tbody>
                                                <tr>

                                                    <td>My Email

                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>farhan_aslam@gmail.com
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <!-- on click show this 3rd tab div -->
                                        <div class="form-card d-none" id="editemail">
                                            <p>Fundrise uses this email address to contact you with important information regarding the status of your account. Please keep it current.</p>
                                            <label for="exampleFormControlInput1">ADDRESS LINE 1</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            <small>This should be the address used for tax purposes</small>
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
                                    </div>
                                    <!-- 3rd  tab ends -->

                                    <!-- 4rd  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-Password" role="tabpanel" aria-labelledby="v-pills-Password-tab">
                                        <h5 class="card-title">Password</h5>
                                        <span class="d-flex justify-content-end"><a class="edit_password"><i class="bi bi-pencil"></i> &nbsp; Edit</a></span>
                                        <table class="table table-borderless table-responsive d-block" id="viewpass">

                                            <tbody>
                                                <tr>

                                                    <td>Password

                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>*******
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <!-- on click show this 4rd tab div -->
                                        <div class="form-card d-none" id="editpass">
                                            <p>To change your password, enter your current password and then create a new one using the following form.
                                            </p>
                                            <label for="exampleFormControlInput1">CURRENT PASSWORD</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                                            <br>
                                            <label for="exampleFormControlInput1">NEW PASSWORD</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="New password">
                                            <small>Must be at least 8 characters long, and must include one letter and one number</small>

                                            <br><br>
                                            <label for="exampleFormControlInput1">CONFIRM NEW PASSWORD</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirm New password">
                                            <small>Type your new password again.</small>

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

                                                    <td>Phone number

                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>
                                                        (234) 342-4244
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>
                                                        Status
                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>
                                                        <i class="fa fa-ban"></i> Unverified
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <!-- on click show this 5th tab div -->
                                        <div class="form-card d-none" id="editnum">

                                            <label for="exampleFormControlInput1">PHONE NUMBER</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="(234) 342-4244">
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
                                    </div>
                                    <!-- 5th  tab ends -->



                                    <!-- 6th  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                                        <h5 class="card-title">Account Nickname</h5>
                                        <span class="d-flex justify-content-end">
                                            <a class="edit_nick">
                                                <i class="bi bi-pencil"></i>&nbsp;Edit
                                            </a>
                                        </span>

                                        <table class="table table-borderless table-responsive d-block" id="view_nick">
                                            <tbody>

                                                <tr>

                                                    <td>Account Nickname


                                                    </td>
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
                                    <!-- 6th  tab ends -->


                                    <!-- 7th  tab strats -->
                                    <div class="tab-pane fade" id="v-pills-investment" role="tabpanel" aria-labelledby="v-pills-investment-tab">
                                        <h5 class="card-title">Investment Plan</h5>
                                        <!-- <span class="d-flex justify-content-end">
                                            <a class="edit_nick">
                                                <i class="bi bi-pencil"></i>&nbsp;Edit
                                            </a>
                                        </span> -->

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
                                    <div class="tab-pane fade" id="v-pills-Reinvestment" role="tabpanel" aria-labelledby="v-pills-Reinvestment-tab">
                                        <h5 class="card-title">Dividend Reinvestment</h5>
                                        <span class="d-flex justify-content-end">
                                            <a class="edit_dividends">
                                                <i class="bi bi-pencil"></i>&nbsp;Edit
                                            </a>
                                        </span>

                                        <table class="table table-borderless table-responsive d-block" id="view_dividens">
                                            <tbody>

                                                <tr>

                                                    <td>Preference


                                                    </td>
                                                    <td colspan="5" class="d-flex"></td>

                                                    <td>
                                                        Enabled
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>

                                        <!-- on click show this 8th tab div -->
                                        <div class="form-card " id="editdividends">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Enabled - Automatically reinvest my dividends according to my investment plan.
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                Disabled - I would like my dividends distributed to my account.
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I would like Fundrise Advisors to reinvest my dividends according to the Services section of the Fundrise Advisors
                                                    Client Agreement and agree to its terms and conditions.
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
                                        <h5 class="card-title">Bank Accounts
                                        </h5>


                                        <table class="table table-borderless table-responsive d-block" id="view_pay">
                                            <thead>
                                                <tr>

                                                    Manage the bank accounts that are connected to your Fundrise account.

                                                </tr>
                                                <tr>

                                                    <th scope="col">Bank Account</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Account #</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>Farhan</td>
                                                    <td>single</td>
                                                    <td>$3245</td>
                                                </tr>
                                                <tr>

                                                    <td>Farhan</td>
                                                    <td>single</td>
                                                    <td>$3245</td>
                                                </tr>
                                                <tr>

                                                    <td>Farhan</td>
                                                    <td>single</td>
                                                    <td>$3245</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- on click show this 9th tab div -->
                                        <div class="form-card  d-none" id="editpay">


                                            <table class="table table-borderless table-responsive d-block">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">Bank Account</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Account #</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>Farhan</td>
                                                        <td>single</td>
                                                        <td>$3245</td>
                                                        <td><button class="button_new">Make primary</button></td>
                                                        <td><button class="button_new">Remove</button></td>
                                                    </tr>
                                                    <tr>

                                                        <td>Farhan</td>
                                                        <td>single</td>
                                                        <td>$3245</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Farhan</td>
                                                        <td>single</td>
                                                        <td>$3245</td>
                                                    </tr>
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
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Rights of Survivorship</option>
                                                <option>Tenats in common</option>
                                                <option>Community in property</option>
                                               
                                            </select>
                                        </div>
                                        <div class=" forms_edits">
                                            <label for="exampleFormControlInput1"><b>Account Holder 1</b></label> <br>
                                            <label for="exampleFormControlInput1">ADDRESS LINE 1</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            <small>This should be the address used for tax purposes</small>


                                        </div>

                                        <div class=" forms_edits">
                                            <label for="exampleFormControlInput1">ADDRESS LINE 2</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>

                                        <div class="form-group col-md-8">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>

                                        <div class="form-group col-md-4 forms_edits">
                                            <label for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">ZIP CODE</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>


                                        <!-- account 2 -->

                                        <div class=" forms_edits">
                                            <label for="exampleFormControlInput1"><b>Account Holder 2</b></label> <br>
                                            <label for="exampleFormControlInput1">ADDRESS LINE 1</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            <small>This should be the address used for tax purposes</small>


                                        </div>

                                        <div class=" forms_edits">
                                            <label for="exampleFormControlInput1">ADDRESS LINE 2</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>

                                        <div class="form-group col-md-8">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>

                                        <div class="form-group col-md-4 forms_edits">
                                            <label for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                            <option selected="">Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">ZIP CODE</label>
                                            <input type="text" class="form-control" id="inputZip">
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

                                                    <button type="submit" class="button  button-fundrise-orange" data-test="lead-capture-submit"> Save </button>
                                                </div>
                                            </div>
                                        </div>






                                    </div>
                                    <!-- 10th  tab ends -->

                                    <!-- ends -->
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