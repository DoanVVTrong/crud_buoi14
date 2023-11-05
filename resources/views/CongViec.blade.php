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
                        <div class="btn btn-primary" v-on:click="hienThiData()">Lấy data</div>
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
                    list: [],

                    thongTinCongViec: {
                        'ten_cong_viec': '',
                        'tinh_trang': ''
                    },
                },

                methods: {
                    themMoi() {
                        // this.list.push(this.thongTinCongViec);
                        axios
                        .post('http://127.0.0.1:8000/api/tao-api-cong-viec',this.thongTinCongViec)
                        .then((res)=>{
                            console.log(res);
                        })
                        // location.reload();//hàm này dùng để f5
                        //Khi chúng ta f5 thì data sẽ về hàm create , vậy ta chỉ cần đưa hàm lấy list tại đây thì khỏi cần f5
                        this.hienThiData();//hiển thị lại ngay tại đây khỏi f5
                    },
                    hienThiData() {
                        axios
                            .get('http://127.0.0.1:8000/api/api-cong-viec')
                            .then((res) => {
                                console.log(res.data.list);
                                this.list = res.data.list;
                            })
                    }
                },
                created() {
                   this.hienThiData();// hiển thị data có sẵn lúc mới vào
                },
            },

        );
    </script>
@endsection
