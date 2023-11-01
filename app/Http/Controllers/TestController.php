<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view("index");
    }

    public function indexDanhMuc(){
        return view("DanhMuc");
    }
    public function indexCongViec(){
        return view("CongViec");
    }
    public function indexDanhSachDonHang(){
        return view("DanhSachDonHang");
    }
}
