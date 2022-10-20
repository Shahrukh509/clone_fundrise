                   // for email

$(document).on('submit','#form',function(e){
    e.preventDefault();
    var method = $(this).attr('method');
    var url = $(this).attr('action');
    var email = $('#email').val();
    // alert(url);
    // return false;
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "post",
    url: url,
    data: {
    email: email },
    // dataType: "json",
    beforeSend:function(){

    $('#load-button').attr('disabled',true);
    $('#load-button').html('Please wait');
    $(document).find('span.text-error').text('');

    },
    success: function(response){


    $('#load-button').attr('disabled',false);
    $('#load-button').html('add');
    if(response.exist == true){

    // alert('at response exist');
    location.href = response.data;

    }
    if(response.error_issue == true){

    // alert('at error true');

    $.each(response.error,function(prefix,val){

    $('span.'+prefix+'_error').text('*'+ val);

    });

    }
    if(response.error_issue != true && response.exist != true ){

    var url = "password";
    window.history.pushState({path: url}, "", url);
    // window.location.replace("http:www.example.com");
    // console.log(response);
    // return false;
    $('.put-view-here').html(response);

    }
    }

    });
});


// end for email


                  // for password ajax

$(document).on('submit','#form_password',function(e){
  e.preventDefault();
  var method = $(this).attr('method');
  var url = $(this).attr('data-url');
  var id = $(this).attr('data-id');
  var password = $('#password').val();
  var after_url = $(this).attr('after-url');
  // alert(after_url);
  // return false;
  $.ajax({
  headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  type: "post",
  url: url,
  data: {
  password: password, id:id
   },
  // dataType: "json",
  beforeSend:function(){

  $('#load-button').attr('disabled',true);
  $('#load-button').html('Please wait');
  $(document).find('span.text-error').text('');

  },
  success: function(response){

    if(response.error_issue == true){

    // alert('at error true');

    $.each(response.error,function(prefix,val){

    $('span.'+prefix+'_error').text('*'+ val);

    });
    $('#load-button').attr('disabled',false);
    $('#load-button').html('Continue');

    }
    if(response.exist == false){

    Swal.fire({
    icon: 'error',
    title: 'Sorry',
    text: 'You have to add your email first!',
    footer: '<a href="http://localhost/towork/questionnaire/personal-info">register your email</a>'
    })

    }
    if(response.error_issue != true && response.exist != false ){
    // console.log(response);
    window.history.pushState({path: after_url}, "", after_url);
    // window.location.replace("http:www.example.com");
    $('.put-view-here').html(response);

    }
    }

    });
});
               // END PASSWORD

               // FOR account-type



$(document).on('change','#age',function(){

// if ($(this).val() >= 18) {

//   $('.button-fundrise-orange').css('background-color','#aa9469');
//   $('.button-fundrise-orange').attr('disabled',false);

// }
// else{
//   $('.age-error').text('Age must be greater than 18 to proceed');
//     $('.age-error').css('color','red');
// }

});
$(document).on('submit','#form-account-type',function(e){
    e.preventDefault();

    var url = $(this).attr('action');
    var account_type = $('input[name="account_type"]:checked').val();
    var questionaire_id = $(this).attr('question-id');

    // var after_url = $(this).attr('after-url');
    // alert(account_type);
    // return false;
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "post",
    url: url,
    data: {
    account_type: account_type,
    questionaire_id:questionaire_id
    },
    // dataType: "json",
    beforeSend:function(){

    $('#load-button').attr('disabled',true);
    $('#load-button').html('Please wait');

    },
    success: function(response){

    if(response.added == false){

    Swal.fire({
    icon: 'error',
    title: 'Sorry',
    text: 'something bad happened! unable to add data'

    })

    }
  
    // console.log(response);
    var after_url = 'age';
    console.log(response);
    window.history.pushState({path: after_url}, "", after_url);
    // window.location.replace("http:www.example.com");
    $('.put-view-here').html(response);

    }

    });
});


                // END account-type

                 // FOR AGE


// $(document).on('submit','#form-age',function(e){
//     e.preventDefault();

//     var url = $(this).attr('action');
//     var age = $('#age').val();

//     // var after_url = $(this).attr('after-url');
//     // alert(age);
//     // return false;
//     $.ajax({
//     headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     },
//     type: "get",
//     url: url,
//     data: {
//     age: age
//     },
//     // dataType: "json",
//     beforeSend:function(){

//     $('#load-button').attr('disabled',true);
//     $('#load-button').html('Please wait');
//     $(document).find('span.text-error').text('');

//     },
//     success: function(response){

//     if(response.error_issue == true){

//     // alert('at error true');

//     $.each(response.error,function(prefix,val){

//     $('span.'+prefix+'_error').text('*'+ val);

