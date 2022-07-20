$(document).on('click','#add-account',function(){ 

   var url = $(this).attr('url');

         // HOLDER 1
   var account_type1 = $('#account_type_1').val();
   var line_address1_1 = $('#line_address_1_1').val();
   var line_address2_1 = $('#line_address_2_1').val();
   var city1 = $('#city1').val();
   var state1 = $('#state1').val();
   var zip_code1 = $('#zip_code1').val();
      // HOLDER 2
   var line_address1_2 = $('#line_address_1_2').val();
   var line_address2_2 = $('#line_address_2_2').val();
   var city2 = $('#city2').val();
   var state2 = $('#state2').val();
   var zip_code2 = $('#zip_code2').val();


   // alert(zip_code2);
   // return false;

   $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "post",
    url: url,
    data: {
    account_type1: account_type1,
    line_address1_1:line_address1_1,
    line_address2_1:line_address2_1,
    city1:city1,
    state1:state1,
    zip_code1:zip_code1,

    line_address1_2:line_address1_2,
    line_address2_2:line_address2_2,
    city2:city2,
    state2:state2,
    zip_code2:zip_code2

     },
    // dataType: "json",
    beforeSend:function(){

    $('.add-account').attr('disabled',true);
    $('.add-account').html('Please wait');
    $(document).find('span.text-error').text('');

    },
    success: function(response){


    $('#load-button').attr('disabled',false);
    $('#load-button').html('add');
   
    if(response.error_issue == true){

    // alert('at error true');

    $.each(response.error,function(prefix,val){
       $('.add-account').attr('disabled',false);
    $('.add-account').html('Save');

    $('span.'+prefix+'_error').text('*'+ val);

      });

   }

   if(response.success == false)
    {

       $('.add-account').attr('disabled',false);
    $('.add-account').html('Save');


     Swal.fire({
    icon: 'error',
    title: 'Sorry',
    text: 'Unable to add joint acount',
    });
   }


    if(response.success == true)
    {

      $('.add-account').attr('disabled',false);
    $('.add-account').html('Save');
    
     Swal.fire({
    icon: 'success',
    title: 'Success',
    text: 'Successfully added joint account',
    });
   }

     }

    });
 });
