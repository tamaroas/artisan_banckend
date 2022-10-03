<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'date_naiss',
        'sexe',
        'telephone',
        'ville',
        'email',
        'photo',
        'role',
        'password'
    ];
}
