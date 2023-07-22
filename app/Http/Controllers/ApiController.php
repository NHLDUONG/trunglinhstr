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
        $object->address    = $req->input('address') ?? "";
        $object->hotline    = $req->input('hotline') ?? "";
        $object->email      = $req->input('email') ?? "";
        $object->website    = $req->input('website') ?? "";
        $object->time       = $req->input('time') ?? "";
        $object->image      = $req->input('image') ?? "";
        
        $info = Information::select('id')->get();
        if(count($info)){
            for($idx=0;$idx < count($info);$idx++){
                $info[$idx]->delete();
            }

        }

        $object = Information::saveInfo($object);
        
        return true;
    }

    public function apiGetInfo(Request $req)
    {
        try {
            $info = Information::select('name','code','address','hotline','email','website','time')->first();
            if($info) {
                return response()->json([
                    'success' => true,
                    'infor' => $info,
                ],200 );
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Không thể lấy dữ liệu, vui lòng liên hệ admin',
                    'message_title' => "Thông báo"
                ], 400);
            }
        } catch (\Exception $e) {
            report($e);
            return response()->json([
                'success' => false,
                'message' => 'Không thể lấy dữ liệu, vui lòng liên hệ admin',
                'message_title' => "Lấy dữ liệu thất bại"
            ], 400 );
        }
        
    }
}