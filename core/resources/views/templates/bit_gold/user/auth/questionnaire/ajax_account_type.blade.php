     @php 
    $answer = \App\Models\UserAnswer::where('user_id',Auth()->user()->id)->first();
    @endphp
<div class="put-view-here">
   <section class=" container-fluid d-flex justify-content-center fom_sec ">

        <div class="col-12 col-lg-8 ">
                <p class="overline">{{ $question->overline }}</p>

                <h1 class="heading-2  pb-3">{{ $question->question }}</h1>

                <form id="form-account-type" name="leadCapture" class="lead-capture position-relative mt-25" action="{{ route('user.step.account.type.store') }}" data-slug="password" question-id="{{ $question->id }}">
                    <div class="lead-capture__fieldset">
                        <div class="field__inner mb-200 overflow-hidden-lg" aria-labelledby="email">

                            <ul class="radio-checkbox-list pl-0">
                                @foreach($question->options as $data)
                                <li class="radio-checkbox-item-large"><label>
                                    <input type="radio" id="account_type" name="account_type"
                                            data-test="TAXABLE" value="{{ $data->id }}" {{ $answer->questionaire_answer_id == $data->id?'checked':'' }}>
                                            <span class="mask"></span>
                                        <div class="pl-3">
                                            <p class="font-weight-bold heading-text-color mb-0">{{ $data->options }}</p>
                                            <p class="mt-0 ">{{ $data->description  }}</p>
                                        </div>
                                    </label>
                                </li>
                                @endforeach
                            </ul>

                        </div>

                        
                     <div class="row">
                            <div class="col">
                                    <div class=" d-flex justify-content-start    pt-4">
                                <button id="ajaxback" class="button  bg-light text-dark button-fundrise-orange"
                                    data-test="lead-capture-submit" data-prev-url="{{ route('user.personal-info.email.store') }}"  data-url-slug = "password"> <small>Back</small> </button>
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



