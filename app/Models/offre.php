<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offre extends Model
{
    use HasFactory;

    protected $fillable=[
        'type',
        'description',
        'objet',
        'user_id'
    ];
}
