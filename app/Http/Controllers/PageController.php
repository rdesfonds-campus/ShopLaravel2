<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return 'À propos de ShopLaravel';
    }

    public function contact()
    {
        return 'Contactez-nous';
    }
}