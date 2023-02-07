<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Degrees;

class MainController extends Controller
{
    public function home() {


        $degrees = Degrees::all();
    
        $data = [
    
            'degrees' => $degrees
        ];
    
        return view('pages.home', $data);
    }
}
