<?php

namespace App\Http\Controllers;

use App\Models\equipment;
use App\Models\type;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function store(Request $request){
        //   dd($request);
           $equipment = equipment::create([
                'eq_name'=>$request->eq_name,
                'eq_code'=>$request->eq_code,
                'eq_status'=>$request->eq_status,
                'eq_sn'=>$request->eq_sn,
                'date_receive'=>$request->date_receive,
                'eq_fund'=>$request->eq_fund,
                'eq_price'=>$request->eq_price,
                'eq_amount'=>$request->eq_amount,
                'eq_expire'=>$request->eq_expire,
                'eq_place'=>$request->eq_place,
                'eq_ref'=>$request->eq_ref,
                'eq_pic'=>$request->eq_pic,
                'eq_note'=>$request->eq_note,
                'eq_organization'=>$request->eq_organization,
                'eq_code'=>$request->eq_code,
                'eq_receive_method'=>$request->eq_receive_method,
                'agent_name'=>$request->agent_name,
                'type_id'=>$request->type_id
            ]);

            
   

            return redirect()->route('home');


    }
}
