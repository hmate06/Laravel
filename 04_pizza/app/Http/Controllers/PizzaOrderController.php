<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePizzaOrderRequest;
use App\Models\PizzaOrder;
use Illuminate\Http\Request;

class PizzaOrderController extends Controller
{
    public function index()
    {
        $orders = PizzaOrder::all(); // összes rekord

        return view(
            'home',[
                'sizes' => PizzaOrder::SIZES,
                'pasta' => PizzaOrder::PASTA,
                'orders' => $orders
            ]

        );
    }

    public function store(StorePizzaOrderRequest $request)
    {
        PizzaOrder::create($request->validated());
        //dd($request);
        return redirect()->route('orders.index');
    }
}
