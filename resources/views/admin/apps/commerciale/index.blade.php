@extends('layouts.admin.master')

@section('title')Clients
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable-extension.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Clients</h3>
		@endslot
		<li class="breadcrumb-item">Clients</li>
		<li class="breadcrumb-item active">Liste des clients</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card"
	                <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
	                    <div class="dt-ext table-responsive">
	                        <table class="display nowrap" id="basic-scroller">
	                            <thead>
	                                <tr>
	                                    <th>Nom</th>
	                                    <th>Nombre de vente</th>
	                                    <th>Adresse</th>
	                                    <th>Ville</th>
	                                    <th>Type de client</th>
                                        <th class="text-end" >Actions</th>
	                                </tr> 
	                            </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr data-client-id='{{$client->id_client}}'>
                                            <td>{{$client->nom." ".$client->prenom}}</td>
                                            <td>Nombre de vente</td>
                                            <td>{{$client->adresse_num." ".$client->adresse_voie}}</td>
                                            <td>{{$client->adresse_ville}}</td>
                                            <td>{{$client->typeClient->libelle}}</td>
                                            <td>
                                                <div class="d-flex gap-2 justify-content-end">
                                                    <a href="{{route('commerciale.client.edit', $client)}}" class="btn btn-primary">Modifier</a>
                                                    @include('shared.btn-modal', ['btn' => 'btn-danger', 'action' => 'Supprimer', 'id' => "delete"])
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
	                        </table>
	                    </div>
                        <div class="d-flex">
                            {{ $clients->links() }}
                        </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

    @include('shared.modal', ['action' => 'Supprimer', 'id' => "delete",'target' => $client, 'message' => 'Etes-vous sûr de supprimer ce client ?'])

	
	@push('scripts')
	<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>
	@endpush

@endsection