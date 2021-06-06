<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'properties' => Property::all()->sortBy('id')
        ]);
    }
}
