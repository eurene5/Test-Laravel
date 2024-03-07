<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageProduitFini extends Model
{
    use HasFactory;

    protected $table = 'images_produit_fini';

    protected $primaryKey = 'id_image';

    public function produitFini () : BelongsTo {
        return $this->belongsTo(ProduitFini::class, 'id_produit_fini');
    }
}
