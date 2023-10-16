<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TwoWHandaModel;
use Illuminate\Http\Request;

class GetTwoWHanda extends Controller
{
  public function checkKey($apikey){
   $keys = array('123456789','Tofik@4251');
   if(in_array($apikey,$keys)){
    return true;
   }else{
    return false;
   }
  }  
  public function index(Request $request){
    if(!$this->checkKey($request->header('api-key'))){
      $data = [
        "status" => "200",
        "message" => "unauthorized"
      ];
      return response()->json($data,200);
    }
        $data = TwoWHandaModel::all();
        if(count($data) > 0){
            $response = [
                "massege" => "Vehical Found",
                "status" => "200",
                "data" => $data,
            ];
          }else{
            $response = [
            "massage" => "Vehical not Found",
            "status" => "404",
            ];
          }
          return response() -> json($response,200);
    }
}
