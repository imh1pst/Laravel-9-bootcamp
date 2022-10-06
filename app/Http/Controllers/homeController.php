<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function contactPage(){
        return view('contact');
    }

    public function processContact(Request $request){
        echo "Formulario completado";
        die();
    }

    public function processContactPut(Request $request){
        echo "Formulario completado con el method PUT";
        die();
    }

}
