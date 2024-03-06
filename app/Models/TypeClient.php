<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeClient extends Model
{
    use HasFactory;

    protected $table = "type_client";
    protected $primaryKey = 'id_type_client';
    public $timestamps = false;

    public function client() {
        return $this->hasMany(Client::class, 'id_type_client');
    }
}
