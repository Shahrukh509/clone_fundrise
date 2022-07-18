@extends($activeTemplate.'user.auth.questionnaire.layouts.master')
@section('content')

<div class="put-view-here">
<section class=" container-fluid d-flex justify-content-center fom_sec ">

    <div class="col-12 col-lg-8 ">
            {{-- <form> --}}
                <p class="overline">Getting Started</p>
                <p class="font-style-italic mt-0 mb-150"> Tell us a bit about yourself -- we'll create your account and
                    suggest the strategy that best fits your goals. </p>
                <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">What is your email address?</h1><label
                    class="field__label">
                    <!-- <span id="emaillabel">email address</span> -->
                </label>
                <form id="form" name="leadCapture" action = "{{ route('user.personal-info.email.store') }}" method="POST" class="lead-capture position-relative mt-25">
                    @csrf
                    <div class="lead-capture__fieldset">
                        <div class="field__inner mb-200 overflow-hidden-lg" aria-labelledby="email">
                            <div>
                                <label class="field__label">
                                    <span class="show-for-sr">Email
                                        address</span></label>
                                <div class="field__input">
                                    <input id="email" name="email" type="email"
                                        class="input">
                                      </div>
                                      <span style="color:red" class="text-danger error-text email_error"></span>
                            </div>
                            <!---->
                        </div>
                        <div class=" d-flex justify-content-end   pt-4">
                            <button id="load-button"  type="submit" class="button  button-fundrise-orange"
                                data-test="lead-capture-submit"> Continue </button>
                        </div>
                    </div>
                </form>
          
        </div>
    </section>
</div>
   
<script>
      
  
</script>

@endsection






