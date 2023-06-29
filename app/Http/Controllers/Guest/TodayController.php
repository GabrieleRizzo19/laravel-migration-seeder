<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TodayController extends Controller
{
    public function index(){

        $trains = Train::where('departure_time', '>' , '2023-06-29' )->get();

        return view('today', compact('trains'));
    }
}
