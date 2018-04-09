<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table ="chitietdonhang";
    public function donhang(){
        return $this->belongsTo('app/donhang','id_donhang','id_donhang');
    }
    public function sanpham(){
        return $this->belongsTo('app/sanpham','id_sp','id_ctdh');
    }
    protected $primaryKey = "id_ctdh";
}

