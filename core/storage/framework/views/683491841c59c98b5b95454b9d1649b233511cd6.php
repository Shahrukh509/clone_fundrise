

<div class="put-view-here">
 <section class=" container-fluid d-flex justify-content-center fom_sec ">
   <div class="col-12 col-lg-8 ">
                <p class="overline"><?php echo e($question->overline); ?></p>

                <h1 class="heading-2  pb-3"><?php echo e($question->question); ?></h1>

                <form id="form-question" name="leadCapture" class="lead-capture position-relative mt-25" action="<?php echo e($url); ?>" data-slug="<?php echo e($url_slug); ?>" data-question-id="<?php echo e($question->id); ?>">
                    <div class="lead-capture__fieldset">
                        <div class="field__inner mb-200 overflow-hidden-lg" aria-labelledby="email">

                            <ul class="radio-checkbox-list pl-0">
                                <?php $__currentLoopData = $question->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                <?php
                                $answer = \App\Models\UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_answer_id',$data->id)->first();
                                ?>

                                <li class="radio-checkbox-item-large"><label>
                                    <input type="radio" id="question" name="question" data-answer="<?php echo e($data->options); ?>"
                                            data-test="TAXABLE" value="<?php echo e($data->id); ?>"<?php if(!empty($answer)): ?>
                                            <?php echo e($answer->questionaire_answer_id == $data->id? 'checked':''); ?><?php endif; ?>>
                                           
                                            <span class="mask"></span>
                                        <div class="pl-3">
                                            <p class="font-weight-bold heading-text-color mb-0"><?php echo e($data->options); ?></p>
                                            <p class="mt-0 "><?php echo e($data->description?? null); ?></p>
                                        </div>
                                    </label>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </ul>

                        </div>

                        
                     <div class="row">
                            <div class="col">
                                    <div class=" d-flex justify-content-start    pt-4">
                                <a id="ajaxback" class="button  bg-light text-dark button-fundrise-orange"
                                     data-test="lead-capture-submit" data-prev-url="<?php echo e($prev_url?? null); ?>"  data-url-slug = "<?php echo e($pre_slug_url??  null); ?>"> <small>Back</small>
                                      </a>
                            </div>
                         </div>
                          <div class="col">
                                    <div class=" d-flex justify-content-end   pt-4">
                                <button type="submit" class="button  button-fundrise-orange"
                                    data-test="lead-capture-submit"> Continue </button>
                            </div>
                         </div>
                     </div>
                    </div>
                </form>
        </div>
    </section>
</div>



<?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/user/auth/questionnaire/questions.blade.php ENDPATH**/ ?>