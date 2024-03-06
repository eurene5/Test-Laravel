<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEntreprise extends Model
{
    use HasFactory;

    protected $table = "type_entreprise";
    protected $primaryKey = 'id_type_entreprise';
    public $timestamps = false;

    public function client() {
        return $this->hasMany(Client::class, 'id_type_entreprise');
    }
}
