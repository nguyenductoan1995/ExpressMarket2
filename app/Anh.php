<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anh extends Model
{
    protected $table = "chitiethinhanh";
    public function sanpham(){
        return $this->belongsTo('App/SanPham','id_sp','id_hinh');
    }
    public $timestamps = false;
    protected $primaryKey = "id_hinh";
}
