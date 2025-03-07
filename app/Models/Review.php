<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'name', 'email', 'rating', 'review'];

    Public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
