<section class=" container-fluid d-flex justify-content-center fom_sec ">
    <div class="col-12 col-lg-8 ">
        <p class="overline">PASSWORD</p>
        <p class="font-style-italic mt-0 mb-150"> 
            Set a secure password to create your account and save your responses. 
        </p>
        <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">Choose a Password</h1>
        <form id= "form_password" data-url ="{{ route('user.personal-info.password.store') }}"name="leadCapture" class="lead-capture position-relative mt-25" method="POST" after-url = "{{ route('user.step.account.type') }}" data-id = {{ $id }}>
            @csrf
            <div class="lead-capture__fieldset">
                <div class="field__inner mb-200 overflow-hidden-lg" aria-labelledby="email">
                    <div>
                        <label class="field__label">
                            <span  class="show-for-sr">CREATE PASSWORD</span>
                        </label>
                        <div class="field__input">
                            <div class="form-group">
                                <div class="input-group" id="show_hide_password">
                                    <input id="password" class="form-control"  type="password" placeholder="password" name="password">
                                    <div class="input-group-addon fa_eye">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <span style="color:red" class="text-danger error-text password_error"></span>
                            </div>
                        </div>
                    </div>

                    <div class="p_txt">
                        <p class="text-muted">By continuing you indicate you have reviewed and agree to the <span><a href="#">Terms of Service</a></span> and <span><a href="#">Privacy Policy</a></span> , and have received a
                        copy of Fundrise Advisors <span><a href="#">Form ADV Part II </a></span>, Fundrise Advisors <span><a href="#">Form CRS </a></span> , and Fundrise Advisors  <span><a href="#">Client Agreement. </a></span></p>
                    </div>

                </div>
                <div class=" d-flex justify-content-end   pt-4">
                    <button id="load-button" type="submit" class="button  button-fundrise-orange"
                        data-test="lead-capture-submit"> Continue </button>
                </div>
            </div>
        </form>
    </div>  
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).on('click', '.fa_eye', function(){
        $('#password').attr('type', 'text');
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).on('click', '.fa_eye', function(){
        $('#password').attr('type', 'text');
    });
</script>