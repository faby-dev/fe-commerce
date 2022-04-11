<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produits::latest()->paginate(5);
        return view('admin.produits.index',compact('produits'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'prix' => 'required|integer',
            'extrait' => 'required|string',
            'quantite' => 'required|integer',
            'description' => 'required',
            'images' => 'required|string',
            'ispublished' => 'required',
        ]);
        Produits::create($request->all());

        return redirect()->route('admin.produits.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit  = Produits::find($id);
        return view('admin.produits.show',compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produits)
    {
        return view('admin.produits.edit',compact('produits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produits $produits)
    {
        $request->validate([
            'titre' => 'required|string',
            'prix' => 'required|integer',
            'extrait' => 'required|string',
            'quantite' => 'required|integer',
            'description' => 'required',
            'images' => 'required|string',
            'ispublished' => 'required',
        ]);
        $produits->update($request->all());

        return redirect()->route('admin.produits.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produits $produits)
    {
        $produits->delete();
        return redirect()->route('admin.produits.index')
            ->with('success','Product deleted successfully');
    }
}
