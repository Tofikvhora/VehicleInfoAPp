<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FourWModel;
use Illuminate\Http\Request;

class GetFourW extends Controller
{


    public function checkApi($apikey){
        $keys = array('123456789','Tofik@4251');
        if(in_array($apikey,$keys)){
            return true;
        }else{
            return false;
        }
    }
    public function index(Request $request){
        if(!$this->checkApi($request->header('api-key'))){
         $data = [
            "status" => "200",
            "message" => "unauthorized"
         ];
         return response()->json($data,200);
        }
        $data = FourWModel::all();
        if(count($data)>0){
            $response = [
                "massage" => "Vehical Found",
                "status" => "200",
                "data" => $data,
            ];
        }else{
            $response = [
                "massage" => "Vehical Not Found",
                "status" => "200",
            
            ];
        }
        return response()->json($response,200);
    }
}
