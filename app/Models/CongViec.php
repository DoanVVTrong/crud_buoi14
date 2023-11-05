<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongViec extends Model
{
    use HasFactory;
    protected $table = 'cong_viecs';

    //theo ông thầy nó thiếu liệt kê tất cả các trường nên nó k chạy
    protected $fillable = [
        'ten_cong_viec',
        'tinh_trang'
    ];
}
