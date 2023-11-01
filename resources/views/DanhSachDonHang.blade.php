@extends('master')
@section('tieu_de')
    Quản lý danh sách đơn hàng
@endsection
@section('content')
    <div id="app">
        <div class="row ">
            <div class="col-md-12">
                <div class="card p-0">
                    <div class="card-header text-center">
                        <h3>Danh Sách Đơn Hàng</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-uppercase align-middle text-center bg-primary text-light">#</th>
                                    <th class="text-uppercase align-middle text-center bg-primary text-light">Mã đơn
                                        hàng
                                    </th>
                                    <th class="text-uppercase align-middle text-center bg-primary text-light">Số lượng
                                    </th>
                                    <th class="text-uppercase align-middle text-center bg-primary text-light">Số điện
                                        thoại
                                    </th>
                                    <th class="text-uppercase align-middle text-center bg-primary text-light">Địa chỉ
                                    </th>
                                    <th class="text-uppercase align-middle text-center bg-primary text-light">Ghi chú
                                    </th>
                                    <th class="text-uppercase align-middle text-center bg-primary text-light">Trạng thái
                                    </th>
                                    <th class="text-uppercase align-middle text-center bg-primary text-light">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value,key) in list_don_hang">
                                    <tr>
                                        <th class="text-uppercase align-middle text-center text-dark">
                                            @{{ key + 1 }}</th>
                                        <td class="text-uppercase align-middle text-center text-dark">
                                            @{{ value.ma_don_hang }}</td>
                                        <td class="text-uppercase align-middle text-center text-dark">
                                            @{{ value.so_luong }}</td>
                                        <td class="text-uppercase align-middle text-center text-dark">
                                            @{{ value.so_dien_thoai }}</td>
                                        <td class="text-uppercase align-middle text-center text-dark">
                                            @{{ value.dia_chi }}</td>
                                        <td class="text-uppercase align-middle text-center text-dark">
                                            <div class="btn btn-info"><i class="fa-solid fa-info text-dark"></i></div>
                                        </td>
                                        <td class="text-uppercase align-middle text-center text-dark">
                                            <div class="btn btn-warning text-dark" style="min-width: 200px;"
                                                v-if="value.trang_thai == 0" v-on:click="value.trang_thai = 1"><b>Chưa
                                                    thanh Toán</b></div>
                                            <div class="btn btn-primary text-dark" style="min-width: 200px;"
                                                v-if="value.trang_thai == 1" v-on:click="value.trang_thai = 0"><b>Đã
                                                    thanh toán</b></div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="btn text-primary border border-2 border-primary"
                                                data-bs-toggle="modal" data-bs-target="#chiTietModal"
                                                v-on:click="viTriHienThi = key ; thongTinHienThi = value ; xemChiTiet()" style="cursor: pointer;">
                                                Xem chi tiết
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="chiTietModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Chi tiết đơn hàng</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card p-0">
                            <div class="card-header text-center">
                                <h3>Danh Sách Đơn Hàng</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase align-middle text-center bg-primary text-light">#
                                            </th>
                                            <th class="text-uppercase align-middle text-center bg-primary text-light">Mã
                                                đơn
                                                hàng
                                            </th>
                                            <th class="text-uppercase align-middle text-center bg-primary text-light">
                                                Tên
                                                đơn
                                                hàng
                                            </th>
                                            <th class="text-uppercase align-middle text-center bg-primary text-light">
                                                Hình
                                                ảnh
                                            </th>
                                            <th class="text-uppercase align-middle text-center bg-primary text-light">Số
                                                lượng
                                            </th>
                                            <th class="text-uppercase align-middle text-center bg-primary text-light">
                                                Giá
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template v-for="(value,key) in thongTinHienThi.chi_tiet_don_hang">
                                            <tr>
                                                <th class="text-uppercase align-middle text-center text-dark">
                                                    @{{ key + 1 }}
                                                </th>
                                                <td class="text-uppercase align-middle text-center text-dark">
                                                    @{{ value.ma_san_pham }}
                                                </td>
                                                <td class="text-uppercase align-middle text-center text-dark">
                                                    @{{ value.ten_san_pham }}
                                                </td>
                                                <td class="text-uppercase align-middle text-center text-dark"
                                                    style="width: 10%;">
                                                    <img v-bind:src="value.hinh_anh" alt="" width="100%">
                                                </td>
                                                <td class="text-uppercase align-middle text-center text-dark">
                                                    @{{ value.so_luong }}
                                                </td>
                                                <td class="text-uppercase align-m    <div id="app">
                                                    <div class="container">
                                                        <div class="row mt-4">
                                                            <div class="card p-0">
                                                                <div class="card-header text-center">
                                                                    <h3>Danh Sách Đơn Hàng</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th
                                                                                    class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                    #</th>
                                                                                <th
                                                                                    class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                    Mã đơn
                                                                                    hàng
                                                                                </th>
                                                                                <th
                                                                                    class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                    Số lượng
                                                                                </th>
                                                                                <th
                                                                                    class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                    Số điện
                                                                                    thoại
                                                                                </th>
                                                                                <th
                                                                                    class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                    Địa chỉ
                                                                                </th>
                                                                                <th
                                                                                    class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                    Ghi chú
                                                                                </th>
                                                                                <th
                                                                                    class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                    Trạng thái
                                                                                </th>
                                                                                <th
                                                                                    class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                    Action
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <template v-for="(value,key) in list_don_hang">
                                                                                <tr>
                                                                                    <th
                                                                                        class="text-uppercase align-middle text-center text-dark">
                                                                                        @{{ key + 1 }}</th>
                                                                                    <td
                                                                                        class="text-uppercase align-middle text-center text-dark">
                                                                                        @{{ value.ma_don_hang }}</td>
                                                                                    <td
                                                                                        class="text-uppercase align-middle text-center text-dark">
                                                                                        @{{ value.so_luong }}</td>
                                                                                    <td
                                                                                        class="text-uppercase align-middle text-center text-dark">
                                                                                        @{{ value.so_dien_thoai }}</td>
                                                                                    <td
                                                                                        class="text-uppercase align-middle text-center text-dark">
                                                                                        @{{ value.dia_chi }}</td>
                                                                                    <td
                                                                                        class="text-uppercase align-middle text-center text-dark">
                                                                                        <div class="btn btn-info"><i
                                                                                                class="fa-solid fa-info text-dark"></i>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td
                                                                                        class="text-uppercase align-middle text-center text-dark">
                                                                                        <div class="btn btn-warning text-dark"
                                                                                            style="min-width: 200px;"
                                                                                            v-if="value.trang_thai == 0"
                                                                                            v-on:click="value.trang_thai = 1">
                                                                                            <b>Chưa
                                                                                                thanh Toán</b></div>
                                                                                        <div class="btn btn-primary text-dark"
                                                                                            style="min-width: 200px;"
                                                                                            v-if="value.trang_thai == 1"
                                                                                            v-on:click="value.trang_thai = 0">
                                                                                            <b>Đã
                                                                                                thanh toán</b></div>
                                                                                    </td>
                                                                                    <td class="text-center align-middle">
                                                                                        <div class="btn text-primary border border-2 border-primary"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#chiTietModal"
                                                                                            v-on:click="viTriHienThi = key ; thongTinHienThi = value ; xemChiTiet()">
                                                                                            Xem chi tiết
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </template>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="chiTietModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                        Chi tiết đơn hàng</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="card p-0">
                                                                        <div class="card-header text-center">
                                                                            <h3>Danh Sách Đơn Hàng</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th
                                                                                            class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                            #
                                                                                        </th>
                                                                                        <th
                                                                                            class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                            Mã
                                                                                            đơn
                                                                                            hàng
                                                                                        </th>
                                                                                        <th
                                                                                            class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                            Tên
                                                                                            đơn
                                                                                            hàng
                                                                                        </th>
                                                                                        <th
                                                                                            class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                            Hình
                                                                                            ảnh
                                                                                        </th>
                                                                                        <th
                                                                                            class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                            Số
                                                                                            lượng
                                                                                        </th>
                                                                                        <th
                                                                                            class="text-uppercase align-middle text-center bg-primary text-light">
                                                                                            Giá
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <template
                                                                                        v-for="(value,key) in thongTinHienThi.chi_tiet_don_hang">
                                                                                        <tr>
                                                                                            <th
                                                                                                class="text-uppercase align-middle text-center text-dark">
                                                                                                @{{ key + 1 }}
                                                                                            </th>
                                                                                            <td
                                                                                                class="text-uppercase align-middle text-center text-dark">
                                                                                                @{{ value.ma_san_pham }}
                                                                                            </td>
                                                                                            <td
                                                                                                class="text-uppercase align-middle text-center text-dark">
                                                                                                @{{ value.ten_san_pham }}
                                                                                            </td>
                                                                                            <td class="text-uppercase align-middle text-center text-dark"
                                                                                                style="width: 10%;">
                                                                                                <img v-bind:src="value.hinh_anh"
                                                                                                    alt=""
                                                                                                    width="100%">
                                                                                            </td>
                                                                                            <td
                                                                                                class="text-uppercase align-middle text-center text-dark">
                                                                                                @{{ value.so_luong }}
                                                                                            </td>
                                                                                            <td
                                                                                                class="text-uppercase align-middle text-center text-dark">
                                                                                                @{{ value.gia_ban }}
                                                                                            </td>

                                                                                        </tr>
                                                                                    </template>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Đóng</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                            </div>iddle text-center text-dark">
                            @{{ value.gia_ban }}
                            </td>

                            </tr>
                            </template>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('contentJS')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                viTriHienThi: "",
                thongTinHienThi: {},
                list_don_hang: [{
                        'ma_don_hang': "DZ01",
                        'so_luong': 4,
                        'so_dien_thoai': 123123123,
                        'dia_chi': 'Đà Nẵng',
                        'trang_thai': 0,
                        'ghi_chu': 'Giao hàng tận giường nhé',
                        'chi_tiet_don_hang': [{
                                'ma_san_pham': "IP14",
                                'ten_san_pham': 'Iphone14Pro',
                                'hinh_anh': 'https://cdn.tgdd.vn/Products/Images/42/247508/s16/iphone-14-pro-gold-thumbtz-650x650.png',
                                'so_luong': 2,
                                'gia_ban': "25.000.000"
                            },
                            {
                                'ma_san_pham': "IP13",
                                'ten_san_pham': 'Iphone13Pro',
                                'hinh_anh': 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-thumb-600x600.jpg',
                                'so_luong': 1,
                                'gia_ban': "25.000.000"
                            },
                        ]
                    },
                    {
                        'ma_don_hang': "DZ02",
                        'so_luong': 2,
                        'so_dien_thoai': 456456456,
                        'dia_chi': 'Quảng Nam',
                        'trang_thai': 1,
                        'ghi_chu': 'Giao hàng cẩn thận, đừng làm vỡ',
                        'chi_tiet_don_hang': [{
                                'ma_san_pham': "MAC14",
                                'ten_san_pham': 'MacBook Pro 14',
                                'hinh_anh': 'https://cdn.tgdd.vn/Products/Images/42/247508/s16/iphone-14-pro-gold-thumbtz-650x650.png',
                                'so_luong': 4,
                                'gia_ban': "25.000.000"
                            },
                            {
                                'ma_san_pham': "IP13",
                                'ten_san_pham': 'Iphone13Pro',
                                'hinh_anh': 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-thumb-600x600.jpg',
                                'so_luong': 5,
                                'gia_ban': "25.000.000"
                            },
                        ]
                    },
                    {
                        'ma_don_hang': "DZ03",
                        'so_luong': 2,
                        'so_dien_thoai': 456456456,
                        'dia_chi': 'Quảng Nam',
                        'trang_thai': 1,
                        'ghi_chu': 'Giao hàng cẩn thận, đừng làm vỡ',
                        'chi_tiet_don_hang': [{
                                'ma_san_pham': "MAC16",
                                'ten_san_pham': 'MacBook Pro 16 inch M2 Pro',
                                'hinh_anh': 'data:image/webp;base64,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',
                                'so_luong': 5,
                                'gia_ban': "25.000.000"
                            },
                            {
                                'ma_san_pham': "IP13",
                                'ten_san_pham': 'Iphone13Pro',
                                'hinh_anh': 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-thumb-600x600.jpg',
                                'so_luong': 5,
                                'gia_ban': "25.000.000"
                            },
                        ]
                    }
                ],
            },
            created() {
                // Perform any necessary setup or initialization here
            },
            methods: {
                xemChiTiet() {
                    console.log(this.thongTinHienThi.chi_tiet_don_hang);
                }
            }
        });
    </script>
@endsection
