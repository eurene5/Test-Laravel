<?php
    $class ??= null;
?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['form-check form-switch', $class]) ?>" >
    <input type="hidden" value="N" name="<?php echo e($name); ?>">
    <input <?php if(old($name, $value ?? false)): echo 'checked'; endif; ?> type="checkbox" value="O" name="<?php echo e($name); ?>" class="form-check-input <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " role="switch" id="<?php echo e($name); ?>">
    <label for="<?php echo e($name); ?>" class="form-check-label"><?php echo e($label); ?></label>
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="invalid-feedback" >
        <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/shared/check.blade.php ENDPATH**/ ?>