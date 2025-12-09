<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $img_path = 'frontend/images/';

        return view('frontend.home.index', compact('img_path'));

    }
}
