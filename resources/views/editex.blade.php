@extends('layouts.app')
@section('content')
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">จัดการข้อมูลร้านอาหาร</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="">จัดการข้อมูลประเภทอาหาร</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="">จัดการข้อมูลเกณฑ์</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="">จัดการข้อมูลความคิดเห็น</a>
                </li>   
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="ค้นหาประเภทร้านอาหาร" aria-label="Search">
                <button class="btn btn-info" type="submit">ค้นหา</button>
            </form>
            </div>
        </div>
    </nav> 
    <br><br>
<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card">
        <div class="card-header">แก้ไขข้อมูล</div>
        <div class="card-body">
            <form action="{{route('foodtype.update', $data->id)}}" method="post"> 
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id">รหัสประเภท</label>
                <input type="text" disabled="true" class="form-control" name="id" value="{{$data->id}}" >
            </div>
            @error('id')
                <span class="text-danger my-2">{{$message}}</span> -->
             @enderror
            
            <div class="form-group">
                <label for="type_name">ชื่อประเภท</label>
                <input type="text" class="form-control" name="type_name" value="{{$data->type_name}}" >
            </div>
            @error('type_name')
                <span class="text-danger my-2">{{$message}}</span>
            @enderror
                <br>
                <input type="submit" value="บันทึก" class="btn btn-primary"  >
            </form>
        </div>     
    </div>    
</div>  
</div>                  
@endsection