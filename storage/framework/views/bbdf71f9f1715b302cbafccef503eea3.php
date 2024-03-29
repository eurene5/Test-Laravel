

<?php $__env->startSection('title'); ?>Ventes
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/range-slider.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Ventes</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">ventes</li>
		<li class="breadcrumb-item active">Commandes</li>
	<?php echo $__env->renderComponent(); ?>

	<div class="container-fluid product-wrapper">
	    <div class="product-grid">
	        <div class="feature-products">
	            <div class="row m-b-10">
	                <div class="col-md-3 col-sm-2 products-total">
	                    <div class="square-product-setting d-inline-block">
	                        <a class="icon-grid grid-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="grid"></i></a>
	                    </div>
	                    <div class="square-product-setting d-inline-block">
	                        <a class="icon-grid m-0 list-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="list"></i></a>
	                    </div>
	                    <div class="d-none-productlist filter-toggle">
	                        <h6 class="mb-0">
	                            Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span>
	                        </h6>
	                    </div>
	                    <div class="grid-options d-inline-block">
	                        <ul>
	                            <li>
	                                <a class="product-2-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a>
	                            </li>
	                            <li>
	                                <a class="product-3-layout-view" href="javascript:void(0)" data-original-title="" title="">
	                                    <span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span>
	                                </a>
	                            </li>
	                            <li>
	                                <a class="product-4-layout-view" href="javascript:void(0)" data-original-title="" title="">
	                                    <span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span>
	                                    <span class="line-grid line-grid-9 bg-primary"></span>
	                                </a>
	                            </li>
	                            <li>
	                                <a class="product-6-layout-view" href="javascript:void(0)" data-original-title="" title="">
	                                    <span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span>
	                                    <span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span>
	                                </a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	                <div class="col-md-9 col-sm-10 text-end">
	                    <span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200 Results</span>
	                    <div class="select2-drpdwn-product select-options d-inline-block">
	                        <select class="form-control btn-square" name="select">
	                            <option value="opt1">Featured</option>
	                            <option value="opt2">Lowest Prices</option>
	                            <option value="opt3">Highest Prices</option>
	                        </select>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="pro-filter-sec">
	                        <div class="product-sidebar">
	                            <div class="filter-section">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h6 class="mb-0 f-w-600">
	                                            Filters<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span>
	                                        </h6>
	                                    </div>
	                                    <div class="left-filter">
	                                        <div class="card-body filter-cards-view animate-chk">
	                                            <div class="product-filter">
	                                                <h6 class="f-w-600">Category</h6>
	                                                <div class="checkbox-animated mt-0">
	                                                    <label class="d-block" for="edo-ani5"> <input class="radio_animated" id="edo-ani5" type="radio" data-original-title="" title="" />Man Shirt </label>
	                                                    <label class="d-block" for="edo-ani6"> <input class="radio_animated" id="edo-ani6" type="radio" data-original-title="" title="" />Man Jeans </label>
	                                                    <label class="d-block" for="edo-ani7"> <input class="radio_animated" id="edo-ani7" type="radio" data-original-title="" title="" />Woman Top </label>
	                                                    <label class="d-block" for="edo-ani8"> <input class="radio_animated" id="edo-ani8" type="radio" data-original-title="" title="" />Woman Jeans </label>
	                                                    <label class="d-block" for="edo-ani9"> <input class="radio_animated" id="edo-ani9" type="radio" data-original-title="" title="" />Man T-shirt </label>
	                                                </div>
	                                            </div>
	                                            <div class="product-filter">
	                                                <h6 class="f-w-600">Brand</h6>
	                                                <div class="checkbox-animated mt-0">
	                                                    <label class="d-block" for="chk-ani"> <input class="checkbox_animated" id="chk-ani" type="checkbox" data-original-title="" title="" /> Levi's </label>
	                                                    <label class="d-block" for="chk-ani1"> <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-original-title="" title="" />Diesel </label>
	                                                    <label class="d-block" for="chk-ani2"> <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-original-title="" title="" />Lee </label>
	                                                    <label class="d-block" for="chk-ani3"> <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-original-title="" title="" />Hudson </label>
	                                                    <label class="d-block" for="chk-ani4"> <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-original-title="" title="" />Denizen </label>
	                                                    <label class="d-block" for="chk-ani5"> <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-original-title="" title="" />Spykar </label>
	                                                </div>
	                                            </div>
	                                            <div class="product-filter slider-product">
	                                                <h6 class="f-w-600">Colors</h6>
	                                                <div class="color-selector">
	                                                    <ul>
	                                                        <li class="white"></li>
	                                                        <li class="gray"></li>
	                                                        <li class="black"></li>
	                                                        <li class="orange"></li>
	                                                        <li class="green"></li>
	                                                        <li class="pink"></li>
	                                                        <li class="yellow"></li>
	                                                        <li class="blue"></li>
	                                                        <li class="red"></li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                            <div class="product-filter pb-0">
	                                                <h6 class="f-w-600">Price</h6>
	                                                <input id="u-range-03" type="text" />
	                                                <h6 class="f-w-600">New Products</h6>
	                                            </div>
	                                            <div class="product-filter pb-0 new-products">
	                                                <div class="owl-carousel owl-theme" id="testimonial">
	                                                    <div class="item">
	                                                        <div class="product-box">
	                                                            <div class="media">
	                                                                <div class="product-img me-3"><img class="img-fluid" src="<?php echo e(asset('assets/images/ecommerce/01.jpg')); ?>" alt="" data-original-title="" title="" /></div>
	                                                                <div class="media-body">
	                                                                    <div class="product-details">
	                                                                        <div>
	                                                                            <ul>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                            </ul>
	                                                                            <p class="mb-0 f-w-700">Fancy Shirt</p>
	                                                                            <div class="f-w-500">$100.00</div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="product-box">
	                                                            <div class="media">
	                                                                <div class="product-img me-3"><img class="img-fluid" src="<?php echo e(asset('assets/images/ecommerce/02.jpg')); ?>" alt="" data-original-title="" title="" /></div>
	                                                                <div class="media-body">
	                                                                    <div class="product-details">
	                                                                        <div>
	                                                                            <ul>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                            </ul>
	                                                                            <p class="mb-0 f-w-700">Fancy Shirt</p>
	                                                                            <div class="f-w-500">$100.00</div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="product-box">
	                                                            <div class="media">
	                                                                <div class="product-img me-3"><img class="img-fluid" src="<?php echo e(asset('assets/images/ecommerce/03.jpg')); ?>" alt="" data-original-title="" title="" /></div>
	                                                                <div class="media-body">
	                                                                    <div class="product-details">
	                                                                        <div>
	                                                                            <ul>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                            </ul>
	                                                                            <p class="mb-0 f-w-700">Fancy Shirt</p>
	                                                                            <div class="f-w-500">$100.00</div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="item">
	                                                        <div class="product-box">
	                                                            <div class="media">
	                                                                <div class="product-img me-3"><img class="img-fluid" src="<?php echo e(asset('assets/images/ecommerce/01.jpg')); ?>" alt="" data-original-title="" title="" /></div>
	                                                                <div class="media-body">
	                                                                    <div class="product-details">
	                                                                        <div>
	                                                                            <ul>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                            </ul>
	                                                                            <p class="mb-0 f-w-700">Fancy Shirt</p>
	                                                                            <div class="f-w-500">$100.00</div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="product-box">
	                                                            <div class="media">
	                                                                <div class="product-img me-3"><img class="img-fluid" src="<?php echo e(asset('assets/images/ecommerce/02.jpg')); ?>" alt="" data-original-title="" title="" /></div>
	                                                                <div class="media-body">
	                                                                    <div class="product-details">
	                                                                        <div>
	                                                                            <ul>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                            </ul>
	                                                                            <p class="mb-0 f-w-700">Fancy Shirt</p>
	                                                                            <div class="f-w-500">$100.00</div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="product-box">
	                                                            <div class="media">
	                                                                <div class="product-img me-3"><img class="img-fluid" src="<?php echo e(asset('assets/images/ecommerce/03.jpg')); ?>" alt="" data-original-title="" title="" /></div>
	                                                                <div class="media-body">
	                                                                    <div class="product-details">
	                                                                        <div>
	                                                                            <ul>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                                <li><i class="fa fa-star font-warning"></i></li>
	                                                                            </ul>
	                                                                            <p class="mb-0 f-w-700">Fancy Shirt</p>
	                                                                            <div class="f-w-500">$100.00</div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="product-filter text-center"><img class="img-fluid banner-product" src="<?php echo e(asset('assets/images/ecommerce/banner.jpg')); ?>" alt="" data-original-title="" title="" /></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="product-search">
	                            <form>
	                                <div class="form-group m-0"><input class="form-control" type="search" placeholder="Search.." data-original-title="" title="" /><i class="fa fa-search"></i></div>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="product-wrapper-grid">
	            <div class="row">
					<?php $__currentLoopData = $produitFinis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produitFini): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-xl-3 col-sm-6 xl-4">
							<div class="card">
								<div class="product-box">
									<div class="product-img">
										<img class="img-fluid" src="<?php echo e($produitFini->images->isNotEmpty() ? asset($produitFini->images[0]->chemin) : asset('assets/images/ecommerce/01.jpg')); ?>" alt="<?php echo e($produitFini->libelle); ?>" />
										<div class="product-hover">
											<ul>
												<li>
													<a href="cart"><i class="icon-shopping-cart"></i></a>
												</li>
												<li>
													<a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="icon-eye"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="modal fade" id="exampleModalCenter16">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<div class="product-box row">
														<div class="product-img col-lg-6"><img class="img-fluid" src="<?php echo e($produitFini->images->isNotEmpty() ? asset($produitFini->images[0]->chemin) : asset('assets/images/ecommerce/01.jpg')); ?>" alt="<?php echo e($produitFini->libelle); ?>" /></div>
														<div class="product-details col-lg-6 text-start">
															<a href="<?php echo e(route('commerciale.vente.show', $produitFini)); ?>">
																<h4><?php echo e($produitFini->libelle); ?></h4>
																<span class="fs-6">Réf : <?php echo e($produitFini->reference_produit_sfepi); ?></span>
															</a>
															<div class="product-price">
																<?php echo e($produitFini->montant_stock); ?> MGA
																<del>35.00 MGA</del>
															</div>
															<div class="product-view">
																<h6 class="f-w-600">Détails</h6>
																<p class="mb-0"><?php echo e($produitFini->details); ?></p>
															</div>
															<div class="product-size">
																<ul>
																	<li>
																		<button class="btn btn-outline-light" type="button">0,5L</button>
																	</li>
																	<li>
																		<button class="btn btn-outline-light" type="button">1L</button>
																	</li>
																	<li>
																		<button class="btn btn-outline-light" type="button">2l</button>
																	</li>
																</ul>
															</div>
															<div class="product-qnty">
																<h6 class="f-w-600">Quantité</h6>
																<fieldset>
																	<div class="input-group">
																		<input class="touchspin text-center" type="text" value="5" />
																	</div>
																</fieldset>
																<div class="addcart-btn"><a class="btn btn-primary me-3" href="cart">Ajouter au Panier </a><a class="btn btn-primary" href="<?php echo e(route('commerciale.vente.show', $produitFini)); ?>">Voir les Détails</a></div>
															</div>
														</div>
													</div>
													<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-details">
										<a href="<?php echo e(route('commerciale.vente.show', $produitFini)); ?>">
											<h4><?php echo e($produitFini->libelle); ?></h4>
											
											<span class="fs-6">Réf : <?php echo e($produitFini->reference_produit_sfepi); ?></span>
										</a>
										<p><?php echo e($produitFini->typeProduit?->libelle); ?></p>
										<div class="product-price">
											<?php echo e($produitFini->montant_stock); ?> MGA
											<del>35.00 MGA</del>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </div>
	        </div>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/range-slider/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/range-slider/rangeslider-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/touchspin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/input-groups.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product-tab.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Poem\Documents\Projets\viho-laravel-10\resources\views/admin/apps/commerciale/commande/produit-fini/index.blade.php ENDPATH**/ ?>