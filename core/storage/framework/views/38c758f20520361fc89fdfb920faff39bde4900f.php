<?php if(\App\Models\Plugin::where('act', 'custom-captcha')->where('status', 1)->first()): ?>

    <div class="form-group">
        <?php echo  getCustomCaptcha() ?>
    </div>


    <div class="form-group">
        <input type="text" name="captcha" class="form-control" placeholder="<?php echo e(trans('Enter code')); ?>" autocomplete="off" required>
    </div>
<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\clone_fundrise\core\resources\views/templates/bit_gold/partials/custom-captcha.blade.php ENDPATH**/ ?>