//     });
//     $('#load-button').attr('disabled',false);
//     $('#load-button').html('Continue');

//     }
//     if(response.added == false){

//     Swal.fire({
//     icon: 'error',
//     title: 'Sorry',
//     text: 'something bad happened! unable to add data'

//     })

//     }
//     if(response.error_issue != true && response.added != false){
//     // console.log(response);


//     // var after_url = 'signup-checkout/signup';
//     // window.history.pushState({path: after_url}, "", after_url);
//     // // window.location.replace("http:www.example.com");
//     // $('.put-view-here').html(response);
//     if(response.account_type=='retired'){
//                     var after_url = 'signup-checkout/signup';
//                 }else{
//                     var after_url = 'investment-experience';
//                 }
//                 window.history.pushState({path: after_url}, "", after_url);
//                 $('.put-view-here').html(response.view);

//     }
//     }

//     });
// });
$(document).on('submit','#form-age',function(e){
    e.preventDefault();

    var url = $(this).attr('action');
    var account_type = $('#account-type').val();
    var age = $('#age').val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "get",
        url: url,
        data: {
            age: age,
            account_type: account_type,
        },
        beforeSend:function(){
            $('#load-button').attr('disabled',true);
            $('#load-button').html('Please wait');
            $(document).find('span.text-error').text('');
        },
        success: function(response){
            if(response.error_issue == true){
                $.each(response.error,function(prefix,val){
                    $('span.'+prefix+'_error').text('*'+ val);
                });
                $('#load-button').attr('disabled',false);
                $('#load-button').html('Continue');
            }
            if(response.added == false){
                Swal.fire({
                    icon: 'error',
                    title: 'Sorry',
                    text: 'something bad happened! unable to add data'
                })
            }
            if(response.error_issue != true && response.added != false){
                if(response.account_type=='retired'){
                    var after_url = 'signup-checkout/signup';
                    window.history.pushState({path: after_url}, "", after_url);
                    $('.put-view-here').html(response.view);
                }else{
                    var after_url = 'investment-experience';
                    window.history.pushState({path: after_url}, "", after_url);
                    $('.put-view-here').html(response);
                }
                
            }
        }
    });
});


                         // END AGE


                  // FOR all question



// $(document).on('blur','#age',function(){
// if ($(this).val() >= 18) {

//   $('.button-fundrise-orange').css('background-color','#aa9469');
//   $('.button-fundrise-orange').attr('disabled',false);

// }

// });
$(document).on('submit','#form-question',function(e){
    e.preventDefault();

    var url = $(this).attr('action');
    var answer_id = $('input[name="question"]:checked').val();
    var option = $('#question').attr('data-answer');
    var slug_url = $(this).attr('data-slug');
    var question_id = $(this).attr('data-question-id');

    // var after_url = $(this).attr('after-url');
    // alert(url);
    // return false;
    $.ajax({
    type: "get",
    url: url,
    data: {
    answer_id: answer_id,question_id:question_id
    },
    // dataType: "json",
    beforeSend:function(){

    $('#load-button').attr('disabled',true);
    $('#load-button').html('Please wait');
    $(document).find('span.text-error').text('');

    },
    success: function(response){

    // if(response.error_issue == true){

    //   // alert('at error true');

    //  $.each(response.error,function(prefix,val){

    //  $('span.'+prefix+'_error').text('*'+ val);

    //  });
    //   $('#load-button').attr('disabled',false);
    // $('#load-button').html('Continue');

    // }
    // if(response.added == false){

    //  Swal.fire({
    //      icon: 'error',
    //      title: 'Sorry',
    //      text: 'something bad happened! unable to add data'

    //    })

    // }

    // console.log(response);
    // var after_url = 'investment-experience';
    window.history.pushState({path: slug_url}, "", slug_url);
    // window.location.replace("http:www.example.com");
    $('.put-view-here').html(response);


    }

    });
});





// for saving survey

// $(document).on('submit','#form-question-survey',function(e){
//    e.preventDefault();

//     var url = $(this).attr('action');
//     var answer_id = $('input[name="survey"]:checked').val();
//     var option = $('#survey').attr('data-answer');
//     var slug_url = $(this).attr('data-slug');

//     // var after_url = $(this).attr('after-url');
//     // alert(slug_url);
//     // return false;
//     $.ajax({
//      type: "get",
//      url: url,
//      data: {
//      answer_id: answer_id,option:option
//      },
//      // dataType: "json",
//      beforeSend:function(){

//        $('#load-button').attr('disabled',true);
//       $('#load-button').html('Please wait');
//       $(document).find('span.text-error').text('');

//      },
//      success: function(response){

//       // if(response.error_issue == true){

//       //   // alert('at error true');

//       //  $.each(response.error,function(prefix,val){

