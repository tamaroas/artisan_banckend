<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'Tel1',
        'Tel2',
        'ville',
        'email',
        'photo',
        'pasword'
    ]
}
