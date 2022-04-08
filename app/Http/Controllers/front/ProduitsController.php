<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index(){
        $produits = Produits::where("ispublished", true)->paginate(6);
        return view("front/boutique", compact("produits"));
    }
    public function show($id){
        $produit = Produits::find($id);
        return view("front/produit-detail", compact("produit"));
    }
}
