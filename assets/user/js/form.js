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
 $(document).on('submit','#mobile-number-form',function(e){
        e.preventDefault();
        let mobile = $('#mobile').val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ url('user/mobile-number') }}",
            type:"POST",
            data:{
                mobile : mobile,
            },
            success:function(response){
                if(response=='success'){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'You have updated mobile number successfully.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong try again.',
                    })
                }
            },
            error: function(response) {
                $('#error-mobile').text(response.responseJSON.errors.mobile);
            },
        });
    });

    $(document).on('submit','#password-form',function(e){
        e.preventDefault();
        let url = $(this).attr('url');
        let current_password = $('#current_password').val();
        let password = $('#password').val();
        let password_confirmation = $('#confirmed').val();
        
        // alert(url);
        // return false;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type:"POST",
            data:{
                current_password : current_password,
                password : password,
                password_confirmation : password_confirmation,
            },
            
            success:function(response){
                if(response.success==true){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'You have updated password successfully.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                    if(response.success==false){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Current password not matched.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            },
            error: function(response) {
                $('#error-current_password').text(response.responseJSON.errors.current_password);
                $('#error-password').text(response.responseJSON.errors.password);
                $('#error-confirmed').text(response.responseJSON.errors.confirmed);
            },
        });
    });
         
    $(document).on('submit','#email-form',function(e){
        e.preventDefault();
        let url = $(this).attr('url');
        let email = $('#email').val();
       
        
        // alert(email);
        // return false;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type:"POST",
            data:{
                email : email
            },
            
            success:function(response){
                if(response.success==true){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'You have updated email successfully.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                    if(response.success==false){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Unable to update email sorry !.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            },
            error: function(response) {
                $('#error-email').text(response.responseJSON.errors.email);
            },
        });
    });

    $(document).on('submit','#notification-form',function(e){
        e.preventDefault();
        let url = $(this).attr('url');
        let insight = $('input[name="insight"]:checked').val();
        let product = $('input[name="product"]:checked').val();
        let portfolio = $('input[name="portfolio"]:checked').val();
        let project = $('input[name="project"]:checked').val();
        let newsletter = $('input[name="newsletter"]:checked').val();
       
        
        // alert(newsletter);
        // return false;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type:"POST",
            data:{

            insight:insight,
            product:product,
            portfolio:portfolio,
            project:project,
            newsletter:newsletter
            },
            
            success:function(response){
                if(response.success==true){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Notification changed successfully.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                    if(response.success==false){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Unable to update notification sorry !.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            },
        });
    });


    // $(document).on('click','#dividend-reinvest',function(){
    //      check = $('input[name="dividend-reinvest"]:checked').val();
    //      // alert(check);

    //   if(check == 98)
    //     {
    //      $('#termsAndCondition').attr('required');
    //     }else{
    //       $('#termsAndCondition').removeAttr('required');
    //     }


    // });

    $(document).on('submit','#dividend-reinvest-form',function(e){
        e.preventDefault();


        let url = $(this).attr('url');
        let ques_id = $(this).attr('id-of-ques');
        let questionaire_answer_id = $('input[name="dividend-reinvest"]:checked').val();
       
        
       
        // alert(ques_id);
        // return false;


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type:"POST",
            data:{

            questionaire_answer_id:questionaire_answer_id,
            questionaire_id:ques_id

            },
            
            success:function(response){
                if(response.status=='updated'){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Dividend changed successfully.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
                    if(response.status=='notupdated'){
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Unable to update dividend sorry !.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            },
        });
    });


     $(document).on('click','.payment-update',function(e){
        e.preventDefault();
         


        let url = $('#form-payment-update').attr('url');
        let id = $(this).attr('id');
        let status = $(this).val();
       
        
       
        //  alert(id);
        // return false;


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type:"POST",
            data:{

            id:id,status:status

            },
            
            success:function(response){
                if(response.status=='updated'){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Payment status changed successfully.',
                        showConfirmButton: false,
                        timer: 2000
                    });

                    location.reload();
                    // $('.payment-update').addclass('d-none');
                }
                    if(response.status=='notupdated'){
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Unable to update payment status sorry !.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            },
        });
    });


    $(document).on('submit','#personal-info-form',function(e){
        e.preventDefault();
        // alert('hi');
        let url = $(this).attr('url');
        let firstname = $('#firstname').val();
        let lastname = $('#lastname').val();
        let address_first = $('#address_first').val();
        let address_second = $('#address_second').val();
        let city = $('#city').val();
        let state = $('#state').val();
        let zip = $('#zip').val();
        let country = $('#country').val();


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type:"POST",
            data:{
                firstname : firstname,
                lastname : lastname,
                address_first : address_first,
                address_second : address_second,
                state : state,
                zip : zip,
                city : city,
                country : country,
            },
            
            success:function(response){
                if(response=='success'){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'You have updated personal information successfully.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong try again.',
                    })
                }
            },
            error: function(response) {
                $('#error-firstname').text(response.responseJSON.errors.firstname);
                $('#error-lastname').text(response.responseJSON.errors.lastname);
                $('#error-address_first').text(response.responseJSON.errors.address_first);
                $('#error-state').text(response.responseJSON.errors.state);
                $('#error-zip').text(response.responseJSON.errors.zip);
                $('#error-city').text(response.responseJSON.errors.city);
                $('#error-country').text(response.responseJSON.errors.country);
            },
        });
    });

     $('.edit_info_class').click(function(event) {
        event.preventDefault();
        $('#viewinfo').removeClass('d-block');
        $('#viewinfo').addClass('d-none');

        $('#editinfo').removeClass('d-none');
        $('#editinfo').addClass('d-block');
    });

    $('#cancel_edit').click(function(event) {
        event.preventDefault();
        $('#viewinfo').removeClass('d-none');
        $('#viewinfo').addClass('d-block');

        $('#editinfo').removeClass('d-block');
        $('#editinfo').addClass('d-none');
    });

    //notification
    $('.edit_notif_class').click(function(event) {
        event.preventDefault();
        $('#viewnotif').removeClass('d-block');
        $('#viewnotif').addClass('d-none');

        $('#editnotif').removeClass('d-none');
        $('#editnotif').addClass('d-block');
    });

    $('#cancel_edit_notif').click(function(event) {
        event.preventDefault();
        $('#viewnotif').removeClass('d-none');
        $('#viewnotif').addClass('d-block');

        $('#editnotif').removeClass('d-block');
        $('#editnotif').addClass('d-none');
    });

    //email
    $('.edit_email').click(function(event) {
        event.preventDefault();
        $('#viewemail').removeClass('d-block');
        $('#viewemail').addClass('d-none');

        $('#editemail').removeClass('d-none');
        $('#editemail').addClass('d-block');
    });

    $('#cancel_edit_email').click(function(event) {
        event.preventDefault();
        $('#viewemail').removeClass('d-none');
        $('#viewnotif').addClass('d-block');

        $('#editemail').removeClass('d-block');
        $('#editemail').addClass('d-none');
    });

    //password
    $('.edit_password').click(function(event) {
        event.preventDefault();
        $('#viewpass').removeClass('d-block');
        $('#viewpass').addClass('d-none');

        $('#editpass').removeClass('d-none');
        $('#editpass').addClass('d-block');
    });

    $('#cancel_edit_pass').click(function(event) {
        event.preventDefault();
        $('#viewpass').removeClass('d-none');
        $('#viewpass').addClass('d-block');

        $('#editpass').removeClass('d-block');
        $('#editpass').addClass('d-none');
    });
    //mobile num

    $('.edit_number').click(function(event) {
        event.preventDefault();
        $('#view_num').removeClass('d-block');
        $('#view_num').addClass('d-none');

        $('#editnum').removeClass('d-none');
        $('#editnum').addClass('d-block');
    });

    $('#cancel_edit_num').click(function(event) {
        event.preventDefault();
        $('#view_num').removeClass('d-none');
        $('#view_num').addClass('d-block');

        $('#editnum').removeClass('d-block');
        $('#editnum').addClass('d-none');
    });
    //edit nick

    $('.edit_nick').click(function(event) {
        event.preventDefault();
        $('#view_nick').removeClass('d-block');
        $('#view_nick').addClass('d-none');

        $('#editnick').removeClass('d-none');
        $('#editnick').addClass('d-block');
    });

    $('#cancel_edit_nick').click(function(event) {
        event.preventDefault();
        $('#view_nick').removeClass('d-none');
        $('#view_nick').addClass('d-block');

        $('#editnick').removeClass('d-block');
        $('#editnick').addClass('d-none');
    });
    //edit Dividend Reinvestment

    $('.edit_dividends').click(function(event) {
        event.preventDefault();
        $('#view_dividens').removeClass('d-block');
        $('#view_dividens').addClass('d-none');

        $('#editdividends').removeClass('d-none');
        $('#editdividends').addClass('d-block');
    });

    $('#cancel_edit_dividens').click(function(event) {
        event.preventDefault();
        $('#view_dividens').removeClass('d-none');
        $('#view_dividens').addClass('d-block');

        $('#editdividends').removeClass('d-block');
        $('#editdividends').addClass('d-none');
    });
    //edit pay

    $('.edit_pay').click(function(event) {
        event.preventDefault();
        $('#view_pay').removeClass('d-block');
        $('#view_pay').addClass('d-none');

        $('#editpay').removeClass('d-none');
        $('#editpay').addClass('d-block');
    });

    $('#cancel_edit_pay').click(function(event) {
        event.preventDefault();
        $('#view_pay').removeClass('d-none');
        $('#view_pay').addClass('d-block');

        $('#editpay').removeClass('d-block');
        $('#editpay').addClass('d-none');
    });