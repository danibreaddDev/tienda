<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShopCardController extends Controller
{
    const API_URL = "http://carrito/api/ShopCard";
    const TOKEN = "Q2AlacGYmbzVhcD4FrH0";
    //
    public function index()
    {
        //listaremos el carrito a traves de una peticion
        $response = Http::withToken(ShopCardController::TOKEN)->get(ShopCardController::API_URL, [
            "idUnico" => auth()->user()->id
        ]);
        $shopCard = json_decode($response->body(), true);
        return view("shopcard.index", compact("shopCard"));
    }
    public function store(Request $request)
    {
        //anadir un producto al carrito a traves de una peticion
        //una vez anadido hay que volver a listasr los productos
        Http::withToken(ShopCardController::TOKEN)->post(ShopCardController::API_URL, [
            "idProducto" => $request->idProducto,
            "nombre" => $request->nombre,
            "precio" => $request->precio,
            "cantidad" => $request->cantidad,
            "idUnico" => auth()->user()->id,
        ]);
        return $this->index();
    }
    public function update(Request $request)
    {
        //actualizar el producto
        //una vez anadido hay que volver a listasr los productos
        Http::withToken(ShopCardController::TOKEN)->put(ShopCardController::API_URL . "/" . $request->id, [
            "cantidad" => $request->cantidad
        ]);

        return $this->index();
    }
    public function destroy(Request $request)
    {
        //eliminar producto del carrito
        //una vez anadido hay que volver a listasr los productos
        Http::withToken(ShopCardController::TOKEN)->delete(ShopCardController::API_URL . "/" . $request->id);
        return $this->index();
    }
}
