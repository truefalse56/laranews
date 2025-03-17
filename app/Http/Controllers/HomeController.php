<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $banners = \App\Models\Banner::where('is_active', true)
        ->orderBy('position')
        ->get();
    return view('index', compact('banners'));
}
}