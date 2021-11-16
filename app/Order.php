<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    const CREATED_AT    = 'dh_taoMoi'; // create_at
    const UPDATED_AT    = 'dh_capNhat'; // updated_at

    protected $table        = 'order';
    protected $fillable     = ['dh_thoiGianDatHang', 'dh_thoiGianNhanHang', 'dh_nguoiNhan', 'dh_diaChi', 'dh_dienThoai', 'dh_nguoiGui', 'dh_daThanhToan', 'dh_taoMoi', 'dh_capNhat', 'dh_trangThai'];
    protected $guarded      = ['dh_ma'];

    protected $primaryKey   = 'dh_ma';

    protected $dates        =  ['dh_taoMoi', 'dh_capNhat']; //Carbon\Carbon
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function khachhang()
    {
        return $this->belongsTo('App\Customer', 'kh_ma', 'kh_ma');   
    }
    public function chitietdonhangs()
    {
        return $this->hasMany('App\Orderdetail', 'dh_ma', 'dh_ma');
    }
}
