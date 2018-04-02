<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table ="chitietdonhang";
    public function donhang(){
        return $this->belongTo('app/donhang','id_donhang','id_donhang');
    }
    public function sanpham(){
        return $this->belongTo('app/sanpham','id_sp','id_ctdh');
    }
}
