<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    use HasFactory;

    protected $table = 't_product';
    protected $primaryKey = 'product_id';
    public $timestamps = false;
    protected $fillable = [
        'product_type',
        'product_code',
        'product_name',
        'product_brand',
        'product_size',
        'product_tread_depth',
        'product_road_condition',
        'product_desc',
        'product_photo',
    ];
}
