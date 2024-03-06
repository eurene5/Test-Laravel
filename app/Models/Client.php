<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    protected $table = "client";
    protected $primaryKey = 'id_client';

    protected $fillable = [
        'nom',
        'prenom',
        'adresse_num',
        'adresse_voie',
        'adresse_code_postal',
        'adresse_complement',
        'adresse_ville',
        'adresse_pays',
        'telephone',
        'email',
        'raison_social',
        'nif_stat',
        'bic',
        'commentaire',
        'id_type_entreprise',
        'id_type_client',
        'poste_contact',
        'accepte_mail_marketing',
    ];

    public function typeClient () : BelongsTo {
        return $this->belongsTo(TypeClient::class, 'id_client');
    }

    public function typeEntreprise () : BelongsTo {
        return $this->belongsTo(TypeEntreprise::class, 'id_client');
    }

    public $timestamps = false;
}
