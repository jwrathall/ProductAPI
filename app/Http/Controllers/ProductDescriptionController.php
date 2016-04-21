<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Description;
use App\Http\Requests;

class ProductDescriptionController extends Controller
{
    //    //'index','store','update'
        public function index($productId){
            //using a scope we defined on the Model
            return Description::ofProduct($productId)->get();
        }
        /*
          @param Request $request
          @return Response
        */
        public function store(Request $request){

        }
}
