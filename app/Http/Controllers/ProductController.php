<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class ProductController extends Controller
{
    //'index','store','update'
    public function index(){
        //need to include this in the controller
        return Product::all();
    }
    /*
      @param Request $request
      @return Response
    */
    public function store(Request $request){

    }
    /*
      @param Request $request
      @param int $id
      @return Response
    */
    public function update(Request $request, $id){

    }
}
