<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'master_product';
    protected $primaryKey = 'id_product';
    public $timestamps = false;

    public function umkm()
    {
        return $this->hasOne('App\Models\UmkmModel', 'id_umkm', 'umkm_id');
    }
}
