<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $response = Http::withToken(ShopCardController::TOKEN)->get(ShopCardController::API_URL, [
            "idUnico" => auth()->user()->id
        ]);
        $shopCard = json_decode($response->body(), true);
        $order = new Order();
        $order->user()->associate(auth()->user());
        $order->save();
        $linea = 1;
        foreach ($shopCard as $line) {
            $orderLine = new OrderLine([
                'linea' => $linea,
                'nombre' => $line["nombre"],
                'precio' => $line["precio"],
                'cantidad' => $line["cantidad"]
            ]);
            $orderLine->order()->associate($order);
            $orderLine->save();
            $linea++;
        }

        return $this->show($order->load("orderlines"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //

        return view("orders.show", compact("order"));
    }
}
