@extends('layout')
@section('title','เพิ่มครุภัณฑ์')
@section('content')
    <h2 class="text text-center py-2">เพิ่มครุภัณฑ์</h2>
    <form method="POST" action="{{ route('admin.store') }}">

        @csrf
        <div class="form-group">
            <label for="eq_name">ชื่อครุภัณฑ์</label>
            <input type="text" name="eq_name" class="form-control">

            <label for="eq_code">หมายเลขครุภัณฑ์</label>
            <input type="text" name="eq_code" class="form-control">

            <label for="eq_status">สถานะครุภัณฑ์</label>
            <input type="text" name="eq_status" class="form-control">

            <label for="eq_sn">รหัสครุภัณฑ์</label>
            <input type="text" name="eq_sn" class="form-control">

            <label for="date_receive">วันที่ได้รับ</label>
            <input type="date" name="date_receive" class="form-control">

            <label for="eq_fund">งบประมาณ</label>
            <input type="text" name="eq_fund" class="form-control">

            <label for="eq_price">ราคา/หน่วย</label>
            <input type="text" name="eq_price" class="form-control">

            <label for="eq_amount">จำนวน</label>
            <input type="text" name="eq_amount" class="form-control">

            <label for="eq_expire">วันหมดประกัน</label>
            <input type="date" name="eq_expire" class="form-control">
            
            <label for="eq_place">สถานที่</label>
            <input type="text" name="eq_place" class="form-control">

            <label for="eq_ref">อ้างอิง</label>
            <input type="text" name="eq_ref" class="form-control">

            <label for="eq_pic">รูปภาพ</label>
            <input type="text" name="eq_pic" class="form-control">

            <label for="eq_note">หมายเหตุ</label>
            <input type="text" name="eq_note" class="form-control">


       
            
            <label for="eq_organization">หน่วยงานผู้ใช้</label>
            <input type="text" name="eq_organization" class="form-control">
            
            <label for="eq_receive_method">วิธีที่ได้มา</label>
            <input type="text" name="eq_receive_method" class="form-control">
            
            <label for="agent_name">ผู้ขาย</label>
            <input type="text" name="agent_name" class="form-control">

            <label for="type_id">ประเภท</label>
            <input type="text" name="type_id" class="form-control">
            
            
        </div>
     {{-- <button type="submit" value="บันทึก" class="btn btn-primary my-3">บันทึก</button> --}}
     {{-- <a href="{{route('addeq')}}" class="btn btn-succes">ข้อมูลครุภัณฑ์ทั้งหมด</a> --}}
     <button type="submit" class="btn btn-primary my-3">บันทึก</button>

     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </form>
