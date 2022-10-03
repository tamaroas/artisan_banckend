<?php

namespace App\Models;

use App\Models\Artisan;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'artisan_id',
        'montant',
    ];

    public function artisans()
    {
        return $this->belongsTo(Artisan::class,'artisan_id');
    }

    public function clients()
    {
        return $this->belongsTo(Client::class,'client_id');
    }


}