//       //  $('span.'+prefix+'_error').text('*'+ val);

//       //  });
//       //   $('#load-button').attr('disabled',false);
//       // $('#load-button').html('Continue');

//       // }
//       // if(response.added == false){

//       //  Swal.fire({
//       //      icon: 'error',
//       //      title: 'Sorry',
//       //      text: 'something bad happened! unable to add data'

//       //    })

//       // }

//           // console.log(response);
//         // var after_url = 'investment-experience';
//         window.history.pushState({path: slug_url}, "", slug_url);
//      // window.location.replace("http:www.example.com");
//        $('.put-view-here').html(response);


//     }

//     });
//  });



// end of saving survey

              
                // ajax BACK
$(document).on('click','#ajaxback',function(e){
    e.preventDefault();
    // var url = $(this).attr('data-url');
    var slug_url = $(this).attr('data-url-slug');
    var prev_url = $(this).attr('data-prev-url');
    // var route = $(this).attr('data-route');

    // alert(slug_url);
    // return false;

    $.ajax({

     headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },

    type: "get",
    url: prev_url,
    data: {
    ajaxback: true
    },
    // dataType: "json",
    // beforeSend:function(){

    //   $('#load-button').attr('disabled',true);
    //  $('#load-button').html('Please wait');
    //  $(document).find('span.text-error').text('');

    // },
    success: function(response){



    // var after_url = 'investment-experience';
    window.history.pushState({path: slug_url}, "", slug_url);
    // window.location.replace("http:www.example.com");
    $('.put-view-here').html(response);


    }

    });


})

                   // END OF AjaXBACK


                 // Multip-step-form script

$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(document).on('click', ".next",function(){

// alert('hi at next');

current_fs = $(this).parent();
next_fs = $(this).parent().next();
var url = $('.whereTo').attr('data-action');
var firstname = $('input[name="firstname"]').val();
var lastname = $('input[name="lastname"]').val();
var country_citizen = $('select[name="country_of_citizenship"]').val();
var country_residence = $('select[name="country_of_residence"]').val();

// alert(url);
// return false;

               //Add Class Active
$.ajax({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
type: "post",
url: url,
data: {
firstname: firstname,lastname:lastname,country_citizen:country_citizen,country_residence:country_residence},
// dataType: "json",
beforeSend:function(){

$('input[name="next"]').attr('disabled',true);
$('input[name="next"]').html('Please wait');

$(document).find('span.error-text').text('');

},
success: function(response){


$('input[name="next"]').attr('disabled',false);
$('input[name="next"]').html('Next Step');
// if(response.exist == true){

//  // alert('at response exist');
//  location.href = response.data;

// }
if(response.error_issue == true){

// alert('at error true');

$.each(response.error,function(prefix,val){

$('span.'+prefix+'_error').text('*'+ val);

});

}
if(response.success == true){

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



}
}

});

});

                   // for next2 button

$(document).on('change','.check-account',function(){
 var input=$('input[name="form_account"]:checked').val();
 if(input == 78){
  
   $('div.choose-account-type').css("display", "none");
  $('div.display-individual-form').css("display", "block");

 }
 if(input == 79){

  $('div.display-individual-form').css("display", "none");
    $('div.choose-account-type').css("display", "block");
 }

});



