

<?php $__env->startSection('title'); ?>Ventes
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/slick.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/slick-theme.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/rating.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Ventes</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Commerciale</li>
		<li class="breadcrumb-item active">vente</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div>
	        <div class="row product-page-main p-0">
	            <div class="col-xl-6 col-md-6 box-col-12 xl-50">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="row">
	                            <div class="col-xl-9 product-main">
	                                <div class="pro-slide-single">
                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div><img class="img-fluid" src="<?php echo e(asset($image->chemin)); ?>" alt="" /></div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                                </div>
	                            </div>
	                            <div class="col-xl-3 product-thumbnail">
	                                <div class="pro-slide-right">
                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                                <div class="slide-box"><img src="<?php echo e(asset($image->chemin)); ?>" alt="" /></div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-6 box-col-6 proorder-xl-3 xl-100">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="pro-group pt-0 border-0">
	                            <div class="product-page-details mt-0">
	                                <h3><?php echo e($produitFini->libelle); ?>.</h3>
	                                <div class="pro-review">
	                                    <div class="d-flex">
	                                        <select id="u-rating-fontawesome" name="rating" autocomplete="off">
	                                            <option value="1">1</option>
	                                            <option value="2">2</option>
	                                            <option value="3">3</option>
	                                            <option value="4">4</option>
	                                            <option value="5">5</option>
	                                        </select>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="product-price">
	                                <?php echo e($produitFini->montant_stock); ?>.00 MGA
	                                <del>350.00 MGA</del>
	                            </div>
	                            <ul class="product-color">
                                    
	                                <li style="background-color: <?php echo e($produitFini->code_couleur); ?>;border: 0.3px solid #010101;"></li>
	                            </ul>
	                        </div>
	                        <div class="pro-group">
	                            <p><?php echo e($produitFini->details); ?>. </p>
	                        </div>
	                        <div class="pro-group">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <table>
	                                        <tbody>
	                                            <tr>
	                                                <td><b>Référence</b></td>
	                                                <td><b>&nbsp;:&nbsp;</b></td>
	                                                <td><?php echo e($produitFini->reference_produit_sfepi); ?></td>
	                                            </tr>
	                                            <tr>
	                                                <td><b>En stock</b></td>
	                                                <td><b>&nbsp;:&nbsp;</b></td>
	                                                <td><?php echo e($produitFini->stock_actualise); ?></td>
	                                            </tr>
	                                            <tr>
	                                                <td><b>Commande min</b></td>
	                                                <td><b>&nbsp;:&nbsp;</b></td>
	                                                <td>0.5L</td>
	                                            </tr>
	                                            <tr>
	                                                <td><b>Couleur</b></td>
	                                                <td><b>&nbsp;:&nbsp;</b></td>
	                                                <td><?php echo e($produitFini->couleur); ?></td>
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </div>
	                                <div class="col-md-6">
	                                    <table>
	                                        <tbody>
                                                <tr>
	                                                <td><b>Prix BtoB</b></td>
                                                    <td><b>&nbsp;:&nbsp;</b></td>
	                                                <td><?php echo e($produitFini->montant_stock - ($produitFini->montant_stock * 0.02)); ?></td>
	                                            </tr>
	                                            <tr>
	                                                <td><b>Prix BtoC</b></td>
                                                    <td><b>&nbsp;:&nbsp;</b></td>
	                                                <td><?php echo e($produitFini->montant_stock); ?></td>
	                                            </tr>
	                                            <tr>
	                                                <td><b>Fournisseur</b></td>
                                                    <td><b>&nbsp;:&nbsp;</b></td>
	                                                <td><?php echo e($fournisseur->nom_contact); ?></td>
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="pro-group pb-0">
	                            <div class="pro-shop">
	                                <a class="btn btn-primary m-r-10" href="cart"> <i class="fa fa-shopping-basket me-2"></i>Ajouter au panier</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="card">
	        <div class="row product-page-main">
	            <div class="col-sm-12">
	                <ul class="nav nav-tabs border-tab mb-0" id="top-tab" role="tablist">
	                    <li class="nav-item">
	                        <a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Détails</a>
	                        <div class="material-border"></div>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Liste des promotions</a>
	                        <div class="material-border"></div>
	                    </li>
	                </ul>
	                <div class="tab-content" id="top-tabContent">
	                    <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
	                        <p class="mb-0 m-t-20">
	                            Taille du produit : <?php echo e($produitFini->longueur); ?> x <?php echo e($produitFini->largeur); ?> x <?php echo e($produitFini->hauteur); ?> cm
	                        </p>
                            <p class="mb-0">
                                Date de première disponibilité : <?php echo e(date('d F Y', strtotime($produitFini->date_fabrication))); ?>

                            </p>
                            <p class="mb-0">
                                Fournisseur : <?php echo e($fournisseur->nom_contact); ?>

                            </p>
                            <p class="mb-0">
                                Référence produit (coté fournisseur) : <?php echo e($produitFini->reference_produit_fournisseur); ?>

                            </p>
                            <p class="mb-0">
                                Référence produit (coté sfepi) : <?php echo e($produitFini->reference_produit_sfepi); ?>

                            </p>
	                    </div>
	                    <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
	                        <p class="mb-0 m-t-20">
	                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
	                            it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
	                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
	                        </p>
	                    </div>
	                    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
	                        <p class="mb-0 m-t-20">
	                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
	                            it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
	                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
	                        </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick-slider/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick-slider/slick-theme.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/admin/apps/commerciale/commande/produit-fini/show.blade.php ENDPATH**/ ?>