<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmModel extends Model
{
    use HasFactory;
    protected $table = 'master_umkm';
    protected $primaryKey = 'id_umkm';
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Models\ProductModel', 'umkm_id', 'id_umkm');
    }
}
