<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopCardController extends Controller
{
    protected $idUNico = "";
    const API_URL = "";
    //
    public function index(){
        //listaremos el carrito a traves de una peticion
    }
    public function store(Request $request){
        //anadir un producto al carrito a traves de una peticion
        //una vez anadido hay que volver a listasr los productos
        return $this->index();
    }
    public function update(Request $request){
        //actualizar el producto
        //una vez anadido hay que volver a listasr los productos
        return $this->index();
    }
    public function destroy(){
        //eliminar producto del carrito
        //una vez anadido hay que volver a listasr los productos
        return $this->index();
    }
}
