<?php

namespace App\Http\Controllers;

use App\Models\CongViec;
use Illuminate\Http\Request;

class CongViecController extends Controller
{
    public function layData(){
        $data = CongViec::select('id','ten_cong_viec','tinh_trang')->get();
        return response()->json([
            'list' => $data,
        ]);
    }

    public function taoData(Request $request){
        // dd($request->all());//Khi click nut them moi -> vào root api-tao-cong-viec thi no se tra ve cac data duoc them moi
        //nghia la $request->all() : lấy all data trả về , ta có thể sài $request->data để lấy data của cột đó
        // dd($request->ten_cong_viec);
        CongViec::create([
             'ten_cong_viec' => $request->ten_cong_viec,// Nghĩa là ở cột ten_cong_viec sẽ lấy data của thằng được mình thêm vào thông qua yêu cầu request
             'tinh_trang' => $request->tinh_trang,

        ]);
    }

    public function updateData(){
        
    }
}
