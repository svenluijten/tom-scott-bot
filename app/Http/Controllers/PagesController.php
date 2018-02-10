<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PagesController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function support()
    {
        return view('support');
    }

    public function privacy()
    {
        return view('privacy');
    }
}
