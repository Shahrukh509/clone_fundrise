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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
              <li> <a href="<?php echo e(route('user.home')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a></li>
              <li><a href="<?php echo e(route('user.plan')); ?>"><?php echo app('translator')->get('Investment'); ?></a></li>
              <li><a href="<?php echo e(route('user.deposit')); ?>"><?php echo app('translator')->get('Deposit'); ?></a></li>
              <li><a href="<?php echo e(route('user.withdraw')); ?>"><?php echo app('translator')->get('Withdraw'); ?></a></li>
              <li><a href="<?php echo e(route('user.transactions.deposit')); ?>"><?php echo app('translator')->get('Transactions'); ?></a></li>
              <li class="menu_has_children"><a href="#0"><?php echo app('translator')->get('Referrals'); ?></a>
                <ul class="sub-menu">
                  <li><a href="<?php echo e(route('user.referral.users')); ?>"><?php echo app('translator')->get('Referred Users'); ?></a></li>
                  <li><a href="<?php echo e(route('user.referral.commissions.deposit')); ?>"><?php echo app('translator')->get('Referral Commissions'); ?></a></li>
                </ul>
              </li>
              <li class="menu_has_children"><a href="#0"><?php echo app('translator')->get('Account'); ?></a>
                <ul class="sub-menu">
                  <li><a href="<?php echo e(route('user.profile-setting')); ?>"><?php echo app('translator')->get('Profile Setting'); ?></a></li>
                  <?php if($general->b_transfer): ?>
                  <li><a href="<?php echo e(route('user.transfer.balance')); ?>"><?php echo app('translator')->get('Transfer Balance'); ?></a></li>
                  <?php endif; ?>
                  <li><a href="<?php echo e(route('user.change-password')); ?>"><?php echo app('translator')->get('Change Password'); ?></a></li>
                  <li><a href="<?php echo e(route('ticket')); ?>">
                    <?php echo app('translator')->get('Support Ticket'); ?></a></li>
                  <li><a href="<?php echo e(route('user.promotions.tool')); ?>"><?php echo app('translator')->get('Promotional Tool'); ?></a></li>
                  <li><a href="<?php echo e(route('user.twofactor')); ?>"><?php echo app('translator')->get('2FA Security'); ?></a></li>
                  <li><a href="<?php echo e(route('user.logout')); ?>"> <?php echo e(__('Logout')); ?></a></li>
                </ul>
              </li>
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
          <p><?php echo app('translator')->get('© '.date('Y').' <a href="'.route('home').'" class="base--color">'.$general->sitename.'</a>. All rights reserved'); ?></p>
        </div>
        <div class="col-lg-6">
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
    })();
</script>


</body>
</html>

  </body>
</html> <?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/layouts/master.blade.php ENDPATH**/ ?>