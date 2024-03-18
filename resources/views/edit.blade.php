@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Edit Equipment</h1>

                <form action="{{ route('admin.update', ['id' => $equipment]) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="eq_name">Name:</label>
                        <input type="text" class="form-control" id="eq_name" name="eq_name"
                            value="{{ $equipment->eq_name }}">
                    </div>

                    <div class="form-group">
                        <label for="eq_code">หมายเลขครุภัณฑ์:</label>
                        <input type="text" class="form-control" id="eq_code" name="eq_code"
                            value="{{ $equipment->eq_code }}">
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label>สถานะครุภัณฑ์</label>
                            <select class="form-control" name="eq_status">
                                <option value="" disabled selected>เลือกสถานะ</option>
                                @foreach ([['id' => 0, 'name' => 'ใช้งานได้'], ['id' => 1, 'name' => 'ชำรุด'], ['id' => 2, 'name' => 'เสื่อมสภาพ']] as $option)
                                    <option value="{{ $option['id'] }}"
                                        {{ isset($equipment) && $equipment->eq_status == $option['id'] ? 'selected' : '' }}>
                                        {{ $option['name'] }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="eq_sn">SN:</label>
                        <input type="text" class="form-control" id="eq_sn" name="eq_sn"
                            value="{{ $equipment->eq_sn }}">
                    </div>


                    <div class="form-group">
                        <label for="date_receive">date_receive:</label>
                        <input type="date" class="form-control" id="date_receive" name="date_receive"
                            value="{{ $equipment->date_receive }}">
                    </div>

                    <div class="form-group">
                        <label for="eq_fund">fund:</label>
                        <input type="text" class="form-control" id="eq_fund" name="eq_fund"
                            value="{{ $equipment->eq_fund }}">
                    </div>


                    <div class="form-group">
                        <label for="eq_price">price:</label>
                        <input type="text" class="form-control" id="eq_price" name="eq_price"
                            value="{{ $equipment->eq_price }}">
                    </div>



                    <div class="form-group">
                        <label for="eq_amount">amount:</label>
                        <input type="text" class="form-control" id="eq_amount" name="eq_amount"
                            value="{{ $equipment->eq_amount }}">
                    </div>



                    <div class="form-group">
                        <label for="eq_expire">eq_expire:</label>
                        <input type="date" class="form-control" id="eq_expire" name="eq_expire"
                            value="{{ $equipment->eq_expire }}">
                    </div>

                    <div class="form-group">
                        <label for="eq_place">eq_place:</label>
                        <input type="text" class="form-control" id="eq_place" name="eq_place"
                            value="{{ $equipment->eq_place }}">
                    </div>


                    <div class="form-group">
                        <label for="eq_ref">eq_ref:</label>
                        <input type="text" class="form-control" id="eq_ref" name="eq_ref"
                            value="{{ $equipment->eq_ref }}">
                    </div>

                    <div class="form-group">
                        <label for="eq_pic">pic:</label>
                        <input name="eq_pic" type="file" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="eq_note">note:</label>
                        <input type="text" class="form-control" id="eq_note" name="eq_note"
                            value="{{ $equipment->eq_note }}">
                    </div>

                    <div class="form-group">
                        <label for="eq_organization">eq_organization:</label>
                        <input type="text" class="form-control" id="eq_organization" name="eq_organization"
                            value="{{ $equipment->eq_organization }}">
                    </div>


                    <div class="form-group">
                        <label for="eq_receive_method">eq_receive_method:</label>
                        <input type="text" class="form-control" id="eq_receive_method" name="eq_receive_method"
                            value="{{ $equipment->eq_receive_method }}">
                    </div>


                    <div class="form-group">
                        <label for="agent_name">agent_name:</label>
                        <input type="text" class="form-control" id="agent_name" name="agent_name"
                            value="{{ $equipment->agent_name }}">
                    </div>

            

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label>ประเภท</label>
                                <select class="form-control" name="type_id">
                                    <option value="" disabled selected>เลือกประเภท</option>
                                    @foreach ($types as $option)
                                        <option value="{{ $option['id'] }}"
                                            {{ isset($equipment) && $equipment->type_id == $option['id'] ? 'selected' : '' }}>
                                            {{ $option['name'] }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label>ผู้รับผิดชอบ</label>
                                <select class="form-control" name="user_id">
                                    <option value="" disabled selected>เลือกผู้รับผิดชอบ</option>
                                    @foreach ($users as $option)
                                        <option value="{{ $option['id'] }}"
                                            {{ isset($equipment) && $equipment->user_id == $option['id'] ? 'selected' : '' }}>
                                            {{ $option['name'] }}
                                        </option>
                                    @endforeach
                                </select>


                            </div>


                        </div>
                    </div>











                    <!-- Add more fields as needed -->

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
