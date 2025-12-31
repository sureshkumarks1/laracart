<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create()
    {
        return view('store.create');
    }

    public function store(Request $request)
    {
        auth()->user()->store()->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->dashboard();
    }
}

