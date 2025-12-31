<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = auth()->user()->store->orders()->create([
            'total' => $request->total,
            'status' => 'pending'
        ]);

        ProcessOrderJob::dispatch($order->id);

        return back()->with('success', 'Order placed!');
    }
}

