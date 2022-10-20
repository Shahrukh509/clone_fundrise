<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
               
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" class="from_label">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active whereTo" data-action="{{ route('user.store.signup.basicinfo') }}" id="account"><strong>BASIC INFO</strong></li>

                                <li id="personal" class="toAccountDetails" data-action="{{ route('user.store.signup.accountdetails') }}"><strong>ACCOUNT DETAILS</strong></li>

                                <li id="payment" class="toFunding" data-action="{{ route('user.store.signup.funding') }}"><strong>Funding</strong>
                                </li>                                 <li id="payment"><strong>AGREEMENTS</strong></li>
                                <li id="confirm"><strong>REVIEW & FINISH</strong></li>
                                
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
                        @php
                        $question = \App\Models\Questionaire::where('url_slug','select-account-form')->first();
                        $answer = \App\Models\UserAnswer::where('user_id',Auth()->user()->id)->first();
                        @endphp

                            <fieldset>
                                 <div class="form-card">
                                   <p class="overline">{{ $question->overline }}</p>
                                   <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                     {{ $question->question }}
                                    </h1>

                                   @foreach($question->options as $data)

                                    <div class="form-check pt-3">
                                        <input class="form-check-input check-account" type="radio" name="form_account" data-id="{{ $question->id }}" value="{{ $data->id }}"@if($answer) {{ $data->questionaire_id == $answer->questionaire_id? 'checked':''}}@endif>
                                        <label class="form-check-label" for="exampleRadios1">
                                           {{ $data->options }}
                                        </label>
                                    </div>
                                   
                                    @endforeach

                                    <span class=" text-danger text-error form_account_error"></span>

                                     <div class="form-group col-md-4  choose-account-type" style="display:none">
                                    <label for="inputState">Select Type</label>
                                    <select id="inputState" class="form-control">
                                        <option value="">Choose...</option>
            
                                        <option value="26">Entity account type</option>
                                        <option value="27">Joint account type</option>
                                        <option value="28">Trust account type</option>
    
                                    </select>
                                    </div>

                                     {{-- <div class="form-check pt-1">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                           Individual account
                                        </label>
                                    </div> --}}

                                    

                                    

                                    
                                </div>
                                 
                                <div class="form-card display-individual-form" style="display: none;">
                                   <p class="overline">Thanks,{{ Auth()->user()->firstname }}!</p>
                                   <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">We just need a few more details.</h1>
                                   <h2 style="font-size: 20px;">Contact Information</h2>
                                   <div class="form-group">
                                        <label for="exampleFormControlInput1">ADDRESS</label>
                                        <input type="text" class="form-control" id="address" placeholder="" name="address" value="{{ Auth()->user()->address?? null}}" >
                                        <small>This should be the address used for tax purposes</small>
                                 </div>

                                 <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ Auth()->user()->city?? null}}" >
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="state" class="form-control" name="state">
                                        <option value="">Choose...</option>
                                        <option {{ Auth()->user()->state == 'california'? 'selected':''}}>california</option>
                                        <option {{ Auth()->user()->state == 'baghdad'? 'selected':''}}>baghdad</option>
                                         <option {{ Auth()->user()->state == 'karachi'? 'selected':''}}>karachi</option>
                                    </select>
                                    </div>
                                     <div class="form-group col-md-2">
                                        <label for="inputZip">ZIP CODE</label>
                                        <input type="number" class="form-control" id="zip_code" name="zip_code" value="{{ Auth()->user()->zip_code?? null }}">
                                         <span class=" text-danger text-error zip_code_error"></span>
                                    </div>

                                     <div class="form-group col-12">
                                        <label for="inputAddress">PHONE NUMBER (MOBILE PREFERRED)</label>
                                        <input type="number" class="form-control" id="mobile" name="mobile" value="{{ Auth()->user()->mobile?? null }}" >
                                    </div>
                                    
                                </div>


                                </div>


                                
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>

                                <input type="button" name="next2" class="next2 action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>

                               <div class="form-card">
                                    <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                    How much would you like to invest? </h1>
                                   <p class="overline">Initial contribution</p>
                                  @php
                                    $contribution = \App\Models\ContributionAmount::where('user_id',Auth()->user()->id)->first();

                                    $bank_details = \App\Models\BankDetail::where('user_id',Auth()->user()->id)->first();
                                    @endphp
                                    <div class="form-group">
                                        <label for="inputAddress2">ENTER AN AMOUNT</label>
                                        <input type="number" class="form-control" id="initial_contribution" placeholder="Enter an amount" name="initial_contribution_amount" value="@if($contribution){{ $contribution->amount }}@endif">
                                        <span class=" text-danger text-error initial_contribution_amount_error"></span>
                                    </div>


                                    
                                </div>
                                @php
                                $question = \App\Models\Questionaire::where('url_slug','funds')->first();
                                @endphp

                                        <div class="form-card">
                                               <p class="overline font-style-italic">{{ $question->overline }}</p>
                                    <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                   {{ $question->question }}</h1>
                                
                                    @foreach($question->options as $data)
                                    <div class="form-check pt-3">
                                        <input class="form-check-input check-bank" type="radio" data-option="{{ $data->options }}" name="source_bank_account" id="source_bank_account" value="{{ $data->id }}" >
                                        <label class="form-check-label bank_option" for="exampleRadios1" id="bank_option">
                                          {{ $data->options }}
                                        </label> <br>
                                        <small>Use your online banking credentials to securely connect a bank account.</small>
                                    </div>
                                    @endforeach

                                    <div class="row py-2 link-bank-account" style="display:none">
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

                                         
                                    {{-- <div class="form-check pt-3">
                                        <input class="form-check-input check-bank" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Enter a bank account manually
                                        </label> <br>
                                        <small>Manually enter your bank’s routing and account numbers.</small>
                                    </div> --}}
                                    <small>
                                        <br>
                                        If you are interested in investing via wire transfer, please reach out to the Fundrise Investor Relations team at <a href="#">investments@fundrise.com.</a>
                                    </small>
                                    
                                        </div>
                                         <div class="form-card bank-account-info" style="display:none">

                                            <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                             Tax Reporting Information</h1>
                                     <div class="form-group">
                                        <label for="inputAddress2">Social security number</label>
                                        <input type="text" class="form-control" id="social_security" placeholder="xxx-xx-xxxx" name="social_security_number" value="@if($bank_details){{ $bank_details->social_security_number }}@endif">
                                        <small>We use SSL and 64 bit encryption to keep your data secure</small>

                                         <span class=" text-danger text-error social_security_number_error"></span>
                                        
                                    </div>

                                      <div class="form-group">
                                        <label for="inputAddress2">Date of birth</label>
                                        <input type="date" class="form-control" id="date_of_birth" placeholder="mm/dd/yy" name="date_of_birth" value="@if($bank_details){{ $bank_details->date_of_birth }}@endif">
                                        
                                        
                                    </div>
                                      <span class=" text-danger text-error date_of_birth_error"></span>
                                    <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                   Enter your account info </h1>
                                 
                                  

                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">ACCOUNT TYPE</label>
                                    <select class="form-control" id="" name="account_type">
                                    <option>Checking</option>
                                    </select>

                                     <span class=" text-danger text-error account_type_error"></span>

                                </div>
                                <div class="form-group">
                                        <label for="inputAddress2">Bank name</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Name" name="bank_name" value="@if($bank_details){{ $bank_details->name }}@endif">
                                        <small>Name of bank as it appears on your paper checks.</small>
                                        <img src="" alt="chck" class="img-fluid pt-3">

                                         <span class=" text-danger text-error bank_name_error"></span>
                                </div>

                                    <div class="form-group">
                                        <label for="inputAddress2">ROUTING NUMBER</label>
                                        <input type="number" class="form-control" id="inputAddress2" placeholder="routing number" name="routing_number" value="@if($bank_details){{ $bank_details->routing_number }}@endif">
                                        <small>9-digit number on the bottom left of your paper checks.</small>
                                        <span class=" text-danger text-error routing_number_error"></span>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label for="inputAddress2">ACCOUNT NUMBER</label>
                                        <input type="number" class="form-control" id="account_number" placeholder="account number" name="bank_account_number" value=@if($bank_details)"{{ $bank_details->account_number }}@endif">

                                        <span class=" text-danger text-error bank_account_number_error">
                                            
                                        </span>
                                       
                                        
                                    </div>

                                     <div class="form-group">
                                        <label for="inputAddress2">CONFIRM ACCOUNT NUMBER</label>
                                        <input type="number" class="form-control" id="confirm_account_number" placeholder="Confirm your account number by typing it again." name="confirm_bank_account_number" value="{{ $bank_details->account_number }}">
                                        <small>Confirm your account number by typing it again.</small>
                                         <span class=" text-danger text-error confirm_bank_account_number_error"></span>
                                        
                                    </div>

                                     
                                    
                                </div>
                                <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Confirm"/> -->

                                   <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next3" class="next3 action-button" value="Next Step"/ id="{{ $question->id }}">
                            </fieldset>
                            
                            <fieldset>

                                <div class="form-card">
                                    <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">
                                   Agreements </h1>
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
                                      <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous"/> -->
                               

                                    
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

 


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  


