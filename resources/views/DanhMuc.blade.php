@extends('master')
@section('tieu_de')
    Quản lý danh mục
@endsection
@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card border border-3 border-primary">
                <div class="card-header">
                    <b>Thêm Mới Danh Mục</b>
                </div>
                <div class="card-body">
                    <label for=""><b>Tên danh mục</b></label>
                    <input type="text" name="" id="" class="form-control mb-2 mt-2"
                        placeholder="Nhập tên danh mục">
                    <label for=""><b>Slug danh mục</b></label>
                    <input type="text" name="" id="" class="form-control mb-2 mt-2"
                        placeholder="Nhập số lượng danh mục">
                    <label for=""><b>Tình trạng</b></label>
                    <select class="form-select form-control mb-2 mt-2">
                        <option value="1" selected>Hoạt động</option>
                        <option value="0">Tạm hoãn</option>
                    </select>
                    <label for=""><b>Danh mục cha</b></label>
                    <select class="form-select form-control mb-2 mt-2">
                        <option value="1" selected>Hoạt động</option>
                        <option value="0">Tạm hoãn</option>
                    </select>
                </div>
                <div class="card-footer text-right">
                    <div class="btn btn-primary" style="cursor: pointer;"><b>Thêm mới</b></div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card  border border-2 border-danger">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">#</th>
                                <th class="text-center align-middle">Tên danh mục</th>
                                <th class="text-center align-middle">Slug danh mục</th>
                                <th class="text-center align-middle">Tình trạng</th>
                                <th class="text-center align-middle">Danh mục cha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle">22</td>
                                <td class="text-center align-middle">22</td>
                                <td class="text-center align-middle">22</td>
                                <td class="text-center align-middle">22</td>
                                <td class="text-center align-middle">22</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
