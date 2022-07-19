<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/iziToast.min.css')); ?>">
<script src="<?php echo e(asset('assets/admin/js/iziToast.min.js')); ?>"></script>

<?php if(session()->has('notify')): ?>
    <?php $__currentLoopData = session('notify'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script type="text/javascript">
            (function($) { 
                "use strict";
                iziToast.<?php echo e($msg[0]); ?>({message:"<?php echo e(trans($msg[1])); ?>", position: "topRight"});
            })(jQuery);
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if($errors->any()): ?>
    <?php
        $collection = collect($errors->all());
        $errors = $collection->unique();
    ?>

    <script>
        (function($) { 
            "use strict";
            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            iziToast.error({
                message: '<?php echo e(trans($error)); ?>',
                position: "topRight"
            });
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        })(jQuery);
    </script>

<?php endif; ?>
<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
<?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/admin/partials/notify.blade.php ENDPATH**/ ?>