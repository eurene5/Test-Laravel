<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeProduit extends Model
{
    use HasFactory;

    protected $table = 'type_produit';

    protected $primaryKey = 'id_type_produit';

    public $timestamps = false;

    public function produitFini () {
        return $this->hasMany(ProduitFini::class, 'id_type_produit');
    }
}
