@extends($activeTemplate.'user.auth.questionnaire.layouts.master')

@section('content')
    <div class="put-view-here">
        <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <form id="msform" class="from_label">
                                    <input type="hidden" name="account_type" value="{{ $account_type }}">

                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active whereTo" data-action="{{ route('user.store.signup.basicinfo') }}" id="account">
                                            <strong>PERSONAL INFORMATION</strong>
                                        </li>
                                        <li id="payment" class="account-basic-address" data-action="{{ route('user.ira.address') }}">
                                            <strong>ACCOUNT BASICS</strong>
                                        </li>
                                        <li id="personal" class="toAccountDetails" data-action="{{ route('user.store.signup.accountdetails') }}">
                                            <strong>INVESTMENT</strong>
                                        </li>
                                        <li id="payment" class="toFunding" data-action="{{ route('user.store.signup.funding') }}">
                                            <strong>FUNDING PREFRENCES</strong>
                                        </li>                                 
                                        <li id="payment"><strong>REVIEW & FINISH</strong></li>
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
                                        <input type="button" name="next2" class="next2 action-button" value="Next Step"/>
                                    </fieldset> 

                                    <fieldset>
                                        @php
                                            $questionair = \App\Models\Questionaire::where('url_slug', 'fund-ira')->first();
                                            $ira_types = \App\Models\Questionaire::where('url_slug', 'ira-type')->first();
                                            $ira_type_options = $ira_types->options;
                                        @endphp
                                        <div class="form-card">
                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                                {{ $questionair->question }}
                                            </h1>
                                        </div>

                                        <div class="form-card">
                                            <table class="table">
                                                @foreach ($questionair->options as $option)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input fund-ira" data-ira-type-options="{{ $ira_type_options }}" data-ira-types="{{ $ira_types }}" type="radio" value="{{ $option->options }}" name="fund_ira" id="id-{{ $option->id }}"/>
                                                                <label class="form-check-label" for="id-{{ $option->id }}">{{ $option->options }}</label>
                                                                <p>{{ $option->description }}</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>

                                        <span id="ira-types-span"></span>

                                        <span id="ira-type-option-span"></span>

                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                        <input type="button" name="next" class="next action-button" value="Next Step"/>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-card">
                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                                How much would you like to invest? 
                                            </h1>
                                            <p class="overline">Initial contribution</p>
                                            <div class="form-group">
                                                <label for="inputAddress2">ENTER AN AMOUNT</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Enter an amount">
                                            </div>
                                        </div>

                                        <div class="form-card">
                                            <p class="overline font-style-italic">Your account details look good.</p>
                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                                Please choose a source of funds. 
                                            </h1>
                                    
                                            <div class="form-check pt-3">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="exampleRadios1">
                                                Link a bank account
                                                </label> <br>
                                                <small>Use your online banking credentials to securely connect a bank account.</small>
                                            </div>

                                            <div class="row py-2">
                                                <div class="col-lg-4">
                                                    <div class="module_img">
                                                        <img src="https://d10cq78zmnjvsx.cloudfront.net/interface/institutions/bank-of-america.svg" class="bank-logo" alt="Bank of america" role="presentation">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="module_img">
                                                        <img src="https://d10cq78zmnjvsx.cloudfront.net/interface/institutions/bank-of-america.svg" class="bank-logo" alt="Bank of america" role="presentation">
                                                    </div>
                                                </div>
                                                    <div class="col-lg-4">
                                                    <div class="module_img">
                                                        <img src="https://d10cq78zmnjvsx.cloudfront.net/interface/institutions/bank-of-america.svg" class="bank-logo" alt="Bank of america" role="presentation">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-check pt-3">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Enter a bank account manually
                                                </label> <br>
                                                <small>Manually enter your bank’s routing and account numbers.</small>
                                            </div>
                                            <small>
                                                <br>
                                                If you are interested in investing via wire transfer, please reach out to the Fundrise Investor Relations team at <a href="#">investments@fundrise.com.</a>
                                            </small>
                                        </div>
                                        <div class="form-card">
                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                                Enter your account info 
                                            </h1>

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">ACCOUNT TYPE</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Checking</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">BANK</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Name">
                                                <small>Name of bank as it appears on your paper checks.</small>
                                                <img src="" alt="chck" class="img-fluid pt-3">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress2">ROUTING NUMBER</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="routing number">
                                                <small>9-digit number on the bottom left of your paper checks.</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">ACCOUNT NUMBER</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="account number">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">CONFIRM ACCOUNT NUMBER</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Confirm your account number by typing it again.">
                                                <small>Confirm your account number by typing it again.</small>
                                            </div>
                                        </div>

                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                        <input type="button" name="next" class="next action-button" value="Next Step"/>
                                    </fieldset>
                                    
                                    <fieldset>
                                        <div class="form-card">
                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                            Agreements 
                                            </h1>
                                            <p class="overline">Documents</p>
                                            <p>
                                            The following documents are provided for your reference:
                                            </p>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#" class="text-dark">
                                                        <i class="fa fa-file" aria-hidden="true"> &nbsp; Form W-9</i>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="text-dark">
                                                        <i class="fa fa-file" aria-hidden="true"> &nbsp; Flagship- Prospectus</i>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="text-dark">
                                                        <i class="fa fa-file" aria-hidden="true"> &nbsp; Form W-9</i>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                            <p class="overline">Acknowledgments</p>
                                            <span>Please indicate agreement with the following:</span>
                                            <div class="form-check ack_txt pt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    I have reviewed the Prospectus and Subscription Agreement, per my selected investment plan, and understand the risks associated with such offerings.
                                                </label>
                                            </div>
                                                <div class="form-check ack_txt pt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    I understand that the number of shares Fundrise may liquidate in a given period is limited pursuant to the Fundrise redemption policy and relevant SEC guidance, and that given the size of my investment, Fundrise cannot prospectively guarantee my ability to liquidate all of my shares in a given quarter or month.
                                                </label>
                                            </div>

                                            <div class="form-check ack_txt pt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    I represent that my investment(s) in this offering(s) does not constitute more than the greater of 10% of my gross annual income or net worth, either individually or in the aggregate.
                                                </label>
                                            </div>

                                            <div class="form-check ack_txt pt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    I understand that there is no guarantee of any financial return on this investment(s) and that I run the risk of loss in my investment(s); and that I have not been provided tax advice by Fundrise.
                                                </label>
                                            </div>

                                            <div class="form-check ack_txt pt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    I recognize that my investment is in alternative assets which are fundamentally long-term, illiquid investments; that liquidations, if approved, are paid out quarterly for the eREITs and the funds registered under the Investment Company Act of 1940, and monthly after a minimum 60-day waiting period for the eFund; and, where possible, requests for liquidation may be suspended during periods of financial stress.
                                                </label>
                                            </div>

                                            <div class="form-check ack_txt pt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    I certify that the information provided is true and correct and understand it will be used in the W-9. I have reviewed and acknowledge the W-9.
                                                </label>
                                            </div>
                                            <hr>

                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">Dividend Reinvestments </h1>

                                            <div class="form-check pt-3">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="exampleRadios1">
                                                I would like my dividends reinvested according to the investment plan I have selected.
                                                </label>
                                            </div>
                                            <div class="form-check pt-3">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="exampleRadios1">
                                                I would like my dividends distributed to my bank account.
                                                </label>
                                            </div>
                                        </div>

                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                        <input type="button" name="next" class="next action-button" value="Next Step"/>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-card done_txt">
                                        <p class="overline font-style-italic">You’re almost done!</p> 
                                        <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">Basic Info   <a href="#"><span class="pull-right edit_pencil"><i class="fa fa-pencil" aria-hidden="true"></i></span></a></h1>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                    </tr>
                                                    <tr>
                                                        <td>abc@gmail.com</td>
                                                        <td>Thornton</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(456) 578-8864</td>
                                                        <td>the Bird</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="form-card done_txt">
                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">Investment Information   <a href="#"><span class="pull-right edit_pencil"><i class="fa fa-pencil" aria-hidden="true"></i></span></a></h1>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Initial Amount</td>
                                                        <td>$23,434.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dividend Reinvestment</td>
                                                        <td>$23,434.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Payment Method</td>
                                                        <td>$23,434.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-card done_txt">
                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">Agreements   <a href="#"><span class="pull-right edit_pencil"><i class="fa fa-pencil" aria-hidden="true"></i></span></a></h1>
                                            <span>Signed on Jul 1, 2022</span> <br>
                                            <span><a href="#">Flagship Real Estate Fund - Subscription Agreement</a></span>
                                            <br> <br>
                                        </div>
                                        <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('input[name="fund_ira"]:radio').change(function () {
            var fund_ira = $("input[name='fund_ira']:checked").val();
            var ira_type = $(this).data('ira-types');
            var ira_type_options = $(this).data('ira-type-options');
            
            var html = '';
            if(fund_ira == 'New contribution'){
                html = '<div class="form-card">'+
                            '<h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">'+
                                ira_type.question +
                            '</h1>'
                        '</div>'+

                        '<div class="form-card">'+
                            '<table class="table">';
                                jQuery.each(ira_type_options, function(index, option_type) {
                                    html += '<tr>'+
                                                '<td>'+
                                                    '<div class="form-check">'+
                                                        '<input class="form-check-input" type="radio" value="'+option_type.options+'" name="ira_type" id="id-'+option_type.id+'"/>'+
                                                        '<label class="form-check-label" for="id-'+ option_type.id +'">'+option_type.options+'</label>'+
                                                        '<p>'+option_type.description+'</p>'+
                                                    '</div>'+
                                                '</td>'+
                                            '</tr>';
                                });
                            html += '</table>'+
                        '</div>';

                $('#ira-types-span').html(html);
            }else if(fund_ira == 'Transfer an IRA'){
                html = '<div class="form-card">'+
                            '<h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">'+
                                'Important information to be aware of before you begin'+
                            '</h1>'+
                        '</div>'+

                        '<div class="form-card">'+
                            '<p class="overline">Before you begin the transfer process, there are a few  things you should know:</p>'+
                            '<div class="row">'+
                                '<ul>'+
                                    '<li>Make sure you have liquidated the portion of your current IRA that you would like to invest before initiating this transfer.</li>'+
                                    '<li>You will need to provide the following information on your current IRA: the custodian, account number, and account type. For SIMPLE IRAs, you will also need to provide the date of your first contribution. View IRS SIMPLE IRA Transfer Rules →</li>'+
                                    '<li>We can only accommodate like-kind transfers into Traditional and Roth IRAs at this time. If you would like to fund your IRA another way, please contact our team.</li>'+
                                    '<li>Please check that your current IRA custodian is ACAT eligible. If your current IRA custodian is not ACAT eligible, please contact our team.</li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>';
                $('#ira-types-span').html(html);
                $('#ira-type-option-span').html('');
            }else{
                html = '<div class="form-card">'+
                            '<h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">'+
                                'Important information to be aware of before you begin'+
                            '</h1>'+
                        '</div>'+

                        '<div class="form-card">'+
                            '<p class="overline">Before you begin the rollover process, there are a few things you should know:</p>'+
                            '<div class="row">'+
                                '<ul>'+
                                    '<li>Sell non-liquid assets in your account | Make sure you have sold any non-liquid assets in your current retirement account that you would like to rollover.</li>'+
                                    '<li>Locate your account information | You will need to provide the following information on your current retirement account: account type and type of contributions made to the account.</li>'+
                                    '<li>Steps you will need to take to complete your rollover | You may be required to contact your previous provider to initiate the rollover. We will provide you with all of the necessary instructions.</li>'+
                                    '<li>What you should expect on timing | It may take weeks for the funds to transfer from your previous provider into your Fundrise IRA. We will notify you as soon as funds are available in your IRA to invest.</li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>';
                $('#ira-types-span').html(html);
                $('#ira-type-option-span').html('');
            }
        });

        $('body').on('change', 'input[name="ira_type"]', function() {
            var ira_type = $("input[name='ira_type']:checked").val();
            var html = '';
            if(ira_type == 'Traditional IRA'){
                html = '<div class="form-card">'+
                            '<h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">'+
                                'How much would you like to invest? '+
                            '</h1>'+
                            '<p class="overline">Initial contribution</p>'+
                            '<div class="form-group">'+
                                '<label for="inputAddress2">CONTRIBUTION AMOUNT</label>'+
                                '<input type="text" class="form-control" id="inputAddress2" placeholder="Enter an amount">'+
                            '</div>'+
                        '</div>';
                $('#ira-type-option-span').html(html);
            }else if(ira_type == 'Roth IRA'){
                html = '<div class="form-card">'+
                            '<h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">'+
                                'How much would you like to invest? '+
                            '</h1>'+
                            '<p class="overline">Initial contribution</p>'+
                            '<div class="form-group">'+
                                '<label for="inputAddress2">CONTRIBUTION AMOUNT</label>'+
                                '<input type="text" class="form-control" id="inputAddress2" placeholder="Enter an amount">'+
                            '</div>'+
                        '</div>';
                $('#ira-type-option-span').html(html);
            }
        });
    </script>
@endsection
