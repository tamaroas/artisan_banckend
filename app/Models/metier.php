<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metier extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'libelle',
        'secteur_activite',
        'categorie_id'
    ];
}
