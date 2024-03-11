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
	                <form class="card" action="{{ route($client->exists ? 'commerciale.client.update' : 'commerciale.client.store', $client) }}" method="post">
						@csrf
						@method($client->exists ? 'put' : 'post')
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Enregistrement d'un client</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <div class="row">
								<div class="row">
									@include('shared.input', ['class' => 'col-md-5', 'label' => 'Raison social', 'name' => 'raison_social', 'placeholder' => 'Company', 'value' => $client->raison_social])
									@include('shared.input', ['class' => 'col-sm-6 col-md-3', 'label' => 'Nif & Stat', 'name' => 'nif_stat', 'placeholder' => '4 000 587 22', 'value' => $client->nif_stat])
									@include('shared.input', ['class' => 'col-sm-6 col-md-4', 'label' => 'BIC', 'name' => 'bic', 'placeholder' => 'Bic', 'value' => $client->bic])
								</div>
								<div class="row">
									@include('shared.select', ['class' => 'col-sm-6 col-md-4', 'label' => 'Type d\'entreprise', 'name' => 'id_type_entreprise', 'options' => $typeEntreprises, 'value' => $client->id_type_entreprise])
									@include('shared.select', ['class' => 'col-sm-6 col-md-4', 'label' => 'Type de client', 'name' => 'id_type_client', 'options' => $typeClients, 'value' => $client->id_type_client])
									@include('shared.check', ['class' => 'col-sm-6 col-md-4 pt-5', 'label' => 'Accepte email marketing', 'name' => 'accepte_mail_marketing', 'value' => $client->accepte_mail_marketing])
								</div>
                                <div class="row border-top border-bottom py-2 my-2">
									@include('shared.input', ['class' => 'col-sm-6 col-md-4', 'label' => 'Nom', 'name' => 'nom', 'placeholder' => 'Nom de famille', 'value' => $client->nom])
									@include('shared.input', ['class' => 'col-sm-6 col-md-4', 'label' => 'Prénom', 'name' => 'prenom', 'value' => $client->prenom])
									@include('shared.select', ['class' => 'col-sm-6 col-md-4', 'label' => 'Poste', 'name' => 'poste_contact', 'options' => $postes, 'value' => $client->poste_contact])
                                </div>

								<div class="row">
									@include('shared.input', ['type' => 'email', 'class' => 'col-sm-6', 'label' => 'Email', 'name' => 'email', 'placeholder' => 'john@example.com', 'value' => $client->email])
									@include('shared.input', ['class' => 'col-sm-6', 'label' => 'Téléphone', 'name' => 'telephone', 'placeholder' => 'Tel', 'value' => $client->telephone])
								</div>

								<div class="row">
									@include('shared.input', ['class' => 'col-sm-6 col-md-2', 'label' => 'Lot et P/lle', 'name' => 'adresse_num', 'value' => $client->adresse_num])
									@include('shared.input', ['class' => 'col-sm-6 col-md-5', 'label' => 'Adresse voie', 'placeholder' => "Voie", 'name' => 'adresse_voie', 'value' => $client->adresse_voie])
									@include('shared.input', ['class' => 'col-sm-6 col-md-5', 'label' => 'Adresse complement', 'placeholder' => "Complément d'adresse", 'name' => 'adresse_complement', 'value' => $client->adresse_complement])
								</div>
								<div class="row">
									@include('shared.input', ['class' => 'col-sm-6 col-md-4', 'label' => 'Ville', 'name' => 'adresse_ville', 'value' => $client->adresse_ville])
									@include('shared.input', ['class' => 'col-sm-6 col-md-3', 'label' => 'Code postal', 'name' => 'adresse_code_postal', 'value' => $client->adresse_code_postal])
									<div class="mb-3 col-md-5">
	                                    <label class="form-label" for="adresse_pays">Pays</label>
	                                    <select class="form-control btn-square" name="adresse_pays">
	                                        <option value="Madagascar" @if(old('adresse_pays', $client->adresse_pays) !== null) selected="selected" @endif >Madagascar</option>
	                                        <option value="Germany" @if(old('adresse_pays', $client->adresse_pays) !== null) selected="selected" @endif >Germany</option>
	                                        <option value="Canada" @if(old('adresse_pays', $client->adresse_pays) !== null) selected="selected" @endif >Canada</option>
	                                        <option value="Usa" @if(old('adresse_pays', $client->adresse_pays) !== null) selected="selected" @endif >Usa</option>
	                                    </select>
	                                </div>
								</div>
                                <div class="row border-top py-2 my-2">
									@include('shared.input', ['type' => 'textarea', 'class' => 'col-md-12', 'label' => 'Commentaire', 'name' => 'commentaire', 'value' => $client->commentaire])
                                </div>
	                        </div>
	                    </div>
	                    <div class="card-footer text-end">
							@if ($client->exists)
								@include('shared.btn-modal', ['btn' => 'btn-primary', 'action' => 'Enregistrer', 'id' => "update"])
							@else
								<button class="btn btn-primary">Ajouter ce client</button>
							@endif
	                    </div>
						@include('shared.modal', [ 'action' => 'Enregistrer', 'id' => "update", 'target' => $client, 'message' => 'Etes-vous sûr de modifier ce client ?'])
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	@endpush

@endsection