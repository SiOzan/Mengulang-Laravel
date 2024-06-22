<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = ['name_brand'];
    public $visible = ['name_brand'];
    public $timestamps = true;

    public function Product(){
        return $this->hasMany(Product::class, 'id_brand');
    }

}