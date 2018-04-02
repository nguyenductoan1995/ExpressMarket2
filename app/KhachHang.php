<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = "khachhang";
    public function donhang(){
        return $this->hasMany('app/donhang','id_kh','id_kh');
    }
}
