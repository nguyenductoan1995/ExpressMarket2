<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = "donhang";
    public function khachhang(){
        return $this->belongTo('app/khachhang','id_kh','id_dh');
    }
    public function chitietdonhang(){
        return $this-> hasMany('app/chitietdonhang','id_donhang','id_ctdh');
    }
}
