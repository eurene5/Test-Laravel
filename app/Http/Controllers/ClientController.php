<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\TypeClient;
use App\Models\TypeEntreprise;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function createProfile() : View {
        $typeClients = TypeClient::all();
        $typeEntreprises = TypeEntreprise::all();
        $postes = Poste::all();

        return view('admin.apps.create-profile', [
            'typeClients' => $typeClients,
            'typeEntreprises' => $typeEntreprises,
            'postes' => $postes
        ]);
    }
}
