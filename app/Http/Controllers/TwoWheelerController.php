<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TwoWheeler;

class TwoWheelerController extends Controller
{
    public function insertTwoWheelerInfo(Request $request){
        $data = new TwoWheeler();
        $data->id = $request->input("id");
        $data->brand = $request->input('brand');
        $data->save();
        return response()->json([
            "status" => "200",
            "data" => $data
        ]);
    }
}
