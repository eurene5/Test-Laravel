<?php
    $target ??= null;
?>
<!-- Modal -->
<div class="modal fade" id="<?php echo e($id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close position-relative top-0 right-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-5">
                <h5 class="text-center" ><?php echo e($message); ?></h5>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-between w-100">
                    <?php if($action === 'Supprimer' && $target !== null): ?>
                        <form action="<?php echo e(route('commerciale.client.destroy', $target)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-danger">Confirmer</button>
                        </form>
                    <?php else: ?>
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    <?php endif; ?>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/shared/modal.blade.php ENDPATH**/ ?>