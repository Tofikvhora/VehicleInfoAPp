<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TwoWHandaModel;
use Illuminate\Http\Request;

class PostTwoWHanda extends Controller
{
    public function PostTwoWHanda(Request $request){
        $data = new TwoWHandaModel();
        $data->id = $request->input("id");
        $data->brand = $request->input("brand");
        $data->save();
        return response()->json([
           "status" => "200",
           "data" => $data,
        ]);
    }
}
