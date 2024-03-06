

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
	                <form class="card" action="<?php echo e(route('commerciale.client.store')); ?>" method="post">
						<?php echo csrf_field(); ?>
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Enregistrement d'un client</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <div class="row">
	                            <div class="col-md-5">
	                                <div class="mb-3">
	                                    <label class="form-label" for="raison_social">Raison social</label>
	                                    <input class="form-control" type="text" placeholder="Company" name="raison_social" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-3">
	                                <div class="mb-3">
	                                    <label class="form-label" for="nif_stat">Nif & Stat</label>
	                                    <input class="form-control" type="text" placeholder="4 000 587 22" name="nif_stat" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label text-uppercase" for="bic">Bic</label>
	                                    <input class="form-control" type="text" placeholder="Bic" name="bic" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label" for="id_type_entreprise">Type d&apos;entreprise</label>
	                                    <select class="form-control" name="id_type_entreprise">

											<?php $__currentLoopData = $typeEntreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeEntreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($typeEntreprise->id_type_entreprise); ?>"><?php echo e($typeEntreprise->libelle); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label" for="id_type_client">Type de client</label>
	                                    <select class="form-control" name="id_type_client">
											<?php $__currentLoopData = $typeClients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeClient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($typeClient->id_type_client); ?>"><?php echo e($typeClient->libelle); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
	                                </div>
	                            </div>
                                <div class="col-sm-6 col-md-4 pt-4">
                                    <div class="form-check mt-auto">
                                        <input type="checkbox" class="form-check-input" name="accepte_mail_marketing" value='O' />
                                        <label for="accepte_mail_marketing" class="form-check-label">Accepte email marketing</label>
                                    </div>
                                </div>
                                <div class="row border-top border-bottom py-2 my-2">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="nom">Nom</label>
                                            <input class="form-control" type="text" placeholder="Nom De Famille"  name="nom"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="prenom">Prénom</label>
                                            <input class="form-control" type="text" placeholder="Prénom" name="prenom" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="poste_contact">Poste</label>
                                            <select class="form-control" name="poste_contact">
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
	                                    <label class="form-label" for="adresse_ville">Ville</label>
	                                    <input class="form-control" type="text" placeholder="City" name="adresse_ville" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-3">
	                                <div class="mb-3">
	                                    <label class="form-label" for="adresse_code_postal">Code postal</label>
	                                    <input class="form-control" type="number" placeholder="ZIP Code" name="adresse_code_postal" />
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <div class="mb-3">
	                                    <label class="form-label" for="adresse_pays">Pays</label>
	                                    <select class="form-control btn-square" name="adresse_pays">
	                                        <option value="Madagascar">Madagascar</option>
	                                        <option value="Germany">Germany</option>
	                                        <option value="Canada">Canada</option>
	                                        <option value="Usa">Usa</option>
	                                    </select>
	                                </div>
	                            </div>

                                <div class="row border-top py-2 my-2">
                                    <div class="col-md-12">
                                        <div>
                                            <label class="form-label" for="commentaire">Commentaire</label>
                                            <textarea class="form-control" rows="5" placeholder="Entrer quelques descriptions" name="commentaire"></textarea>
                                        </div>
                                    </div>  
                                </div>
	                           
	                        </div>
	                    </div>
	                    <div class="card-footer text-end">
	                        <button class="btn btn-primary">Ajouter ce client</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>



	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/admin/apps/commerciale/create-client.blade.php ENDPATH**/ ?>