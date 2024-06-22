<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['name_product', 'stock', 'price', 'desckription','id_brand'];
    public $visible = ['name_product', 'stock', 'price', 'desckription','id_brand'];
    public $timestamps = true;

    public function Brand(){
        return $this->belongsTo(Brand::class, 'id_brand');
    }
}