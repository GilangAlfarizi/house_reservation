<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class DashboardController extends Controller
{
    public function index()
    {
        $houses=House::where('status', 'Available')->get();
        return view('welcome', ['houses' => $houses]);
    }
    
}
