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
        $info->url      = $obj->url ?? "";     
        $info->image    = $obj->image ?? "";
        $info->password = $obj->password ?? "";
        $info->hotline  = $obj->hotline ?? "";
        $info->email    = $obj->email ?? "";
        $info->save();
        return true;
    }

}
