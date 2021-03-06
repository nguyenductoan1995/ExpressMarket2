<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = "loaisanpham";
    public function sanpham(){
        
        return $this->hasMany('app\SanPham','id_sp','id_loai');
    }
    protected $primaryKey = "id_loai";
}
