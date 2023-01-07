<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Postcode;
use Carbon\Carbon;


class CustomerController extends Controller
{

    public function storeDetails(Request $request){
        $customers = Customer::insertGetId([
            'name' => $request->name,
            'dob' => $request->dob,
            'address' => $request->address,
            'postcode_id' => $request->postcode_id,
            'created_at' =>  Carbon::now(),
        ]);
  
        return redirect()->route('dashboard');

    }

    public function GetCustomer (){

        $data = Customer::select('name' , 'dob' , 'postcode_id', 'postcode.state')
        ->join('postcode', 'customers.postcode_id', '=', 'postcode.postcode')
        ->get();


        return response()->json([
            'data' => $data->toArray(),
         ]);
    }
}
