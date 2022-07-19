// for email

$(document).on('submit','#form',function(e){
    e.preventDefault();
    var method = $(this).attr('method');
    var url = $(this).attr('action');
    var email = $('#email').val();
    // alert(id);
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
  // alert(password);
  // return false;
  $.ajax({
  headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  type: "post",
  url: url,
  data: {
  password: password, id:id },
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

// FOR AGE



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
$(document).on('submit','#form-age',function(e){
    e.preventDefault();

    var url = $(this).attr('action');
    var age = $('#age').val();

    // var after_url = $(this).attr('after-url');
    // alert(age);
    // return false;
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "get",
    url: url,
    data: {
    age: age
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
    if(response.added == false){

    Swal.fire({
    icon: 'error',
    title: 'Sorry',
    text: 'something bad happened! unable to add data'

    })

    }
    if(response.error_issue != true && response.added != false){
    // console.log(response);
    var after_url = 'investment-experience';
    window.history.pushState({path: after_url}, "", after_url);
    // window.location.replace("http:www.example.com");
    $('.put-view-here').html(response);

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
    // alert(question_id);
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
$(document).on('click', ".next2",function(){

// alert('hi at next');

current_fs = $(this).parent();
next_fs = $(this).parent().next();
var url = $('.toAccountDetails').attr('data-action');
var mobile = $('input[name="mobile"]').val();
var address = $('textarea[name="address"]').val();

// alert(address);
// return false;

//Add Class Active
$.ajax({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
type: "post",
url: url,
data: {
mobile:mobile, address:address },
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
// end next2 button

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







