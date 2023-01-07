<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postcode;
class PostcodeController extends Controller
{
    public function GetState($id) {

        $data = Postcode::select('state')->where('postcode',$id)->get();
        
        return response()->json([
           'data' => $data->toArray(),
        ]);
        
    }   
}
