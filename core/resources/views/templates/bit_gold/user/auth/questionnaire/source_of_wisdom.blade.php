<div class="put-view-here">
   <section class=" container-fluid d-flex justify-content-center fom_sec ">

        <div class="col-12 col-lg-8 ">
                <p class="overline">INVESTMENT EXPERIENCE</p>

                <h1 class="heading-2  pb-3">{{ $question->question }}</h1>

                <form id="form-invest" name="leadCapture" class="lead-capture position-relative mt-25" action="{{ route('user.step.invest.store') }}">
                    <div class="lead-capture__fieldset">
                        <div class="field__inner mb-200 overflow-hidden-lg" aria-labelledby="email">

                            <ul class="radio-checkbox-list pl-0">
                                @foreach($question->options as $data)
                                @php
                                $para = explode("-",$data->options);
                                $p1= $para[0];
                                $p2= $para[1];
                                @endphp
                                <li class="radio-checkbox-item-large"><label><input type="radio" id="invest" name="invest" data-answer="{{ $p1 }}"
                                            data-test="TAXABLE" value="{{ $data->id }}">
                                            <span class="mask"></span>
                                        <div class="pl-3">
                                            <p class="font-weight-bold heading-text-color mb-0">{{ $p1 }}</p>
                                            <p class="mt-0 ">{{ $p2 }}</p>
                                        </div>
                                    </label>
                                </li>
                                @endforeach
                            </ul>

                        </div>

                        
                     <div class="row">
                            <div class="col">
                                    <div class=" d-flex justify-content-start    pt-4">
                                <button onclick="history.back()" class="button  bg-light text-dark button-fundrise-orange"
                                    data-test="lead-capture-submit"> <small>Back</small> </button>
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



