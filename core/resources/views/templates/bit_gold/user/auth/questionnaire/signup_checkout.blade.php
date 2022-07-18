 <div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
               
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>BASIC INFO</strong></li>
                                <li id="personal"><strong>ACCOUNT DETAILS</strong></li>
                                <li id="payment"><strong>FUNDING</strong></li>
                                 <li id="payment"><strong>FUNDING</strong></li>
                                <li id="confirm"><strong>AGREEMENTS</strong></li>
                                
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                   <p class="overline">Let's finish getting your account set up.</p>
                                   <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">What is your legal name?</h1>
                                     <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="Last name">
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
                                            <select class="form-control" id="exampleFormControlSelect1">
                                           <option>America</option>
                                            <option>Aus</option>
                                            <option>Canda</option>
                                            <option>UK</option>
                                            <option>UAE</option>
                                            </select>
                                        </div>
                                        </div>
                                          <div class="col-12">
                                          <div class="form-group">
                                            <label for="exampleFormControlSelect1">COUNTRY OF RESIDENCE</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>America</option>
                                            <option>Aus</option>
                                            <option>Canda</option>
                                            <option>UK</option>
                                            <option>UAE</option>
                                            </select>
                                        </div>
                                        </div>

                                        
                                        
                                    </div>


                                    

                                    
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="phno" placeholder="Contact No."/>
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No."/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>

                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                        <br>
                                    </div>
                                    <label class="pay">Card Holder Name*</label>
                                    <input type="text" name="holdername" placeholder=""/>
                                    <div class="row">
                                        <div class="col-9">
                                            <label class="pay">Card Number*</label>
                                            <input type="text" name="cardno" placeholder=""/>
                                        </div>
                                        <div class="col-3">
                                            <label class="pay">CVC*</label>
                                            <input type="password" name="cvcpwd" placeholder="***"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Expiry Date*</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                            </fieldset>
                            
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  


        <!-- script for step form -->
        <script>
            $(document).ready(function(){
    
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
        }, 
        duration: 600
    });
});

$(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
        }, 
        duration: 600
    });
});

$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
});

$(".submit").click(function(){
    return false;
})
    
});
</script>