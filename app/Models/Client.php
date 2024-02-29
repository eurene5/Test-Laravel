<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "client";
    protected $primaryKey = 'id_client';
    protected $fillable = ['nom',
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
        'id_type_clien',
        'accepte_mail_marketing',
        'poste_contact',
        'commentaire',
        'date_creation'
    ];

    protected $casts = [
        'date_creation' => 'datetime',
    ];

    public $incrementing = true;

    public $timestamps = false;
}
