<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        return new Response("Hola Mundo");
    }
}
