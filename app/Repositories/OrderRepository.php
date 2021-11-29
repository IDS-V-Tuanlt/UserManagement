<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Order;
use App\Product;
use App\Orderdetail;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderRepository
{
    /**
     * @var Order
     */
    protected $order;

    /**
     * OrderRepository constructor.
     * 
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    public function product($id)
    {
        return Product::find($id);
    }
    public function insertData(Request $request)
    {
        DB::beginTransaction();

        try {
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
            DB::commit();
            return 1;
        } catch (\Exception $e) {
            DB::rollback();
            return 0;
        }
    }
}
