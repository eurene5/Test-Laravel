<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <?php echo e($breadcrumb_title ?? ''); ?>

          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Accueil</a></li>
              <?php echo e($slot ?? ''); ?>

          </ol>
        </div>
        <div class="col-lg-6">
          <?php if(url()->current() === route('commerciale.client.index')): ?>
            <div class="d-flex">
              <a href="<?php echo e(route('commerciale.client.create')); ?>" class="btn btn-primary ms-auto">Ajouter un client</a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
</div><?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>