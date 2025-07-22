<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produse;

class ControllerDeProduse extends Controller
{
    // pagina de start, aici utilizatoru interactioneaza cu prima pagina
    public function index() {
        return view('Produse.index');
    }
    // pagina care creeaza produsele, controlleru ia requestu si il duce pe utilizator sa vada pagina de creare (view)
    public function create() {
        return view('Produse.create');
    }
    // logica de introducere a datelor in DB,  neaparat Request fara ala nu merge sa bagi
    public function store(Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric', // numeric
        'description' => 'required',
    ]);

    \App\Models\Produse::create($data);

    return redirect()->route('product.index');
    }

    //sa ne arate tot din db in tabel
    public function showAll() {
    $products = Produse::all(); // ia toate produsele din tabela
    return view('Produse.showAll', compact('products'));
    }

    // functia de edit
    public function edit($id) {
    $product = \App\Models\Produse::findOrFail($id);
    return view('Produse.edit', compact('product'));
    }


    // functia de update
    public function update(Request $request, $id) {
    $product = \App\Models\Produse::findOrFail($id);

    $data = $request->validate([
        'name' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric',
        'description' => 'required'
    ]);

    $product->update($data);

    return redirect()->route('product.showAll')->with('success', 'Product updated');
    }

    //functia de delete
    public function destroy($id) {
    $product = \App\Models\Produse::findOrFail($id);
    $product->delete();

    return redirect()->route('product.showAll')->with('success', 'Product deleted');
    }




}
