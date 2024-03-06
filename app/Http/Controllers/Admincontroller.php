<?php

namespace App\Http\Controllers;

use App\Models\equipment;
use App\Models\type;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index()
    {
        $equipments = equipment::all();  // ดึงข้อมูล equipment ทั้งหมด
        return view('admin', ['equipments' => $equipments]);
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('eq_pic')->getClientOriginalName();
        $path = $request->file('eq_pic')->storeAs('eq',$fileName,'public');
        $requestData['eq_pic'] = '/storage/'.$path;
        equipment::create($requestData);
        return redirect()->route('admin.index')->with('message','equipment added!');
    }
}
