@extends('layouts.app')
@section('content')
    <div class="flex-lg-1 h-screen overflow-y-lg-auto mx-4 p-3 rounded bg-white">
        <header>
            <div class="container-fluid">
                <div class=" pt-6">
                    <div class="row align-items-center my-3">
                        <div class="col-sm col-12">
                            <h1 class="h2 ls-tight">ครุภัณฑ์ทั้งหมด</h1>
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
                        @foreach ($equipments as $equipment)
                            <div class="col-xl-3 col-sm-6 my-2">
                                <div class="card">
                                    <div class="card-header border-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="h6 text-sm font-semibold">
                                                    <span
                                                        class="{{ $equipment->eq_status == 0 ? 'text-success' : ($equipment->eq_status == 1 ? 'text-warning' : 'text-danger') }} me-2">●</span>
                                                    {{ $equipment->eq_status == 0 ? 'ใช้งานได้' : ($equipment->eq_status == 1 ? 'ชำรุด' : 'เสื่อมสภาพ') }}</span>
                                            </div>
                                            <div class="text-end  d-flex align-items-center">
                                                <div class="dropdown">
                                                    <a class="text-muted" href="#" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ route('admin.addeq', ['id' => $equipment->id])}}" class="dropdown-item">แก้ไข</a>
                                                        <a href="{{route('admin.delete',['id'=> $equipment->id])}}" class="dropdown-item text-danger">ลบ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">     
                                        <figure class="mx-auto">
                                            <div class="mx-auto"  data-toggle="modal" data-target="#{{$equipment->eq_code}}" style="height: 200px; overflow: hidden;">
                                                <img alt="..." class="rounded img-fluid object-fit-cover"
                                                    src="{{ asset($equipment->eq_pic) }}">
                                            </div>
                                        </figure>

                                        <span class="fs-4 fw-bold ">{{ $equipment->eq_name }}</span>
                                        <p class="text-muted">{{ $equipment->eq_place }}</p>
                                        <hr class="my-7">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-6">
                                                <span
                                                    class="d-block h6 text-heading mb-0">{{ $equipment->eq_price }}฿</span>
                                                <span class="d-block text-sm text-muted">ต่อหน่วย</span>
                                            </div>
                                            <div class="col-6">
                                                <span
                                                    class="d-block h6 text-heading mb-0">{{ $equipment->eq_amount }}</span>
                                                <span class="d-block text-sm text-muted">จำนวน</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="{{$equipment->eq_code}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">{{ $equipment->eq_name }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">


                                            <figure class="mx-auto" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="mx-auto" style="width: 60%; overflow: hidden;">
                                                    <img alt="..." class="rounded img-fluid object-fit-cover"
                                                        src="{{ asset($equipment->eq_pic) }}">
                                                </div>
                                            </figure>

                                            <div class="flex flex-row">
                                                <p><span>ชื่อครุภัณฑ์</span> <span>{{$equipment->eq_name}}</span></p>
                                                <p><span>ประเภทครุภัณฑ์</span> <span>{{$equipment->type_name}}</span></p>
                                                <p><span>ราคา/หน่อย</span> <span>{{$equipment->eq_price}}</span></p>
                                            </div>


                                        </div>
                                        {{-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> --}}
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="row align-items-center">
                       <div class="col-lg-8">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-sm pagination-spaced gap-2 justify-content-end">
                                    <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
