<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function homeController(){
        echo "Hello";
    }


    public function contactPage(){
        return view('contact');
    }


    public function processContact(Request $request){
        $input = $request->except(['_token']);
        $formValid = true;
        $error = [];
        if(strlen($input['name']) == 0){
            $formValid =  false;
            $error[] = "El nombre esta vacio";
        }
        if(strlen($input['email']) == 0){
            $formValid = false;
            $error[] = "El email esta vacio";
        }
        if(strlen($input['phone']) == 9){
            $formValid = false;
            $error[] = "El telefono no es valido";
        }
        if(strlen($input['message']) == 0){
            $formValid = false;
            $error[] = "El mensake esta vacio";
        }
        if(!$formValid)
            return view('error', [
                'errors' => $error,
                'array' => [1,2,3,4]
        ]);
        return view('success', $input);
    }


    public function processContactPut(Request $request){
        echo "Formulario completado con el method PUT";
        die();
    }

}
