<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    //
    public $timestamps = false;
    
    protected $table        = 'orderdetail';
    protected $fillable     = ['dh_ma','sp_ma','ctdh_soLuong', 'ctdh_donGia'];
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

     /**
     * Set the keys for a save update query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(Builder $query)
    {
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }
        foreach($keys as $keyName){
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }
        return $query;
    }
    /**
     * Get the primary key value for a save query.
     *
     * @param mixed $keyName
     * @return mixed
     */
    protected function getKeyForSaveQuery($keyName = null)
    {
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }
        if (isset($this->original[$keyName])) {
            return $this->original[$keyName];
        }
        return $this->getAttribute($keyName);
    }
}
