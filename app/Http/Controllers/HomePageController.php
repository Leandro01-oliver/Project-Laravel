<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function paginaprincipal()
    {
        return view('site.home_page');
    }
}