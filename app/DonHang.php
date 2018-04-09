<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = "donhang";

    public function chitietdonhang(){
        return $this-> hasMany('app/chitietdonhang','id_donhang','id_ctdh');
    }
    public $timestamps = false;
    protected $primaryKey = "id_dh";
}

