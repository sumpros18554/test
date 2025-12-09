<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $img_path = 'frontend/images/';

        return view('frontend.services.index', compact('img_path'));

    }
}
