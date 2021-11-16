<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    const CREATED_AT    = 'sp_taoMoi'; // create_at
    const UPDATED_AT    = 'sp_capNhat'; // updated_at

    protected $table        = 'product';
    protected $fillable     = ['sp_ten', 'sp_giaBan', 'sp_thongTin',  'sp_taoMoi', 'sp_capNhat', 'sp_trangThai'];
    protected $guarded      = ['sp_ma'];

    protected $primaryKey   = 'sp_ma';

    protected $dates        =  ['sp_taoMoi', 'sp_capNhat']; //Carbon\Carbon
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function chitietdonhangs()
    {
        return $this->hasMany('App\Orderdetail', 'sp_ma', 'sp_ma');
    }
}
