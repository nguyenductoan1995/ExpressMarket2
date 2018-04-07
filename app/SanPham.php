<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table ="sanpham";
    public function loaisanpham(){
        return $this->belongsTo('app/LoaiSanPham','id_loai','id_sp');
    }
    public function chitietdonhang(){
        return $this->hasMany('app/chitietdonhang','id_sp','id_sp');
    }
    public function anh(){
        
        return $this->hasMany('app/Anh','id_sp','id_hinh');
    }
}
