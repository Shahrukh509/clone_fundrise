<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <input type="hidden" id="account_type" name="account_type" value="{{ $account_type }}">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active whereTo" data-action="{{ route('user.store.signup.basicinfo') }}" id="account"><strong>PERSONAL INFORMATION</strong></li>
                                <li id="personal" class="toAccountDetails" data-action="{{ route('user.store.signup.accountdetails') }}"><strong>ACCOUNT BASICS</strong></li>
                                <li id="personal" class="toAccountDetails" data-action="{{ route('user.store.signup.accountdetails') }}"><strong>INVESTMENT</strong></li>
                                <li id="personal" class="toAccountDetails" data-action="{{ route('user.store.signup.accountdetails') }}"><strong>FUNDING PREFRENCES</strong></li>
                                <li id="personal" class="toAccountDetails" data-action="{{ route('user.store.signup.accountdetails') }}"><strong>REVIEW & FINISH</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <p class="overline">Let's finish getting your account set up.</p>
                                    <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">What is your legal name?</h1>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" name="firstname" placeholder="First name" value="{{ Auth()->user()->firstname?? null }}">
                                            <span class="text-danger error-text firstname_error"></span>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" name ="lastname"placeholder="Last name" value="{{ Auth()->user()->lastname?? null }}">
                                            <span class="text-danger error-text lastname_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-card">
                                    <p class="overline">We currently only accept investment from US residents.</p>
                                    <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">Please confirm the following:</h1>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">COUNTRY OF CITIZENSHIP</label>
                                                <select class="form-control" name="country_of_citizenship" id="country_citizen">
                                                    <option selected="selected">America</option>
                                                    <option>Aus</option>
                                                    <option>Canda</option>
                                                    <option>UK</option>
                                                    <option>UAE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <span class="text-danger error-text country_of_citizenship_error"></span>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">COUNTRY OF RESIDENCE</label>
                                                <select class="form-control" name="country_of_residence" id="country_residence">
                                                    <option selected="selected">America</option>
                                                    <option>Aus</option>
                                                    <option>Canda</option>
                                                    <option>UK</option>
                                                    <option>UAE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <span class="text-danger error-text country_of_residence_error"></span>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <p class="overline">Thanks, {{ Auth::user()->firstname }}!</p>
                                    <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">Provide your personal information</h1>
                                    <h2 style="font-size: 20px;">Residential Address</h2>
                                    <span>Your residential address will be used to verify your identity, so it should match the address used for tax purposes. If you have an alternate mailing address, you may provide it below.</span>
                                    <div class="form-group">
                                        <label for="address">FULL ADDRESS <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}" id="address" placeholder="Enter full address">
                                        <small>This should be the address used for tax purposes</small><br />
                                        <span class="text-danger" id="error-address"></span>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="input-city">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->city }}" name="city" id="input-city" placeholder="Enter city name">
                                            <span class="text-danger" id="error-city"></span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="input-state">State <span class="text-danger">*</span></label>
                                            <select id="input-state" class="form-control" name="state">
                                                <option selected>Choose...</option>
                                                <option value="sindh" {{ Auth::user()->state=='sindh'?'selected':'' }}>Sindh</option>
                                                <option value="kpk" {{ Auth::user()->state=='kpk'?'selected':'' }}>KPK</option>
                                                <option value="punjab" {{ Auth::user()->state=='punjab'?'selected':'' }}>Punjab</option>
                                                <option value="balochistan" {{ Auth::user()->state=='balochistan'?'selected':'' }}>Balochistan</option>
                                                <option value="gilgit" {{ Auth::user()->state=='gilgit'?'selected':'' }}>Gilgit Baltistan</option>
                                            </select>
                                            <span class="text-danger" id="error-state"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="input-zip">ZIP CODE <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->zip_code }}" name="zip" id="input-zip" placeholder="Enter zip code">
                                            <span class="text-danger" id="error-zip"></span>
                                        </div>

                                        <div class="form-group col-12">
                                            <h2 style="font-size: 20px;">Contact Information</h2>
                                            <label for="input-phone">PHONE NUMBER (MOBILE PREFERRED) <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->mobile }}" name="phone" id="input-phone" placeholder="Enter phone number">
                                            <span class="text-danger" id="error-phone"></span>
                                        </div>
                                    </div>

                                    <h2 style="font-size: 20px;">Tax Reporting Information</h2>
                                    <span>This information is required by the IRS for tax reporting purposes.</span>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="input-tax">SOCIAL SECURITY NUMBER <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ isset(Auth::user()->hasBankDetails)?Auth::user()->hasBankDetails->social_security_number:'' }}" name="social_security" required id="input-tax" placeholder="123-45-6789">
                                            <span class="text-danger" id="error-social_security"></span>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="input-date-birth">DATE OF BIRTH <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="date_of_birth" value="{{ isset(Auth::user()->hasBankDetails)?Auth::user()->hasBankDetails->date_of_birth:'' }}" id="input-date-birth" placeholder="">
                                            <span class="text-danger" id="error-date_of_birth">{{ $errors->first('date_of_birth') }}</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="retired-next2" class="retired-next2 action-button" value="Next Step"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>