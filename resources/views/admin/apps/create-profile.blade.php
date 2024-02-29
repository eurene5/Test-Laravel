@extends('layouts.admin.master')

@section('title')Create Profile
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3 class="text-capitalize">Enregistrer un client</h3>
		@endslot
		<li class="breadcrumb-item">Clients</li>
		<li class="breadcrumb-item active text-capitalize">Créer un client</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="edit-profile">
	        <div class="row">
	            <div>
	                <form class="card" action="" method="POST">
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
	                                    <input class="form-control" type="email" placeholder="Bic" name="bic" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label" for="id_type_entreprise">Type d&apos;entreprise</label>
	                                    <select class="form-control" name="id_type_entreprise">

											@foreach($typeEntreprises as $typeEntreprise)
												<option value={{$typeEntreprise->id}}>{{$typeEntreprise->libelle}}</option>
											@endforeach
                                            
                                        </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label" for="id_type_client">Type de client</label>
	                                    <select class="form-control" name="id_type_client">
											@foreach($typeClients as $typeClient)
												<option value={{$typeClient->id}}>{{$typeClient->libelle}}</option>
											@endforeach
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
												@foreach($postes as $poste)
												<option value={{$poste->libelle}}>{{$poste->libelle}}</option>
												@endforeach
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
                                            <label class="form-label" for="commentaire">Commentaire</label>
                                            <textarea class="form-control" rows="5" placeholder="Entrer quelques descriptions" name="commentaire"></textarea>
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

	
	@push('scripts')
	@endpush

@endsection