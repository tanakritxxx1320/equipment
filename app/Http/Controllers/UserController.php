<?php

namespace App\Http\Controllers;

use App\Models\equipment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(auth()->user()->type === 1) return redirect()->route('admin.index'); 
        $equipments = equipment::where('user_id', '=', auth()->id())->get();  // ดึงข้อมูล equipment ทั้งหมด
        return view('user', ['equipments' => $equipments]);
    }
}
