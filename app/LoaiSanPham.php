<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = "loaisanpham";
    protected $primaryKey = "id_loai";
    protected $fillable = ['id_loai','ten_loai'];
    public function sanpham(){
        
        return $this->hasMany('app/SanPham','id_loai','id_loai');
    }
}
