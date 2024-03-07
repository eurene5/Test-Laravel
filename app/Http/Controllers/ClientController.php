<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Poste;
use App\Models\TypeClient;
use App\Models\TypeEntreprise;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.apps.commerciale.client.index', ['clients' => Client::with('typeClient')->orderBy('date_creation', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $typeClients = TypeClient::all();
        $typeEntreprises = TypeEntreprise::all();
        $postes = Poste::all();
        $client = new Client();
        
        return view('admin.apps.commerciale.client.form', ['client' => $client, 'typeClients' => $typeClients, 'typeEntreprises' => $typeEntreprises, 'postes' => $postes]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Http\Requests\ClientRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
         $client = Client::create($request->validated());
         return to_route('commerciale.client.index')->with('success', 'Votre client a été enregistré avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client): View
    {
        $typeClients = TypeClient::all();
        $typeEntreprises = TypeEntreprise::all();
        $postes = Poste::all();
        
        return view('admin.apps.commerciale.client.form', ['client' => $client, 'typeClients' => $typeClients, 'typeEntreprises' => $typeEntreprises, 'postes' => $postes]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client)
    {
        $client->update($request->validated());
        return to_route('commerciale.client.index')->with('success', 'Votre client a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('commerciale.client.index')->with('success', 'Votre client a été supprimé avec succès.');
    }
}
