<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProduitFini extends Model
{
    use HasFactory;
    
    protected $table = "produit_fini";

    protected $primaryKey = 'id_produit_fini';

    public $timestamps = false;

    public function typeProduit (): BelongsTo {
        return $this->belongsTo(TypeProduit::class, 'id_type_produit');
    }
}
