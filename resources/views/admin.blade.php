@extends('layouts.app')
{{-- @section('title','เพิ่มครุภัณฑ์') --}}
@section('content')
    <div class="flex-lg-1 h-screen overflow-y-lg-auto mx-4 p-3 rounded bg-white">
        <header>
            <div class="container-fluid">
                <div class=" pt-6">
                    <div class="row align-items-center my-3">
                        <div class="col-sm col-12"><h1 class="h2 ls-tight">ครุภัณฆ์</h1></div>
                        <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                            <a href="{{route('addeq')}}" class="btn btn-sm btn-primary">
                                <span class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span>
                                <span>เพิ่ม</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <div class="vstack gap-6">
                    <div class="d-flex flex-column flex-md-row gap-3 justify-content-between">
                        <div class="d-flex gap-3 py-2">
                            <div class="input-group input-group-sm input-group-inline">
                                <span class="input-group-text pe-2"><i class="bi bi-search"></i> </span>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm px-3 btn-neutral d-flex align-items-center">
                                    <i class="bi bi-funnel me-2"></i>
                                    <span>Filters</span>
                                    <span class="vr opacity-20 mx-3"></span>
                                    <span class="text-xs text-primary">2</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row g-6">
                        @foreach($equipments as $equipment)
                            <div class="col-xl-3 col-sm-6 my-2">
                                <div class="card">
                                    <div class="card-header border-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="h6 text-sm font-semibold">
                                                    <span class="{{$equipment->eq_status  == 0 ? 'text-success' : ($equipment->eq_status == 1 ? 'text-warning' : 'text-danger')}} me-2">●</span> {{$equipment->eq_status  == 0 ? 'ใช้งานได้' : ($equipment->eq_status == 1 ? 'ชำรุด' : 'เสื่อมสภาพ')}}</span>
                                            </div>
                                            <div class="text-end mx-n2 d-flex align-items-center">
                                                <a href="#" class="px-2 text-muted">
                                                    <i class="bi bi-arrow-clockwise"></i>
                                                </a>
                                                <div class="dropdown">
                                                    <a class="text-muted" href="#" role="button"
                                                       data-bs-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="#!" class="dropdown-item">Action </a>
                                                        <a href="#!" class="dropdown-item">Another action </a>
                                                        <a href="#!" class="dropdown-item">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <figure class="mx-auto">
                                            <div class="w-12 mx-auto">
                                                <img alt="..." class="rounded" width="390" src="{{$equipment->eq_pic}}">
                                            </div>
                                        </figure>
                                        <span class="fs-4 fw-bold ">{{$equipment->eq_name}}</span>
                                        <p class="text-muted">{{$equipment->eq_place}}</p>
                                        <hr class="my-7">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-6">
                                                <span class="d-block h6 text-heading mb-0">{{$equipment->eq_price}}฿</span>
                                                <span class="d-block text-sm text-muted">ต่อหน่วย</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-block h6 text-heading mb-0">{{$equipment->eq_amount}}</span>
                                                <span class="d-block text-sm text-muted">จำนวน</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="row align-items-center">
{{--                        <div class="col-lg d-none d-lg-block"><a href="#" class="font-semibold text-sm"><i class="bi bi-printer me-2"></i>Print</a></div>--}}
                        <div class="col-lg-8">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-sm pagination-spaced gap-2 justify-content-end">
                                    <li class="page-item disabled"><a class="page-link" href="#"><i
                                                class="bi bi-chevron-left"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="bi bi-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    {{--    <div class="container-fluid">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm-12">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <div class="form theme-form">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col">--}}
    {{--                                    <div class="mb-3">--}}
    {{--                                        <label>Project Title</label>--}}
    {{--                                        <input class="form-control" type="text" placeholder="Project name *" data-bs-original-title="" title="">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col">--}}
    {{--                                    <div class="mb-3">--}}
    {{--                                        <label>Client name</label>--}}
    {{--                                        <input class="form-control" type="text" placeholder="Name client or company name" data-bs-original-title="" title="">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col-sm-4">--}}
    {{--                                    <div class="mb-3">--}}
    {{--                                        <label>Project Rate</label>--}}
    {{--                                        <input class="form-control" type="text" placeholder="Enter project Rate" data-bs-original-title="" title="">--}}
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
    {{--                                        <label>Upload project file</label>--}}
    {{--                                        <form class="dropzone dz-clickable" id="singleFileUpload" action="/upload.php">--}}
    {{--                                            <div class="dz-message needsclick">--}}
    {{--                                                <i class="icon-cloud-up"></i>--}}
    {{--                                                <h6>Drop files here or click to upload.</h6>--}}
    {{--                                                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>--}}
    {{--                                            </div>--}}
    {{--                                        </form>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col">--}}
    {{--                                    <div><a class="btn btn-success me-3" href="#" data-bs-original-title="" title="">Add</a><a class="btn btn-danger" href="#" data-bs-original-title="" title="">Cancel</a></div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
