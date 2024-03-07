<?php

namespace App\Http\Controllers;

use App\Models\ProduitFini;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function index () {
        return view('admin.apps.commerciale.commande.produit-fini.index', ['produitFinis' => ProduitFini::with('typeProduit', 'images')->orderBy('montant_stock', 'desc')->get()]);
    }

    public function show (ProduitFini $produitFini) {
        $images = $produitFini->images()->get();
        $fournisseur = $produitFini->fournisseur;
        return view('admin.apps.commerciale.commande.produit-fini.show', ['produitFini' => $produitFini, 'images' => $images, 'fournisseur' => $fournisseur] );
    }
}
