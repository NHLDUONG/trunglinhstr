<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
    }

    public function introduce()
    {
        return Inertia::render('Introduce');
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }
    public function signin()
    {
        return Inertia::render('Signin');
    }

    public function news()
    {
        return Inertia::render('News');
    }
    public function Service()
    {
        return Inertia::render('Service');
    }

    public function album()
    {
        return Inertia::render('Album');
    }
}
