<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::all();
        return view('welcome', compact('items'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'stock' => 'required|numeric'
        ]);
        Item::create($request->all());
        return redirect('/');
    }
}