<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    //enregistrement des utilisateurs
    public function store(Request $request)
    {
        try{
            // $request->validate = ([
            //     'nom'          => 'required|string|max:100',
            //     'prenom'       => 'required|string|max:100',
            //     'sexe'         => 'required|string|max:10',
            //     'dateNaiss'    => 'required|date',
            //     'ville'        => 'required|string|max:100',
            //     'telephone'    => 'required',
            //     'email'        => 'required|string|email|max:255',
            //     'photo'        => 'required|string',
            //     'role'         => 'required|string',
            //     'password'     => 'required'
            // ]);

            $nom = $request->nom;
            $prenom = $request->prenom;
            $sexe = $request->sexe;
            $datenaiss = $request->dateNaiss;
            $ville = $request->ville;
            $telephone = $request->telephone;
            $email = $request->email;
            $photo = $request->photo;
            $role = $request->role;
            $password = $request->password;

            $user = new User ;
            $user->$nom;
            $user->$prenom;
            $user->$sexe;
            $user->$datenaiss;
            $user->$ville;
            $user->$telephone;
            $user->$email;
            $user->$photo;
            $user->$role;
            $user->$password;
           // $user->save();

            return response()->json([
                "message" => "enregistrement OK !",
                "status" => "200","oui" => $user
            ]);
        }catch(\Exception $e){
        return response()->json([
            "message" => "echec d'enregistrement !",
            "status" => "500"
        ]);
    }
    }

    // //user registration
    // public function register(Request $request){
    //     try{
    //         DB::table('users')->insert([
    //         "nom" => $request->input('nom'),
    //         "prenom" => $request->input('prenom'),
    //         "ville" => $request->input('ville'),
    //         "tel" => $request->input('tel'),
    //         "email"=>$request->input('email'),
    //         "role"=> $request->input('role'),
    //         "password"=> Hash::make($request->input('password')),
    //     ]);
    //     return response()->json(['message'=>'enregistrement réussi !!', 'status'=>'200']);
    //     }catch(\Exception $e){
    //         \Log::error($e->getMessage());
    //         return response()->json((['message'=>'echec d\'enregistrement de l\'utilisateur', 'status'=>'500']));
    //     }
        
    //}

    //see all users
    public function getUsers(){
        return response()->json(DB::table('users')->get());
    }
}
