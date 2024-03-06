

<?php $__env->startSection('title'); ?>Create Profile
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3 class="text-capitalize">Enregistrer un client</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Clients</li>
		<li class="breadcrumb-item active text-capitalize">Créer un client</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="edit-profile">
	        <div class="row">
	            <div>
	                <form class="card" action="<?php echo e(route($client->exists ? 'commerciale.client.update' : 'commerciale.client.store', $client)); ?>" method="post">
						<?php echo csrf_field(); ?>
						<?php echo method_field($client->exists ? 'put' : 'post'); ?>
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Enregistrement d'un client</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <div class="row">
								<div class="row">
									<?php echo $__env->make('shared.input', ['class' => 'col-md-5', 'label' => 'Raison social', 'name' => 'raison_social', 'placeholder' => 'Company', 'value' => $client->raison_social], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-3', 'label' => 'Nif & Stat', 'name' => 'nif_stat', 'placeholder' => '4 000 587 22', 'value' => $client->nif_stat], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-4', 'label' => 'BIC', 'name' => 'bic', 'placeholder' => 'Bic', 'value' => $client->bic], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</div>
								<div class="row">
									<?php echo $__env->make('shared.select', ['class' => 'col-sm-6 col-md-4', 'label' => 'Type d\'entreprise', 'name' => 'id_type_entreprise', 'options' => $typeEntreprises, 'value' => $client->id_type_entreprise], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.select', ['class' => 'col-sm-6 col-md-4', 'label' => 'Type de client', 'name' => 'id_type_client', 'options' => $typeClients, 'value' => $client->id_type_client], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.check', ['class' => 'col-sm-6 col-md-4 pt-5', 'label' => 'Accepte email marketing', 'name' => 'accepte_mail_marketing', 'value' => $client->accepte_mail_marketing], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</div>
                                <div class="row border-top border-bottom py-2 my-2">
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-4', 'label' => 'Nom', 'name' => 'nom', 'placeholder' => 'Nom de famille', 'value' => $client->nom], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-4', 'label' => 'Prénom', 'name' => 'prenom', 'value' => $client->prenom], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.select', ['class' => 'col-sm-6 col-md-4', 'label' => 'Poste', 'name' => 'poste_contact', 'options' => $postes, 'value' => $client->poste_contact], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

								<div class="row">
									<?php echo $__env->make('shared.input', ['type' => 'email', 'class' => 'col-sm-6', 'label' => 'Email', 'name' => 'email', 'placeholder' => 'john@example.com', 'value' => $client->email], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6', 'label' => 'Téléphone', 'name' => 'telephone', 'placeholder' => 'Tel', 'value' => $client->telephone], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</div>

								<div class="row">
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-2', 'label' => 'Lot et P/lle', 'name' => 'adresse_num', 'value' => $client->adresse_num], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-5', 'label' => 'Adresse voie', 'placeholder' => "Voie", 'name' => 'adresse_voie', 'value' => $client->adresse_voie], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-5', 'label' => 'Adresse complement', 'placeholder' => "Complément d'adresse", 'name' => 'adresse_complement', 'value' => $client->adresse_complement], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</div>
								<div class="row">
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-4', 'label' => 'Ville', 'name' => 'adresse_ville', 'value' => $client->adresse_ville], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<?php echo $__env->make('shared.input', ['class' => 'col-sm-6 col-md-3', 'label' => 'Code postal', 'name' => 'adresse_code_postal', 'value' => $client->adresse_code_postal], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									<div class="mb-3 col-md-5">
	                                    <label class="form-label" for="adresse_pays">Pays</label>
	                                    <select class="form-control btn-square" name="adresse_pays">
	                                        <option value="Madagascar" <?php if(old('adresse_pays', $client->adresse_pays) !== null): ?> selected="selected" <?php endif; ?> >Madagascar</option>
	                                        <option value="Germany" <?php if(old('adresse_pays', $client->adresse_pays) !== null): ?> selected="selected" <?php endif; ?> >Germany</option>
	                                        <option value="Canada" <?php if(old('adresse_pays', $client->adresse_pays) !== null): ?> selected="selected" <?php endif; ?> >Canada</option>
	                                        <option value="Usa" <?php if(old('adresse_pays', $client->adresse_pays) !== null): ?> selected="selected" <?php endif; ?> >Usa</option>
	                                    </select>
	                                </div>
								</div>
                                <div class="row border-top py-2 my-2">
									<?php echo $__env->make('shared.input', ['type' => 'textarea', 'class' => 'col-md-12', 'label' => 'Commentaire', 'name' => 'commentaire', 'value' => $client->commentaire], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
	                        </div>
	                    </div>
	                    <div class="card-footer text-end">
							<?php if($client->exists): ?>
								<?php echo $__env->make('shared.modal', ['btn' => 'btn-primary', 'action' => 'Enregistrer', 'id' => "update", 'target' => $client, 'message' => 'Etes-vous sûr de modifier ce client ?'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php else: ?>
								<button class="btn btn-primary">Ajouter ce client</button>
							<?php endif; ?>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>



	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/admin/apps/commerciale/form.blade.php ENDPATH**/ ?>