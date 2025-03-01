<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubImages extends Model
{
    use HasFactory;

    protected $table = 'product_sub_images';

    protected $fillable = [
     'product_id',
     'images',
    ];
}
