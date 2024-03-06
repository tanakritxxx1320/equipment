@extends('layouts.app')
{{-- @section('title','เพิ่มครุภัณฑ์') --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data" class="form theme-form">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>ชื่อครุภัณฆ์</label>
                                        <input class="form-control" type="text" name="eq_name" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>หมายเลขครุภัณฆฺ์</label>
                                        <input class="form-control" type="text" name="eq_code" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>สถานะครุภัณฑ์</label>
                                        <input class="form-control" type="text" name="eq_status" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>รหัสครุภัณฑ์</label>
                                        <input class="form-control" type="text" name="eq_sn" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>วันที่ได้รับ</label>
                                        <input class="form-control" type="date" name="date_receive" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>งบประมาณ</label>
                                        <input class="form-control" type="text" name="eq_fund" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>ราคา/หน่วย</label>
                                        <input class="form-control" type="text" name="eq_price" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>จำนวน</label>
                                        <input class="form-control" type="text" name="eq_amount" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>วันหมดประกัน</label>
                                        <input class="form-control" type="text" name="eq_expire" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>สถานที่</label>
                                        <input class="form-control" type="text" name="eq_place" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>อ้างอิง</label>
                                        <input class="form-control" type="text" name="eq_ref" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="d-block mb-4">
                                            <span class="form-label d-block">รูปภาพ</span>
                                            <input required name="eq_pic" type="file" class="form-control"/>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>หมายเหตุ</label>
                                        <input class="form-control" type="text" name="eq_note" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>หน่วยงานผู้ใช้</label>
                                        <input class="form-control" type="text" name="eq_organization" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>วิธีที่ได้มา</label>
                                        <input class="form-control" type="text" name="eq_receive_method" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>ผู้ขาย</label>
                                        <input class="form-control" type="text" name="agent_name" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>ประเภท</label>
                                        <input class="form-control" type="text" name="type_id" placeholder=""
                                               data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-sm-4">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label>สถานะครุภภัณฆ์</label>--}}
                            {{--                                        <input class="form-control" name="eq_status" type="text" placeholder="Enter project Rate" data-bs-original-title="" title="">--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-4">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label>Project Type</label>--}}
                            {{--                                        <select class="form-select">--}}
                            {{--                                            <option>Hourly</option>--}}
                            {{--                                            <option>Fix price</option>--}}
                            {{--                                        </select>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-4">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label>Priority</label>--}}
                            {{--                                        <select class="form-select">--}}
                            {{--                                            <option>Low</option>--}}
                            {{--                                            <option>Medium</option>--}}
                            {{--                                            <option>High</option>--}}
                            {{--                                            <option>Urgent</option>--}}
                            {{--                                        </select>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-sm-4">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label>Project Size</label>--}}
                            {{--                                        <select class="form-select">--}}
                            {{--                                            <option>Small</option>--}}
                            {{--                                            <option>Medium</option>--}}
                            {{--                                            <option>Big</option>--}}
                            {{--                                        </select>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-4">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label>Starting date</label>--}}
                            {{--                                        <input class="datepicker-here form-control" type="text" data-language="en" data-bs-original-title="" title="">--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-4">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label>Ending date</label>--}}
                            {{--                                        <input class="datepicker-here form-control" type="text" data-language="en" data-bs-original-title="" title="">--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label>Enter some Details</label>--}}
                            {{--                                        <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col">--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="fileInput" class="form-label">Upload project file</label>--}}
                            {{--                                        <label class="d-block mb-4">--}}
                            {{--                                            <span class="form-label d-block">Your photo</span>--}}
                            {{--                                            <input required name="photo" type="file" class="form-control" />--}}
                            {{--                                        </label>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>        --}}
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <button type="submit" class="btn btn-primary my-3">บันทึก</button>
                                        <a class="btn btn-danger" href="{{route('admin.index')}}"
                                           data-bs-original-title="" title="">กลับ</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <h2 class="text text-center py-2">เพิ่มครุภัณฑ์</h2>--}}
    {{--    <form class=" m-5 p-2 bg-white" method="POST" action="{{ route('admin.store') }}">--}}

    {{--        @csrf--}}
    {{--        <div class="form-group">--}}
    {{--            <label for="eq_name">ชื่อครุภัณฑ์</label>--}}
    {{--            <input type="text" name="eq_name" class="form-control">--}}

    {{--            <label for="eq_code">หมายเลขครุภัณฑ์</label>--}}
    {{--            <input type="text" name="eq_code" class="form-control">--}}

    {{--            <label for="eq_status">สถานะครุภัณฑ์</label>--}}
    {{--            <input type="text" name="eq_status" class="form-control">--}}

    {{--            <label for="eq_sn">รหัสครุภัณฑ์</label>--}}
    {{--            <input type="text" name="eq_sn" class="form-control">--}}

    {{--            <label for="date_receive">วันที่ได้รับ</label>--}}
    {{--            <input type="date" name="date_receive" class="form-control">--}}

    {{--            <label for="eq_fund">งบประมาณ</label>--}}
    {{--            <input type="text" name="eq_fund" class="form-control">--}}

    {{--            <label for="eq_price">ราคา/หน่วย</label>--}}
    {{--            <input type="text" name="eq_price" class="form-control">--}}

    {{--            <label for="eq_amount">จำนวน</label>--}}
    {{--            <input type="text" name="eq_amount" class="form-control">--}}

    {{--            <label for="eq_expire">วันหมดประกัน</label>--}}
    {{--            <input type="date" name="eq_expire" class="form-control">--}}

    {{--            <label for="eq_place">สถานที่</label>--}}
    {{--            <input type="text" name="eq_place" class="form-control">--}}

    {{--            <label for="eq_ref">อ้างอิง</label>--}}
    {{--            <input type="text" name="eq_ref" class="form-control">--}}

    {{--            <label for="eq_pic">รูปภาพ</label>--}}
    {{--            <input type="file" name="eq_pic" class="form-control">--}}
    {{--            <label for="eq_note">หมายเหตุ</label>--}}
    {{--            <input type="text" name="eq_note" class="form-control">--}}


    {{--            <label for="eq_organization">หน่วยงานผู้ใช้</label>--}}
    {{--            <input type="text" name="eq_organization" class="form-control">--}}

    {{--            <label for="eq_receive_method">วิธีที่ได้มา</label>--}}
    {{--            <input type="text" name="eq_receive_method" class="form-control">--}}

    {{--            <label for="agent_name">ผู้ขาย</label>--}}
    {{--            <input type="text" name="agent_name" class="form-control">--}}

    {{--            <label for="type_id">ประเภท</label>--}}
    {{--            <input type="text" name="type_id" class="form-control">--}}


    {{--        </div>--}}
    {{--        <button type="submit" class="btn btn-primary my-3">บันทึก</button>--}}

    {{--        @if ($errors->any())--}}
    {{--            <div class="alert alert-danger">--}}
    {{--                <ul>--}}
    {{--                    @foreach ($errors->all() as $error)--}}
    {{--                        <li>{{ $error }}</li>--}}
    {{--                    @endforeach--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--    </form>--}}
@endsection
