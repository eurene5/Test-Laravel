

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
	                <form class="card" action="" method="POST">
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Edit Profile</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <div class="row">
	                            <div class="col-md-5">
	                                <div class="mb-3">
	                                    <label class="form-label">Raison social</label>
	                                    <input class="form-control" type="text" placeholder="Company" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-3">
	                                <div class="mb-3">
	                                    <label class="form-label">Nif & Stat</label>
	                                    <input class="form-control" type="text" placeholder="4 000 587 22" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label text-uppercase">Bic</label>
	                                    <input class="form-control" type="email" placeholder="Bic" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label">Type d&apos;entreprise</label>
	                                    <select class="form-control">

											<?php $__currentLoopData = $typeEntreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeEntreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value=<?php echo e($typeEntreprise->libelle); ?>><?php echo e($typeEntreprise->libelle); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label">Type de client</label>
	                                    <select class="form-control">
											<?php $__currentLoopData = $typeClients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeClient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value=<?php echo e($typeClient->libelle); ?>><?php echo e($typeClient->libelle); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
	                                </div>
	                            </div>
                                <div class="col-sm-6 col-md-4 pt-4">
                                    <div class="form-check mt-auto">
                                        <input type="checkbox" class="form-check-input" name="acceptEmail" value='O' />
                                        <label for="acceptEmail" class="form-check-label">Accepte email marketing</label>
                                    </div>
                                </div>
                                <div class="row border-top border-bottom py-2 my-2">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Nom</label>
                                            <input class="form-control" type="text" placeholder="Nom De Famille" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Prénom</label>
                                            <input class="form-control" type="text" placeholder="Prénom" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Poste</label>
                                            <select class="form-control">
												<?php $__currentLoopData = $postes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value=<?php echo e($poste->libelle); ?>><?php echo e($poste->libelle); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

								<div class="col-sm-6">
									<div class="mb-3">
										<label for="email" class="form-label">Email</label>
										<input type="email" name="email" class="form-control" placeholder="john@example.com" >
									</div>
								</div>
								<div class="col-sm-6">
									<div class="mb-3">
										<label for="telephone" class="form-label">Téléphone</label>
										<input type="text" name="telephone" class="form-control" placeholder="Tel" >
									</div>
								</div>

                                <div class="col-sm-6 col-md-2">
                                    <div class="mb-3">
                                        <label for="adresse_num" class="form-label">Lot et Num</label>
                                        <input type="text" name="adresse_num" class="form-control" placeholder="Numéro">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="mb-3">
                                        <label for="adresse_voie" class="form-label">Adresse voie</label>
                                        <input type="text" name="adresse_voie" class="form-control" placeholder="Voie">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="mb-3">
                                        <label for="adresse_complement" class="form-label">Complément d'adresse</label>
                                        <input type="text" name="adresse_complement" class="form-control" placeholder="Complément">
                                    </div>
                                </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label">Ville</label>
	                                    <input class="form-control" type="text" placeholder="City" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-3">
	                                <div class="mb-3">
	                                    <label class="form-label">Code postal</label>
	                                    <input class="form-control" type="number" placeholder="ZIP Code" />
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <div class="mb-3">
	                                    <label class="form-label">Pays</label>
	                                    <select class="form-control btn-square">
	                                        <option value="0">Madagascar</option>
	                                        <option value="1">Germany</option>
	                                        <option value="2">Canada</option>
	                                        <option value="3">Usa</option>
	                                        <option value="4">Aus</option>
	                                    </select>
	                                </div>
	                            </div>

                                <div class="row border-top py-2 my-2">
                                    <div class="col-md-12">
                                        <div>
                                            <label class="form-label">Commentaire</label>
                                            <textarea class="form-control" rows="5" placeholder="Entrer quelques descriptions"></textarea>
                                        </div>
                                    </div>  
                                </div>
	                           
	                        </div>
	                    </div>
	                    <div class="card-footer text-end">
	                        <button class="btn btn-primary" type="submit">Ajouter ce client</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/admin/apps/create-profile.blade.php ENDPATH**/ ?>