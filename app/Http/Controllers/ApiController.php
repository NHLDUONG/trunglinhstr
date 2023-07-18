<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Information;

class ApiController extends Controller
{

    public function apiEditInfo(Request $req)
    {
        $object = new \stdClass();
        $object->name       = $req->input('name') ?? "";
        $object->code       = $req->input('code') ?? "";
        $object->url        = $req->input('url') ?? "";
        $object->image      = $req->input('url') ?? "";
        $object->password   = $req->input('password') ?? "";
        $object->hotline    = $req->input('hotline') ?? "";
        $object->email      = $req->input('email') ?? "";
        
        $info = Information::select('id')->get();
        if(count($info)){
            for($idx=0;$idx < count($info);$idx++){
                $info[$idx]->delete();
            }

        }

        $object = Information::saveInfo($object);
        
        return true;
    }
}