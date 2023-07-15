<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function admin()
    {
        return Inertia::render('Admin/Admin');
    }

    public function saveInfor(Request $req)
    {
        dd($req);
    }

    public function editContact(Request $req)
    {
        return Inertia::render('Admin/EditContact');
    }
}
