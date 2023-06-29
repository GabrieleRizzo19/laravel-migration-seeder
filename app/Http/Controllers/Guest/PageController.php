<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        
        $trains = Train::all();

        $data = [
            'trains' => $trains
        ];

        return view('homepage', $data);
    }
}
