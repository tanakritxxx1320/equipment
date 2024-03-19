<?php

namespace App\Http\Controllers;

use App\Models\equipment;
use App\Models\type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admincontroller extends Controller
{
    public function index()
    {
        $equipments = Equipment::select('eq_name', DB::raw('count(*) as amount'))
        ->groupBy('eq_name')
        ->get()
        ->map(function ($item) {
            $eq = Equipment::where('eq_name', '=', $item->eq_name)
                ->join('types', 'types.id', '=', 'equipment.type_id') // แก้ไขตรงนี้
                ->first();
            $eq->amount = $item->amount;
            return $eq;
        });
        return view('admin', ['equipments' => $equipments]);
    }
    
    
    public function addeq(Request $request)
    {
        $eq_code = $request->input('eq_code'); // Retrieve the value of the 'id' parameter from the request
        $equipment = Equipment::find($eq_code);


        $users = User::where('type', '=', 0)->pluck('name', 'id')->map(fn ($name, $id) => ['id' => $id, 'name' => $name]);

        $types = type::pluck('type_name', 'id')->map(fn ($name, $id) => ['id' => $id, 'name' => $name]);

        return view('addeq', ['users' => $users, 'equipment' => $equipment, 'types' => $types]);
    }




    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('eq_pic')) {
            // Process file upload
            $fileName = time() . '_' . $request->file('eq_pic')->getClientOriginalName();
            $path = $request->file('eq_pic')->storeAs('eq', $fileName, 'public');
            $requestData['eq_pic'] = '/storage/' . $path;
        }
        Equipment::create($requestData);
        return redirect()->route('admin.index')->with('message', 'Equipment added successfully!');
    }

    public function delete(Request $request)
    {
        DB::table('equipment')->where('eq_code', $request->eq_code)->delete();
        return  redirect()->route('admin.index')->with('equipment delete!');
    }

    // public function edit($id)
    //{        
    //  $data=equipment::find($id);
    //return view('admin.edit', compact('data'));    
    //}

    // Controller
    public function edit(string $eq_code)
    {
        // $eq_code = $request->eq_code; // Retrieve the value of the 'id' parameter from the request
        $equipment = equipment::find($eq_code);
        $types = type::pluck('type_name', 'id')->map(fn ($name, $id) => ['id' => $id, 'name' => $name]);
        $users = User::where('type', '=', 0)->pluck('name', 'id')->map(fn ($name, $id) => ['id' => $id, 'name' => $name]);
        return view('edit', ['equipment' => $equipment, 'types' => $types, 'users' => $users]);
    }


    public function update(Request $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('eq_pic')) {
            $fileName = $request->eq_pic->getClientOriginalName(); // Get the original file name
            $path = $request->file('eq_pic')->storeAs('eq', $fileName, 'public');
            $requestData['eq_pic'] = '/storage/' . $path;
        }
        $equipment = Equipment::find($request->eq_code);
        $equipment->eq_name = $request->input('eq_name');
        $equipment->eq_code = $request->input('eq_code');
        $equipment->eq_status = $request->input('eq_status');
        $equipment->eq_sn = $request->input('eq_sn');
        $equipment->date_receive = $request->input('date_receive');
        $equipment->eq_fund = $request->input('eq_fund');
        $equipment->eq_price = $request->input('eq_price');
        $equipment->eq_amount = $request->input('eq_amount');
        $equipment->eq_expire = $request->input('eq_expire');
        $equipment->eq_place = $request->input('eq_place');
        $equipment->eq_ref = $request->input('eq_ref');
        $equipment->eq_pic =   $requestData['eq_pic'];
        $equipment->eq_note = $request->input('eq_note');
        $equipment->eq_receive_method = $request->input('eq_receive_method');
        $equipment->agent_name = $request->input('agent_name');
        $equipment->eq_organization = $request->input('eq_organization');

        $equipment->type_id = $request->input('type_id');
        $equipment->user_id = $request->input('user_id');
        // Update other fields as needed
        $equipment->save();

        return redirect()->route('admin.index')->with('success', 'Equipment updated successfully');


        // $equipment = Equipment::find($request->id); 
        // $equipment->update($requestData);
        // return redirect()->route('admin.index')->with('message','equipment added!');
    }
}
