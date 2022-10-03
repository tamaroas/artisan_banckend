<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artisan extends Model
{
    use HasFactory;

    protected $fillable =[
        'nom',
        'prenom',
        'ville',
        'numero_telephone',
        'email',
        'photo',
        'password'

    ];
}
