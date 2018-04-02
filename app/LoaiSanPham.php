<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = "loaisanpham";
    public function sanpham(){
        return $this->hasMany('app/sanpham','id_loai','id_loai');
    }
}
