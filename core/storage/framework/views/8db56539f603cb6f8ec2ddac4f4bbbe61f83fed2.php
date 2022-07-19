<?php $__env->startSection('content'); ?>

<div class="put-view-here">
 <section class=" container-fluid d-flex justify-content-center fom_sec ">

        <div class="col-12 col-lg-8 ">
           
                <p class="overline">GETTING STARTED</p>
                <p class="font-style-italic mt-0 mb-150"> Tell us a bit more about yourself and we'll suggest the strategy that best fits your goals.</p>
                <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">How old are you?</h1><label
                    class="field__label">
                    <!-- <span id="emaillabel">email address</span> -->
                </label>
                <form id="form-age"name="leadCapture" class="lead-capture position-relative mt-25" action="<?php echo e(route('user.step.age.store')); ?>">
                    <div class="lead-capture__fieldset">
                        <div class="field__inner mb-200 overflow-hidden-lg" aria-labelledby="email">
                            <div>
                                <label class="field__label">
                                    <span class="show-for-sr">AGE</span></label>
                                <div class="field__input">
                                    <div class="form-group">

                                        <div class="input-group age_input" >
                                            <input id="age"class="form-control" type="number" name="age" min="18" placeholder="18" value="<?php echo e(Auth()->user()->age?? null); ?>">
                                           
                                        </div>
                                    </div>
                                    <span style="color:red"class="text-danger error-text age_error"></span>
                                </div>
                            </div>

                           

                        </div>
                        <div class=" d-flex justify-content-end   pt-4">
                            <button id="load-button" type="submit" class="button  button-fundrise-orange "
                                data-test="lead-capture-submit"> Continue </button>
                                <span class="age-error"></span>
                        </div>
                    </div>
            </form>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make($activeTemplate.'user.auth.questionnaire.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/user/auth/questionnaire/age.blade.php ENDPATH**/ ?>