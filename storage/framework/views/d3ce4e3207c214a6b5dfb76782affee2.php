<?php
    $class ??= null;
    $value ??= null;
?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['mb-3', $class]) ?>">
    <label class="form-label" for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <select class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="<?php echo e($name); ?>">
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="
                        <?php if($option->id_type_entreprise): ?>
                            <?php echo e($option->id_type_entreprise); ?>

                        <?php elseif( $option->id_type_client): ?>
                            <?php echo e($option->id_type_client); ?>

                        <?php else: ?>
                            <?php echo e($option->libelle); ?>

                        <?php endif; ?>
                    "
            <?php if(old($name, $value) !== null): ?> selected="selected" <?php endif; ?> >
                <?php echo e($option->libelle); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback">
            <?php echo e($message); ?>

        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/shared/select.blade.php ENDPATH**/ ?>