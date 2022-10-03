<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artisan;
use Illuminate\Support\Facades\Hash;

class ArtisanController extends Controller
{
    //end point d'enregistrement d'un artrisan
    public function store(Request $request)
    {
        $request->validate([
            'nom'          => 'required|string|max:100',
            'prenom'       => 'required|string|max:100',
            'ville'        => 'required|string|max:100',
            'telephone'    => 'required',
            'email'        => 'required|string|email|max:255',
            'photo'        => 'required',
            'password'     =>  'required'
        ]);

        try{
            $nom = $request->nom;
            $prenom = $request->prenom;
            $ville = $request->ville;
            $telephone = $request->telephone;
            $email = $request->email;
            $photo = $request->photo;
            $password = $request->password;

            $artisan = new artisan;
            $artisan->nom = $nom;
            $artisan->prenom = $prenom;
            $artisan->ville = $ville;
            $artisan->numero_telephone = $telephone;
            $artisan->email = $email;
            $artisan->photo = $photo;
            $artisan->password = Hash::make($password);
            $artisan->save();

            return response()->json([
                "message" => "enregistrement OK !",
                "status" => "200"
            ]);
        }catch(\Exception $e){
            return response()->json([
                "message" => "echec d'enregistrement !",
                "status" => "500"
            ]);
        }

    }
}
