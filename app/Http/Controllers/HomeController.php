<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('home');
    }
    public function indexed(Request $request){
        $item = $request->input('content');
        $language = $request->input('language');


        $response = Http::get('https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl='.$language.'&dt=t&q='.$item);
        $data = $response->json();


        $result = $data[0][0][0];

        return view('home' , compact('item', 'result' ,'language'));






    }
}
