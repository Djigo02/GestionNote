<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function home(){
       $listeApprenant = Apprenant::all();
        return view("apprenants.liste",["apprenants"=>$listeApprenant]);
        // return Apprenant::all();
    }
}
