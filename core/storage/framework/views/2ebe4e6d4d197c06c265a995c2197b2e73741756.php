<?php
    $subscribeContent = getContent('subscribe.content',true);
?>
<section class="pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="subscribe-wrapper bg_img" data-background="<?php echo e(getImage('assets/images/frontend/subscribe/'.@$subscribeContent->data_values->image,'1920x1281')); ?>">
              <div class="row align-items-center">
                <div class="col-lg-5">
                  <h2 class="title"><?php echo app('translator')->get(@$subscribeContent->data_values->heading); ?></h2>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-4">
                  <form class="subscribe-form" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="email" class="form-control" name="email" placeholder="<?php echo app('translator')->get('Email Address'); ?>">
                    <button type="submit" class="subscribe-btn"><i class="las la-envelope"></i></button>
                  </form>
                </div>
              </div>
            </div><!-- subscribe-wrapper end -->
          </div>
        </div>
      </div>
    </section>

    <?php $__env->startPush('script'); ?>
<script type="text/javascript">

    (function ($) {
        "use strict";
            $('.subscribe-form').on('submit',function(e){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                e.preventDefault();
                var email = $('input[name=email]').val();
                $.post('<?php echo e(route('subscribe')); ?>',{email:email}, function(response){
                    if(response.errors){
                        for (var i = 0; i < response.errors.length; i++) {
                            iziToast.error({message: response.errors[i], position: "topRight"});
                        }
                    }else{
                        iziToast.success({message: response.success, position: "topRight"});
                    }
                });
            });

    })(jQuery);
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/sections/subscribe.blade.php ENDPATH**/ ?>