<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Orderdetail;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function checkout(Request $request)
    {
        $kh_ma = Customer::insertGetId([
            'kh_hoTen' => $request->input('kh_hoTen'),
            'kh_gioiTinh' => $request->input('kh_gioiTinh'),
            'kh_email' => $request->input('kh_email'),
            'kh_diaChi' => $request->input('kh_diaChi'),
            'kh_dienThoai' => $request->input('kh_dienThoai'),
        ]);
        $dh_ma = Order::insertGetId([
            'kh_ma' => $kh_ma,
            'dh_thoiGianNhanHang' => Carbon::now()->addDays(3),
            'dh_nguoiNhan' => $request->input('kh_hoTen'),
            'dh_diaChi' => $request->input('kh_diaChi'),
            'dh_dienThoai' => $request->input('kh_dienThoai'),
        ]);
        Orderdetail::create([
            'dh_ma'     => $dh_ma,
            'sp_ma'   => $request->input('sp_ma'),
            'ctdh_soLuong'   => $request->input('ctdh_soLuong'),
            'ctdh_donGia'   => $request->input('ctdh_donGia'),
        ]);
        return back()->with(['status'=>'Order Success']);
    }
}
