<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fournisseur extends Model
{
    use HasFactory;

    protected $table = 'fournisseur';

    protected $primaryKey = 'id_fournisseur';

    public function produitFini () : HasMany {
        return $this->hasMany(ProduitFini::class, 'id_fournisseur');
    }
}
