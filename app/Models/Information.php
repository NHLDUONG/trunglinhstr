<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'information';

    public static function saveInfo($obj)
    {

        $info = new Information();
        $info->name     = $obj->name ?? "";
        $info->code     = $obj->code ?? "";
        $info->address  = $obj->address ?? "";     
        $info->hotline  = $obj->hotline ?? "";
        $info->email	= $obj->email ?? "";
        $info->website  = $obj->website ?? "";
        $info->time     = $obj->time ?? "";
        $info->image	= $obj->image ?? "";
        $info->save();
        return true;
    }

}
