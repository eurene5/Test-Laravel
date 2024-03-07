<?php

namespace App\Http\Controllers;

use App\Models\ProduitFini;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function index () {
        return view('admin.apps.commerciale.commande.produit-fini.index', ['produitFinis' => ProduitFini::with('typeProduit')->orderBy('montant_stock', 'desc')->get()]);
    }
}
