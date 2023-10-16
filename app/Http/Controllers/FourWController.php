<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FourWModel;
use Illuminate\Http\Request;

class FourWController extends Controller
{
    public function GetFourW(Request $request){
        $data = new FourWModel();
        $data->id = $request->input("id");
        $data->brand= $request->input("brand");
        $data->save();
        return response()->json([
           "status" => "200",
           "data" => $data
        ]);
    }
}
