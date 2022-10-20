<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/vendor/bootstrap.min.css')); ?>">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/all.min.css')); ?>">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/line-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/vendor/animate.min.css')); ?>">
  <!-- slick slider css -->
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/vendor/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/vendor/dots.css')); ?>">
    <?php echo $__env->yieldPushContent('style-lib'); ?>
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/main.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/custom.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/color.php')); ?>?color=<?php echo e($general->base_color); ?>&secondColor=<?php echo e($general->secondary_color); ?>">
  
  <?php echo $__env->yieldPushContent('style'); ?>
</head>
  <body>
<?php echo  fbComment() ?>
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <div class="full-wh">
    <!-- STAR ANIMATION -->
    <div class="bg-animation">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">
      <!-- header-section start  -->
  <header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/logo.png')); ?>" alt="site-logo"></a>
          <ul class="account-menu responsive-account-menu ml-3">
            <?php if(auth()->guard()->guest()): ?>
            <li class="icon"><a href="<?php echo e(route('user.login')); ?>"><i class="las la-user"></i></a></li>
            <?php else: ?>
            <li class="icon"><a href="<?php echo e(route('user.home')); ?>"><i class="las la-user"></i></a></li>
            <?php endif; ?>
          </ul> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">
              <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
              <li><a href="<?php echo e(route('plan')); ?>"><?php echo app('translator')->get('Plan'); ?></a></li>
              <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('pages',[$data->slug])); ?>"><?php echo e(__($data->name)); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('blog')); ?>"><?php echo app('translator')->get('Blog'); ?></a></li>
              <li><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>
            </ul>
            <div class="nav-right">
              <ul class="account-menu ml-3">
                <?php if(auth()->guard()->guest()): ?>
                <li class="icon"><a href="<?php echo e(route('user.login')); ?>"><i class="las la-user"></i></a></li>
                <?php else: ?>
                <li class="icon"><a href="<?php echo e(route('user.home')); ?>"><i class="las la-user"></i></a></li>
                <?php endif; ?>
              </ul> 
              <select class="select d-inline-block w-auto ml-xl-3 langSel">
                <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($item->code); ?>" <?php if(session('lang') == $item->code): ?> selected  <?php endif; ?>><?php echo e(__($item->name)); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->yieldPushContent('renderModal'); ?>


    <!-- footer section start -->
            <?php
              $links = getContent('links.element','','',1);
              $footer = getContent('footer.content',true);
              $socials = getContent('social_icon.element','','',1);
            ?>
<footer class="footer bg_img" data-background="<?php echo e(getImage('assets/images/frontend/footer/'.@$footer->data_values->image,'1920x1281')); ?>">
  <div class="footer__top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/logo.png')); ?>" alt="image"></a>
          <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('linkDetails',[slug($link->data_values->title),$link->id])); ?>"><?php echo app('translator')->get($link->data_values->title); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center">
          <p><p><?php echo app('translator')->get('© '.date('Y').' <a href="'.route('home').'" class="base--color">'.$general->sitename.'</a>. All rights reserved'); ?></p></p>
        </div>
        <div class="col-md-6">
          <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
            <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(@$social->data_values->url); ?>"><?php echo @$social->data_values->icon ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer section end -->
</div> <!-- page-wrapper end -->

<?php
    $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
?>
<?php if(@$cookie->data_values->status && !session('cookie_accepted')): ?>
  <div class="cookie__wrapper">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between">
        <p class="txt my-2">
          <?php echo @$cookie->data_values->description ?>
          <a href="<?php echo e(@$cookie->data_values->link); ?>" target="_blank"><?php echo app('translator')->get('Cookie Policy'); ?></a>
        </p>
          <button class="cmn-btn btn-md my-2 policy"><?php echo app('translator')->get('Accept'); ?></button>
      </div>
    </div>
  </div>
<?php endif; ?>
    <!-- jQuery library -->
  <script src="<?php echo e(asset($activeTemplateTrue.'/js/vendor/jquery-3.5.1.min.js')); ?>"></script>
  <!-- bootstrap js -->
  <script src="<?php echo e(asset($activeTemplateTrue.'/js/vendor/bootstrap.bundle.min.js')); ?>"></script>

  <?php echo $__env->yieldPushContent('script-lib'); ?>
  <!-- slick slider js -->
  <script src="<?php echo e(asset($activeTemplateTrue.'/js/vendor/slick.min.js')); ?>"></script>
  <script src="<?php echo e(asset($activeTemplateTrue.'/js/vendor/wow.min.js')); ?>"></script>
  <!-- dashboard custom js -->
  <script src="<?php echo e(asset($activeTemplateTrue.'/js/app.js')); ?>"></script>


  <?php echo $__env->make($activeTemplate.'partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldPushContent('script'); ?>

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "<?php echo e(url('/')); ?>/change/" + $(this).val();
        });

        $('.policy').on('click',function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('<?php echo e(route('cookie.accept')); ?>', function(response){
                iziToast.success({message: response, position: "topRight"});
                $('.cookie__wrapper').addClass('d-none');
            });
        });
    })();
</script>


</body>
</html>

  </body>
</html> <?php /**PATH C:\xampp\htdocs\towork\core\resources\views/templates/bit_gold/layouts/frontend.blade.php ENDPATH**/ ?>