$(document).on('click', ".next2",function(){


current_fs = $(this).parent();
next_fs = $(this).parent().next();
var url = $('.toAccountDetails').attr('data-action');
var questionaire_id = $('.check-account').attr('data-id');
var question_answer_id=$('input[name="form_account"]:checked').val();
var mobile = $('input[name="mobile"]').val();
var address = $('input[name="address"]').val();
var city = $('input[name="city"]').val();
var state = $('#state').val();
var zip_code = $('input[name="zip_code"]').val();

// alert(question_answer_id);
// return false;

                //Add Class Active
$.ajax({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
type: "post",
url: url,
data: {
    questionaire_id:questionaire_id, form_account :question_answer_id,
mobile:mobile, address:address,
 city:city, state:state, zip_code:zip_code
  },
// dataType: "json",
beforeSend:function(){

$('input[name="next2"]').attr('disabled',true);
$('input[name="next2"]').html('Please wait');

$(document).find('span.error-text').text('');

},
success: function(response){


$('input[name="next2"]').attr('disabled',false);
$('input[name="next2"]').html('Next Step');
// if(response.exist == true){

//  // alert('at response exist');
//  location.href = response.data;

// }
if(response.error_issue == true){

// alert('at error true');

$.each(response.error,function(prefix,val){

$('span.'+prefix+'_error').text('*'+ val);

});

}
if(response.success == true){

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



}
}

});

});
// for next2 button
    $(document).on('click', ".retired-next2",function(){
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        var url = $('.account-basic-address').attr('data-action');
        var account_type = $('input[name="account_type"]').val();
        var address = $('input[name="address"]').val();
        var city = $('input[name="city"]').val();
        var state = $('#input-state option:selected').val();
        var zip = $('input[name="zip"]').val();
        var phone = $('input[name="phone"]').val();
        var social_security = $('input[name="social_security"]').val();
        var date_of_birth = $('input[name="date_of_birth"]').val();
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post",
            url: url,
            data: {
                address:address, city:city, state:state, zip:zip, account_type:account_type, 
                phone:phone, social_security:social_security, date_of_birth:date_of_birth
            },
            beforeSend:function(){
                $('input[name="next2"]').attr('disabled',true);
                $('input[name="next2"]').html('Please wait');
                $(document).find('span.error-text').text('');
            },
            success: function(response){
                $('input[name="next2"]').attr('disabled',false);
                $('input[name="next2"]').html('Next Step');

                if(response.error_issue == true){
                    $.each(response.error,function(prefix,val){
                        $('span.'+prefix+'_error').text('*'+ val);
                    });
                }
                if(response.success == true){
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
                }
            },
            error: function(response) {
                $('#error-address').text(response.responseJSON.errors.address);
                $('#error-city').text(response.responseJSON.errors.city);
                $('#error-state').text(response.responseJSON.errors.state);
                $('#error-zip').text(response.responseJSON.errors.zip);
                $('#error-phone').text(response.responseJSON.errors.phone);
                $('#error-social_security').text(response.responseJSON.errors.social_security);
                $('#error-date_of_birth').text(response.responseJSON.errors.date_of_birth);
            },
        });
    });
    // end next2 button
                 // end next2 button



            


                 // for next3 button
$(document).on('change','.check-bank',function(){
  
 var input=$(this).attr('data-option');
   // alert(input);
 if(input == 'Link a bank account'){
  
   $('div.link-bank-account').css("display", "block");
  $('div.bank-account-info').css("display", "none");

 }
 if(input == 'Enter a bank account manually'){

    $('div.link-bank-account').css("display", "none");
  $('div.bank-account-info').css("display", "block");
 }

});
                 // formatting social security number
 $(document).on('keyup','#social_security', function() {
     var res = this.value, //grabs the value
         res = res.replace(/\D/g, '');
    res = res.replace(/^(\d{3})/, '$1-');
    res = res.replace(/-(\d{2})/, '-$1-');
    res = res.replace(/(\d)-(\d{4}).*/, '$1-$2');
    $("#social_security").val(res); //spits the value into the input
});


    // end of formatting social security number
 // checking routing number
$(document).on('keyup','#routing_number',function(){
$('routing_number_error').text('');

var val = $(this).val();
var len = val.length;
if(len > 9){
 $('routing_number_error').text('value should not be more than 9 digits');
}

});
 // end of checking routing

           // saving form



$(document).on('click', ".next3",function(){

// alert('hi at q3');
// return false;
current_fs = $(this).parent();
next_fs = $(this).parent().next();
var url = $('.toFunding').attr('data-action');
var amount = $('#initial_contribution').val();
var question_id=$(this).attr('id');
var answer_id = $('input[name="source_bank_account"]:checked').val();
var social_sec_num = $('input[name="social_security_number"]').val();
var dob = $('#date_of_birth').val();
var account_type = $('#bank_account_type').val();
var bank_name = $('input[name="bank_name"]').val();
var routing_num = $('input[name="routing_number"]').val();
var bank_account_number = $('input[name="bank_account_number"]').val();
var confirm_bankaccno= $('input[name="confirm_bank_account_number"]').val();
 
 // alert(dob);
 // return false;

                //Add Class Active
$.ajax({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
type: "post",
url: url,
data: {
    questionaire_id:question_id, answer_id :answer_id,
    amount: amount,social_sec_num:social_sec_num,routing_num:routing_num,
    dob:dob,account_type:account_type,bank_name:bank_name,
    bank_account_number:bank_account_number,confirm_bankaccno:confirm_bankaccno
    },
// dataType: "json",
beforeSend:function(){

$('input[name="next3"]').attr('disabled',true);
$('input[name="next3"]').html('Please wait');
$(document).find('span.error-text').text('');

},
success: function(response){


$('input[name="next3"]').attr('disabled',false);
$('input[name="next3"]').html('Next Step');
// if(response.exist == true){

//  // alert('at response exist');
//  location.href = response.data;

// }
if(response.error_issue == true){

// alert('at error true');

$.each(response.error,function(prefix,val){

$('span.'+prefix+'_error').text('*'+ val);

});

}
if(response.success == true){

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



}
}

});

});




                 // end of next3 button

$(document).on('click', ".previous",function(){

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
                     // end of multi step form







