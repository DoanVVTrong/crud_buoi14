@extends('master')
@section('tieu_de')
    Chương trình quản lý công việc
@endsection
@section('content')
    <div id="app">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Thêm mới nhiệm vụ</h5>
                        <div class="input-group my-2">
                            <input type="text" class="form-control" placeholder="Nhập mới tên nhiệm vụ"
                                v-model="thongTinCongViec.ten_cong_viec">
                            <div class="input-group-append">
                            <span class="input-group-text bg-danger text-light" style="cursor: pointer"
                                v-on:click="themMoi()"><b>Thêm mới công
                                    việc</b></span>
                        </div>
                    </div>
                    <select class="form-control" v-model='thongTinCongViec.tinh_trang'>
                        <option value="0" selected>Chưa hoàn thành</option>
                        <option v value="1">Đã hoàn thành</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3">Danh sách chưa hoàn thành</h5>
                    <template v-if="value.tinh_trang == 0" v-for="(value,key) in list">
                        <div class="alert border border-danger" role="alert">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6 text-danger">
                                    @{{ value.ten_cong_viec }}
                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-primary mr-2" v-on:click="value.tinh_trang = 1">Ok</button>
                                    <div class="btn btn-primary">Cancel</div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3">Danh sách đã hoàn thành</h5>
                    <template v-if="value.tinh_trang == 1" v-for="(value,key) in list">
                        <div class="alert border border-primary" role="alert">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6 text-primary">
                                    @{{ value.ten_cong_viec }}
                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-warning text-light"
                                        v-on:click="value.tinh_trang = 0">Undo</button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('contentJS')
    <script>
        new Vue({
                el: '#app',

                data: {
                    list: [
                        {
                            'ten_cong_viec': 'Đi chơi với người yêu mới',
                            'tinh_trang': 0
                        },
                        {
                            'ten_cong_viec': 'Chui vào hang',
                            'tinh_trang': 1
                        },
                        {
                            'ten_cong_viec': 'Đi uống trà sữa',
                            'tinh_trang': 0
                        },
                        {
                            'ten_cong_viec': 'Đi ăn bún bò',
                            'tinh_trang': 0
                        },
                        {
                            'ten_cong_viec': 'Code bài tập về nhà',
                            'tinh_trang': 1
                        },
                    ],

                    thongTinCongViec: {
                        'ten_cong_viec': '',
                        'tinh_trang': ''
                    },
                },

                methods: {
                    themMoi() {
                        this.list.push(this.thongTinCongViec);
                    }
                }
            },

        );
    </script>
@endsection
