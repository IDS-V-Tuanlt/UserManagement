<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    //
    public $timestapms = false;
    
    protected $table        = 'orderdetail';
    protected $fillable     = ['ctdh_soLuong', 'ctdh_donGia'];
    protected $guarded      = ['dh_ma','sp_ma'];

    protected $primaryKey   = ['dh_ma','sp_ma'];

    public $incrementing = false;

    public function donhang()
    {
        return $this->belongsTo('App\Order', 'dh_ma', 'dh_ma');   
    }
    public function sanpham()
    {
        return $this->belongsTo('App\Product', 'sp_ma', 'sp_ma');   
    }
}
