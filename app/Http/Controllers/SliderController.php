<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SliderController extends Controller
{
    public function index()
    {
        return view('sliders.index');
    }
}
